@extends('layouts.app')
@section('content')

<style>

    .neuesteMatches {
        text-align: center;
    }

    .nm_card {
        display: inline-block;
        width: 243px;
        border: 1px solid #aaa;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 10px;
        padding-right: 10px;
        margin-right:10px;
        text-align: left;
    }

    .nm_name {
        padding: 10px 10px 0px 0px;
    }

    .btn-nm_card {
        border: 1px solid #aaa;
        padding: 6px 20px;
        border-radius: 12px;
    }
    .btn-nm_card:hover {
        background-color: #ff7f50;
        border: 1px solid #ff7f50;
        color: #fff;
    }

    .btn-primary {
        margin-top: 20px;
        width: 212px;
        border-radius: 12px;
    }



    .ue_card {
        width: 212px;
        border: 1px solid #aaa;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 10px;
        padding-right: 10px;
        margin-right:10px;

    }
    .ue_card:first-child {
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Matches</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <h3>Neueste Matches</h3>
                    <div class="neuesteMatches">
                        <div class="nm_card">
                            <img src="../../photos/garry-zhuang-71igRa6JOko-unsplash.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>
                        <div class="nm_card">
                            <img src="../../photos/people-walking-on-road-near-trees-at-daytime-photo-1076081.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>

                        <div class="nm_card">
                            <img src="../../photos/clarisse-meyer-UISgcA0yLrA-unsplash.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>
                        <a class="btn btn-primary" href="">Mehr anzeigen</a>
                    </div>


                    <h3>Neue Freunde finden</h3>
                    <div class="neuesteMatches">
                        <div class="nm_card">
                            <img src="../../photos/roller-coaster-1553336_1920.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>
                        <div class="nm_card">
                            <img src="../../photos/person-swimming-on-body-of-water-863988.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>

                        <div class="nm_card">
                            <img src="../../photos/water-fun-1892553_1920.jpg" class="match-pictures" width="100%">
                            <p class="nm_name">Walter Walterig</p>
                            <a class="btn btn-nm_card" href="">zu den Gemeinsamkeiten</a>
                        </div>
                        <a class="btn btn-primary" href="">Mehr anzeigen</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Upcoming Events</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif


                    <div class="neuesteMatches">

                      @foreach ($veranstaltungen as $veranstaltung)

                        <div class="card" style="margin-bottom:10px;">
                          <img src="{{ asset('uploads/eventFotos/' . $veranstaltung->image) }}" class="card-img-top" width="100%"  alt="hier ist ein Bild">

                            <h5 class="card-title" style="padding:5px 0px 0px 10px;">{{$veranstaltung->Eventname}}</h5>
                            <div style="padding-left:10px;">
                              <p>
                                <i class="far fa-calendar-alt"></i>  {{$veranstaltung->Eventtag}} um {{$veranstaltung->Eventuhrzeit}}<br>
                                <i class="fas fa-map-marker-alt"></i>  in {{$veranstaltung->Eventort}}
                              </p>
                              <p>{{$veranstaltung->Eventbeschreibung}}</p>
                            </div>
                        </div>
                        @break($veranstaltung->number == 1)
                      @endforeach

                        <a class="btn btn-primary" href="{{ url('/event') }}">Mehr anzeigen</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>





@endsection
