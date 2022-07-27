@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Liste des Réservations</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Nom</span>

                @foreach ($reservations as $reservation)
                <span style="padding-top: 10px" class="data-list">{{ $reservation->bungalows->nom }}</span>
                @endforeach
                
                
            </div>
            <div class="data email">
                <span class="data-title">Prenom</span>
                @foreach ($reservations as $reservation)
                <span style="padding-top: 10px" class="data-list">{{ $reservation->bungalows->description }}</span>
                @endforeach
            </div>
            <div class="data joined">
                <span class="data-title">Email</span>
                @foreach ($reservations as $reservation)
                <span style="padding-top: 10px" class="data-list">{{ $reservation->users->nom }}</span>
                @endforeach
            </div>
            <div class="data type">
                <span class="data-title">Date de début</span>
                @foreach ($reservations as $reservation)
                <span style="padding-top: 10px" class="data-list">{{ $reservation->debut }}</span>
                @endforeach
            </div>
            <div class="data type">
                <span class="data-title">Date de fin</span>
                @foreach ($reservations as $reservation)
                <span style="padding-top: 10px" class="data-list">{{ $reservation->fin }}</span>
                @endforeach
            </div>
            <div class="data status">
                <span style="padding-top: 10px" class="data-title">status</span>
                @foreach ($reservations as $reservation)
                <span class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        
                        <form method="POST" action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                            onsubmit="return confirm('Êtes-vous sur de vouloir supprimer se bungalow ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>

                        </form>
                    </div>
                </span>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
@endsection