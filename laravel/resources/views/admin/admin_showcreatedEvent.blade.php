@extends('layouts.appEvent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <a href="{{ route('eventHome') }}" style="color:#202224;"> <i class="fas fa-arrow-left"></i></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <div class="container">
                      <div class="row">
                        <div class="col-sm-8">
                          <div>
                            <h3>Aktuelles Event</h3>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="text-right">
                            <a href="/admin/editEvent/{{$veranstaltung->id}}"style="color:#202224;"> <i class="far fa-edit"></i> Bearbeiten </a>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">

                        <div class="row" style="padding-top: 10px;">
                          <div class="col-sm-12">
                            <div class="card">
                              <img src="{{ asset('uploads/eventFotos/' . $veranstaltung->image) }}" class="card-img-top" alt="hier ist ein Bild">
                              <div class="card-body">
                                <div class="text-left">
                                  <h4 class="card-title">{{$veranstaltung->Eventname}}</h4>
                                  <h4 class="card-text"><i class="far fa-calendar-alt"></i> {{ $veranstaltung->Eventtag }}</p></h4>
                                  <h5 class="card-text"><i class="fas fa-map-marker-alt"></i> {{ $veranstaltung->Eventort }}</h5>
                                  <p class="card-text"> Beschreibung: {{$veranstaltung->Eventbeschreibung}}  </p>
                                  <p class="card-text"> Veranstalter: {{$veranstaltung->Eventveranstalter}}</p>

                                </div>

                              </div>
                            </div>
                            <a href="/admin" class="btn btn-dark"> Einverstanden </a>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
<!--<div class="col-sm-6">
  <div class="card">
    <img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
    <div class="card-body">
      <h5 class="card-title">Dienstag, 17.03.2020</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
</div>
</div>

<div class="row" style="padding-top: 10px;">
<div class="col-sm-6">
  <div class="card">
    <img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
    <div class="card-body">
      <h5 class="card-title">Montag, 30.04.2020</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
</div>
<div class="col-sm-6">
<div class="card">
  <img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
  <div class="card-body">
    <h5 class="card-title">Mittwoch, 02.05.2020</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
</div>
</div>
</div>

<div class="row" style="padding-top: 10px;">
<div class="col-sm-6">
<div class="card">
  <img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
  <div class="card-body">
    <h5 class="card-title">Montag, 30.04.2020</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
<div class="card-body">
  <h5 class="card-title">Mittwoch, 02.05.2020</h5>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
</div>
</div>
</div> -->
