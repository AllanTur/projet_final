@extends('layouts.paradislayouts.paradis')

@section('content')

{{-- <p>{{ $reserves->nom }}</p>
<p>{{ $reserves->description }}</p>
<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
    alt="Thumbnail [100%x225]" style="height: 225px; width: 250px; display: block;"
    src="{{ Storage::url($reserves->image) }}" alt="Image du bungalow" data-holder-rendered="true">
<p>{{ $reserves->prix }}</p>
<p>{{ $users->id }}</p>

<a type="button" href="{{ route('bungalows') }}" class="btn btn-sm btn-success">Réserver</a> --}}

<main role="main">
    <div class="album py-5 ms-5"><a type="button" href="{{ route('catalogue') }}" class="btn btn-sm btn-dark">Retour</a>
        <div class="container">

            <div class="row">
                <div class="col-md-4 position-absolute top-50 start-50 translate-middle">
                    <div class="card mb-5">
                        <img src="{{ Storage::url($reserves->image) }}" class="card-img-top" alt="Photo du bungalow">
                        <div class="card-body">
                            <h1 class="card-title">{{ $reserves->nom }}</h1>
                            <p class="card-text">{{ $reserves->description }}</p>
                            <h4 class="text-muted">{{ $reserves->prix }} €/nuit</h4>

                        </div>

                        <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Réserver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form method="POST" action="{{ route('page-reservation-bungalow') }}" enctype="multipart/form-data">
            @csrf


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Réservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="user_id"></label>
                    <input type="hidden" id="user_id" name="user_id" value="{{ $users->id }}" required>
                    <p>{{ $users->nom }}</p>
                    <p>{{ $users->prenom }}</p>
                    <input type="hidden" id="bungalow_id" name="bungalow_id" value="{{ $reserves->id }}" required>
                    <p>{{ $reserves->nom }}</p>

                    
                    <label for="debut">debut :</label>
                    <input type="date" id="debut" name="debut" value="{{ $reserves->debut }}" required>
                    <label for="fin">fin :</label>
                    <input type="date" id="fin" name="fin" value="{{ $reserves->fin }}" required>

                    <!-- ######################################### datepicker ################################################ -->


                    {{-- <caly-calendar id="calendar" locale='fr-FR' year="2022" month="10" range number-of-months="1"
                        locale="sl-SI"></caly-calendar> --}}

                    {{-- <script>
                        // console.log("toto");
                    const cal = document.getElementById("calendar");
                    console.log(cal);
                    cal.addEventListener('rangeStartSelected', function(evt) {
                    // console.dir(evt);
                    
                    console.log(evt.detail);
                    });
                    cal.addEventListener('rangeEndSelected', function(evt) {
                     // console.dir(evt);
                     console.log(evt.detail);
                     $reserves->fin = evt.detail;
                     });
                    </script> --}}

                    {{-- <@php $doc=new DomDocument; $cal=$doc->getElementById('calendar');
                        echo $cal;

                        public function __construct(

                        )

                        @endphp --}}



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Réserver</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection