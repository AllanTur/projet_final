@extends('layouts.paradislayouts.paradis')

@section('content')

    <p>{{ $reserves->nom }}</p>
    <p>{{ $reserves->description }}</p>
    <img class="card-img-top"
    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
    alt="Thumbnail [100%x225]" style="height: 225px; width: 250px; display: block;"
    src="{{ Storage::url($reserves->image) }}" alt="Image du bungalow"
    data-holder-rendered="true">
    <p>{{ $reserves->prix }}</p>

@endsection