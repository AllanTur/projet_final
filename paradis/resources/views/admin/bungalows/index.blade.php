@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Liste des Bungalows</span>
            <button style="margin-left: 10px" type="button" class="btn btn-outline-primary"><a href="{{ route('admin.bungalows.create') }}">Ajouter</a></button>
        </div>

        {{-- @foreach ($bungalows as $bungalow) --}}

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Nom</span>

                @foreach ($bungalows as $bungalow)

                <span class="data-list">{{ $bungalow->nom }}</span>

                @endforeach
            </div>
            <div class="data email">
                <span class="data-title">Description</span>
                @foreach ($bungalows as $bungalow)

                <span class="data-list">{{ $bungalow->description }}</span>
                
                @endforeach
            </div>
            <div class="data joined">
                <span class="data-title">Photo</span>
                @foreach ($bungalows as $bungalow)

                <span class="data-list"><img style="width: 50px;height: 50px;" src="{{ Storage::url($bungalow->image) }}" alt="Image du bungalow"></span>
                
                @endforeach
            </div>
            <div class="data type">
                <span class="data-title">Prix</span>
                @foreach ($bungalows as $bungalow)

                <span class="data-list">{{ $bungalow->prix }}</span>
                
                @endforeach
            </div>
            <div class="data status">
                <span class="data-title">Action</span>

                @foreach ($bungalows as $bungalow)

                <span class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary">Modifier</button>
                        <button type="button" class="btn btn-outline-danger">Supprimer</button>
                    </div>
                </span>
                
                @endforeach
               
                
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection