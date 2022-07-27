@extends('layouts.paradislayouts.paradis')

@section('content')
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @foreach ($bungalows as $bungalow)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                            src="{{ Storage::url($bungalow->image) }}" alt="Image du bungalow"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <p>{{ $bungalow->nom }}</p>
                            <p class="card-text">{{ $bungalow->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">

                                @if(auth()->check() && (auth()->user()->is_admin == 0 || auth()->user()->is_admin == 1))
                                <div class="btn-group">
                                    <a type="button" href="{{ route('bungalows', $bungalow->id) }}"
                                        class="btn btn-sm btn-success">Réserver</a>
                                </div>
                                @else
                                <div class="btn-group">
                                    <a type="button" href="{{ route('register') }}"
                                        class="btn btn-sm btn-success">inscrivez-vous pour réserver</a>
                                </div>
                                @endif

                                <h4 class="text-muted">{{ $bungalow->prix }} €/nuit</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

</main>
@endsection