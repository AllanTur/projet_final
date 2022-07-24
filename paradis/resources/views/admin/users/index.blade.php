@extends('layouts.adminlayouts.admin')

@section('content')
    <p>Gestion des utilisateurs</p>

    <div class="mx-auto" style="margin-top: 5%;">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">prix (€)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>blabla</td>
                    <td>PHOTO</td>
                    <td>150</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary">Modifier</button>
                            <button type="button" class="btn btn-outline-danger">Supprimer</button>
    
                        </div>
    
                    </td>
                </tr>
    
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>blabla</td>
                    <td>PHOTO</td>
                    <td>150</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary">Modifier</button>
                            <button type="button" class="btn btn-outline-danger">Supprimer</button>
    
                        </div>
                    </td>
                </tr>
    
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>blabla</td>
                    <td>PHOTO</td>
                    <td>150</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary">Modifier</button>
                            <button type="button" class="btn btn-outline-danger">Supprimer</button>
    
                        </div>
                    </td>
                </tr>
    
            </tbody>
        </table>
    </div>
@endsection