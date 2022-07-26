@extends('layouts.adminlayouts.admin')

@section('content')
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <span class="text">Liste des personnes inscrite</span>
            {{-- <button style="margin-left: 10px" type="button" class="btn btn-outline-primary"><a
                    href="{{ route('admin.bungalows.create') }}">Ajouter</a></button> --}}

        </div>

        <!-- ############################################## LISTE DES BUNGALOWS ##################################################"-->

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Prenom</span>

                @foreach ($users as $user)

                <span style="padding-top: 20px" class="data-list">{{ $user->prenom }}</span>

                @endforeach
            </div>

            <div class="data names">
                <span class="data-title">Nom</span>

                @foreach ($users as $user)

                <span style="padding-top: 20px" class="data-list">{{ $user->nom }}</span>

                @endforeach
            </div>

            <div class="data names">
                <span class="data-title">Telephone</span>

                @foreach ($users as $user)

                <span style="padding-top: 20px" class="data-list">{{ $user->telephone }}</span>

                @endforeach
            </div>
            
            <div class="data joined">
                <span class="data-title">E-mail</span>
                @foreach ($users as $user)

                <span style="padding-top: 20px" class="data-list">{{ $user->email }}</span>

                @endforeach
            </div>
           
            <div class="data status">
                <span class="data-title">Action</span>


                <!-- ############################################## BOUTTON MODIFIER/SUPPRIMER ############################################"-->

                @foreach ($users as $user)

                <span style="padding-top: 10px" class="data-list">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">

                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}"
                            onsubmit="return confirm('Êtes-vous sur de vouloir supprimer cette personne ?');">
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