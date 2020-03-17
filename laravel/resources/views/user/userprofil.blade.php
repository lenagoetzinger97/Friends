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

                    <div class="row">
                        <div class="col-md-3">
                            <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4YpX3wpf0VlhoxvYamPEvfvPSaYXRMZAeXmNtAu-9c6Kwbosb&s'); background-position: center; width: 130px; height: 130px; border-radius: 100px;"></div>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->name }}<br>
                            <h3 id="h3-profile">{{ Auth::user()->name }}</h3>
                            26 | Heilbronn
                        </div>
                        <div class="col-md-3">
                            <a href="editprofile" class="edit-profile"><img src="https://static.thenounproject.com/png/33660-200.png" width="30"></a>
                        </div>
                    </div>
                  </br> </br>
                    <div class="row">
                        <div class="col">
                            <h1>Aktivities:</h1>
                            <span class="tag">Schwimmen</span>
                        </div>
                    </div>

                  </br> </br>

                    <div class="row">
                        <div class="col">
                            <h1>Musics:</h1>
                            <span class="tag">Rock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
