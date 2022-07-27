@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Overview</span>
        </div>

        <div class="boxes">
            <div class="box box4">
                <i class="fa-solid fa-users"></i>
                <span class="text">Personne Inscrit</span>
                <span class="number">{{ $nbr_users }}</span>
            </div>
            <div class="box box4">
                <i class="fa-solid fa-house-chimney"></i>
                <span class="text">Bungalows</span>
                <span class="number">{{ $nbr_bungalows }}</span>
            </div>
            <div class="box box4">
                {{-- <i class="fa-solid fa-car-wrench"></i> --}}
                <i class="fa-solid fa-calendar-check"></i>
                <span class="text">Réservation</span>
                <span class="number">{{ $nbr_reservations }}</span>
            </div>
        </div>

        {{-- <div class="activity-data">
            <div class="data names">
                <span class="data-title">Personne Inscrit</span>
                <span class="data-list">{{ $nbr_users }}</span>

            </div>
            <div class="data email">
                <span class="data-title">Bungalows</span>
                <span class="data-list">{{ $nbr_bungalows }}</span>

            </div>
            <div class="data joined">
                <span class="data-title">Nombre de Réservation</span>
                <span class="data-list">{{ $nbr_reservations }}</span>

            </div> --}}

        </div>
    </div>
</div>
@endsection