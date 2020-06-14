<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Animal;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::all();

        return view('visits.index', compact('visits'));
    }

    public function show($animal_id)
    {
        $visits = Visit::where('animal_id', $animal_id)->get();

        return view('visits.show', compact('visits', 'animal_id'));
    }

    public function new($animal_id)
    {     
        $animal=Animal::where('id', $animal_id)->get();

        return view('visits.new', compact('animal'));
    }

    public function create(Request $request)
    {     
       $animal = new Animal;

       $animal->owner_id = $request->input('owner_id');
       $animal->animal_id = $request->input('animal_id');
       $animal->record = $request->input('record');
       $animal->doctor_id = $request->input('doctor_id');


        return redirect('visits.index');
    }
}
