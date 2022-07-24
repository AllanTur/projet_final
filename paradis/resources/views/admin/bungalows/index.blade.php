@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Liste des Bungalows</span>
            <button style="margin-left: 10px" type="button" class="btn btn-outline-primary"><a
                    href="{{ route('admin.bungalows.create') }}">Ajouter</a></button>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Name</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
            </div>
            <div class="data email">
                <span class="data-title">E-mail</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
            </div>
            <div class="data joined">
                <span class="data-title">Date</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
            </div>
            <div class="data type">
                <span class="data-title">Type</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
            </div>
            <div class="data status">
                <span class="data-title">Status</span>
                <span class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary">Modifier</button>
                        <button type="button" class="btn btn-outline-danger">Supprimer</button>
                    </div>
                </span>
                <span class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary">Modifier</button>
                        <button type="button" class="btn btn-outline-danger">Supprimer</button>
                    </div>
                </span>
                <span class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary">Modifier</button>
                        <button type="button" class="btn btn-outline-danger">Supprimer</button>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection