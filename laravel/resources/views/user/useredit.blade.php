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

                    <form method="POST" action="/useredit">
                        @csrf

                    <div class="row">
                        <div class="col-md-3">
                            <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4YpX3wpf0VlhoxvYamPEvfvPSaYXRMZAeXmNtAu-9c6Kwbosb&s'); background-position: center; width: 130px; height: 130px; border-radius: 100px;"></div>
                        </div>
                        <div class="col-md-9">
                          </br>
                          {{ Auth::user()->benutzername }}</br>
                          {{ Auth::user()->name }}</br>
                          {{ Auth::user()->alter }} Jahre alt |
                          {{ Auth::user()->ort }}
                        </div>
                    </div>
                  </br> </br>
                    <div class="row">
                        <div class="col">
                            <h2>Aktivities:</h2>
                            <span class="tag">Schwimmen</span>
                        </div>
                    </div>

                  </br> </br>

                    <div class="row">
                        <div class="col">
                            <h2>Musics:</h2>
                            <span class="tag">Rock</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
