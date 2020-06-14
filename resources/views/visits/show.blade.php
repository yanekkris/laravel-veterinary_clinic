@extends('layouts/layout', ['title' => 'ha'])

@section('content')
<div class="container_visits">
    <div class="visits_title">
    <h2><a href="/animals/{{$visits[0]->animal->id}}">{{$visits[0]->animal->name}}'s visits</h2> 
    </div>
    <div class="visit_div add">
        <a href="/visits/{{$animal_id}}/new">+</a>
        </div>
    @foreach ($visits as $visit)
        <div class="visit_div">
            <p>Visited: {{$visit->created_at}}</p> 
            <p>Report: {{$visit->report}}</p> 
            <p>Owner: <a href="/owners/{{$visit->animal->owner->id}}">{{$visit->animal->owner->first_name. " " .$visit->animal->owner->surname }}</a></p> 
        </div>
    @endforeach
</div>
@endsection