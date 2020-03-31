@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/useredit">
                        @csrf

                    <div class="row">
                        <div class="col-md-3">
                            <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4YpX3wpf0VlhoxvYamPEvfvPSaYXRMZAeXmNtAu-9c6Kwbosb&s'); background-position: center; width: 130px; height: 130px; border-radius: 100px;"></div>
                        </div>
                        <div class="col-md-9">
                          </br>
                          {{ Auth::user()->benutzername }}</br>
                          {{ Auth::user()->name }}</br>
                          {{ Auth::user()->alter }} Jahre alt | {{ Auth::user()->ort }}
                        </div>
                    </div>
                  </br> </br>
                    <div class="row">
                        <div class="col">
                            <h2>Aktivities:</h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" id="1" name="profil">
                                    <label for="1">Schwimmen </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="checkbox" id="2" name="profil">
                                    <label for="2">Tanzen </label>
                                </div>

                            </div>
                        </div>
                    </div>

                  </br> </br>

                    <div class="row">
                        <div class="col">
                            <h2>Musics:</h2>
                            <span class="tag">Rock</span>
                        </div>
                    </div>

                    <div style="float: right">
                        <a class="btn btn-outline-secondary" href="/userprofil"></i> Abbrechen</a>
                        <input type="submit" name="submit" value="Speichern"class="btn btn-outline-primary"></input>
                      </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
