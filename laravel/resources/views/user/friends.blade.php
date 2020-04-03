@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ route('home') }}" style="color:#202224;"> <i class="fas fa-arrow-left"></i></a>  Freunde</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <div class="container" style="padding-top: 10px">
                      <div class="row">
                        <div class="col-sm-12">
                          <h3>Meine Freunde</h3>
                          <div class="row" style="padding-top: 10px">
                            <div class="col-sm-4">
                              <div class="card">
                                <img src="{{ asset('photos/Carolin.png') }}" class="card-img-top" alt="Carolin Müller" height="200">
                                <div class="card-body" style="text-align:center;">
                                  <h5 class="card-title">Carolin Müller</h5>
                                  <button type="button" class="btn btn-outline-dark">zum Profil</button>
                                </div>
                              </div>
                            </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="{{ asset('photos/Nina.png') }}" class="card-img-top" alt="Nina Schröder" height="200">
                              <div class="card-body" style="text-align:center;">
                                <h5 class="card-title">Nina Schröder</h5>
                                <button type="button" class="btn btn-outline-dark">zum Profil</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="{{ asset('photos/Nico.png') }}" class="card-img-top" alt="Nico Fischer" height="200">
                              <div class="card-body" style="text-align:center;">
                                <h5 class="card-title">Nico Fischer</h5>
                                <button type="button" class="btn btn-outline-dark">zum Profil</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row" style="padding-top: 20px">
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="{{ asset('photos/Johannes.png') }}" class="card-img-top" alt="Johannes Kruppa" height="200">
                              <div class="card-body" style="text-align:center;">
                                <h5 class="card-title">Johannes Kruppa</h5>
                                <button type="button" class="btn btn-outline-dark">zum Profil</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <img src="{{ asset('photos/Marina.png') }}" class="card-img-top" alt="Marina Haag" height="200">
                              <div class="card-body" style="text-align:center;">
                                <h5 class="card-title">Marina Haag</h5>
                                <button type="button" class="btn btn-outline-dark">zum Profil</button>
                              </div>
                            </div>
                          </div>
                        <div class="col-sm-4">
                          <div class="card">
                            <img src="{{ asset('photos/Lukas.png') }}" class="card-img-top" alt="Lukas Herkert" height="200">
                            <div class="card-body" style="text-align:center;">
                              <h5 class="card-title">Lukas Herkert</h5>
                              <button type="button" class="btn btn-outline-dark">zum Profil</button>
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
</div>
@endsection
