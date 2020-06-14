@extends('layouts/layout', ['title' => 'New visit'])

@section('content')
<div class="container_add">
<h2>{{$animal[0]->name}}'s new visit</h2>
    <form action="/visits/create" method="post">
    <input type="hidden" name="animal_id" value="{{$animal[0]->id}}">
        <input type="hidden" name="owner_id" value="{{$animal[0]->owner_id}}">
        <label for="">
            Record <br>
            <textarea type="text" name="record" value=""></textarea>
        </label>
        <br>
        <br>
        <label for="">
            Doctor <br>
            <input type="text" name="doctor_id" value="">
        </label>
        <input type="submit" value="Save" class="button">
    </form>
<div>
@endsection