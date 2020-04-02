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
                    <h3>Neue Freunde finden</h3>
                    <div class="row">

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Harry.jpg" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Harry</h5>
                            <p class="card-text">23 Jahre alt | Mannheim</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Wandern </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Fitness </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Tennis </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Marina.png" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Marina</h5>
                            <p class="card-text">20 Jahre alt | Sinsheim</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Fitness </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Tanzen </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Klettern </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Lukas.png" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Lukas</h5>
                            <p class="card-text">26 Jahre alt | Heilbronn</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Handball </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Tennis </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Nina.png" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Nina</h5>
                            <p class="card-text">22 Jahre alt | Heilbronn</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Tanzen </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Fitness </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Carla.jpg" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Carla</h5>
                            <p class="card-text">19 Jahre alt | Nürnburg</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Wandern </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Minigolf </button>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Tennis </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4" style="padding-top: 10px;">
                        <div class="card">
                          <img src="/photos/Nico.png" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">Nico</h5>
                            <p class="card-text">23 Jahre alt | Heidelberg</p>
                            <button type="button" class="btn btn-outline-dark btn-sm disabled"> Schwimmen </button>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="text-center" style="padding-top:10px"> </br>
                      <button type="button" class="btn btn-dark"> mehr Freunde finden </button>
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

                      @endforeach
                      <div class="text-center" style="padding-top:10px"> </br>
                        <a class="btn btn-dark" href="{{ url('/event') }}">Mehr anzeigen</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>





@endsection
