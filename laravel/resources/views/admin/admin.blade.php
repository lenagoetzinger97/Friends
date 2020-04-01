@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Events</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>

              @endif
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="text-center">
                      <h3>Neues Event erstellen</h3>
                      <p>Lege neue Events an und teile der Welt mit, was bei dir cooles abgeht!</p>
                      <a href="/admin/createEvent" class="btn btn-primary">Event anlegen</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container" style="padding-top: 10px;">
                <div class="row">
                  <div class="col-sm-12">
                    <h3>Aktuelle Events im Überblick</h3>

                    <div class="row">
                      @foreach ($veranstaltungen as $veranstaltung)
                      <div class="col-sm-6" style="padding-top: 10px;">
                        <div class="card">
                          <img src="{{ asset('uploads/eventFotos/' . $veranstaltung->image) }}" class="card-img-top" height="210px;" alt="hier ist ein Bild">
                          <div class="card-body">
                            <h5 class="card-title">{{$veranstaltung->Eventname}}</h5>
                            <p class="card-text">{{$veranstaltung->Eventtag}} um {{$veranstaltung->Eventuhrzeit}}</p>
                            <p class="card-text">in {{$veranstaltung->Eventort}}</p>
                            <p class="card-text">{{$veranstaltung->Eventbeschreibung}}</p>
                            <a href="/admin/editEvent/{{$veranstaltung->id}}" class="btn btn-primary"> bearbeiten </a>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
</div>
@endsection
