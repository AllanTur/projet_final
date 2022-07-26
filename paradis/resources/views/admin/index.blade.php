@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Activitée</span>
        </div>

        <div class="activity-data">
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
               
            </div>
           
        </div>
    </div>    
</div>
@endsection