<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Le paradis de la plaine</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Lien BootStrap CSS Version 5.1 -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Lien BootStrap CSS Version 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- Lien CDN Font-Awesome -->
    <script src="https://kit.fontawesome.com/26a1275860.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #242526;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #93accf;
            padding: 20px;
            height: 100vh;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <div class="container">


        <a style="margin-left: 10px" class="btn btn-primary" href="{{ route('admin.bungalows.index') }}"
            role="button">Retour</a>
        <p style="color:#292069;" class="fs-1">Modification d'un bungalow</p>

        <form method="POST" action="{{ route('admin.bungalows.update', $bungalow->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-25">
                    <label style="font-weight:bold" for="nom">NOM DU BUNGALOW :</label>
                </div>
                <div class="col-75">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $bungalow->nom }}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label style="font-weight:bold" for="description">DESCRIPTION :</label>
                </div>
                <div class="col-75">
                    <textarea class="form-control" id="description" name="description"
                        required>{{ $bungalow->description }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label style="font-weight:bold" for="imagenow" class="form-label">PHOTO ACTUELLE :</label>
                </div>
                <div class="col-75">
                    <img style="width: 100px;height: 100px;" src="{{ Storage::url($bungalow->image) }}"
                        alt="Image du bungalow">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label style="font-weight:bold" for="image">PHOTO :</label>
                </div>
                <div class="col-75">
                    <input style="font-weight:bold; cursor:pointer" class="form-control" type="file" id="image"
                        name="image">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label style="font-weight:bold" for="prix">PRIX :</label>
                </div>
                <div style="padding-bottom: 10px" class="col-75">
                    <input type="number" class="form-control" id="prix" name="prix" value="{{ $bungalow->prix }}"
                        min="0" required>
                </div>
            </div>

            <div>
                <button style="font-weight:bold" type="submit" class="btn btn-outline-success">MODIFIFIER LE BUNGALOW</button>
            </div>

        </form>
    </div>

    <!-- Lien BootStrap JavaScript Version 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>