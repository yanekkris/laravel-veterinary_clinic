@extends('layouts.layout', ['title' => 'Pets'])

@section ('content')

<div class="container_pet">
<div class="pets_div pet">
        <h2>{{ $animal->name }}</h2>
        <div class="pet_info ">
        <p><strong>Breed:</strong> {{ $animal->breed }}</p>
        <p><strong>Age:</strong> {{ $animal->age }}</p>
        <p><strong>Weight:</strong> {{ $animal->weight }}</p>
        </div>
        <div class="img"><img src="/images/{{ $animal->photo}}" alt="Dogo"></div>

        <h3>Owner: <a href="/owners/{{$animal->owner->id}}"> {{$animal->owner->first_name." ".$animal->owner->surname}} </a></h3>
        <h4>Last visit: <a href="/visits/{{$visits[0]}}"> {{$visits[0]->created_at}} </a></h4>
        <a href="/animals/{{ $animal->id }}/edit"><button>Edit</button></a>
    <a href="/visits/{{$animal->id}}"><button>Visits</button></a>
    </div>  
</div>

@endsection