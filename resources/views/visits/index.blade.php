@extends('layouts/layout', ['title' => 'Visits'])

@section('content')

    @foreach($visits as $visit)
    <p>{{$visit->doctor->id}}</p>
    @endforeach
    
@endsection