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
                            <a href="#" class="btn btn-primary">Event anlegen</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container" style="padding-top: 10px;">
                      <div class="row">
                        <div class="col-sm-12">
                          <h3>Aktuelle Events im Überblick</h3>

                          <div class="row" style="padding-top: 10px;">
                            <div class="col-sm-6">
                              <div class="card">
                                <img src="{{ asset('photos/party.jpg') }}" class="card-img-top" alt="hier ist ein Bild">
                                <div class="card-body">
                                  <h5 class="card-title">Freitag, 13.03.2020</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                              </div>
                            </div>
                          <div class="col-sm-6">
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
