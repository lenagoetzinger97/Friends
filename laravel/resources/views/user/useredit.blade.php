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
                            <input type="text" id="benutzername" name="benutzername" value="{{ Auth::user()->name }}" class="form-control" placeholder="Benutzername">
                            <!-- benutzername überhaupt änderbar? -->
                            <!--input type="text" id="name" name="name" value="{{ $user->vname }}" class="form-control" placeholder="Vorname Nachname"-->
                            <input type="text" id="name" name="name" size="30" value="Vorname Nachname"><br>
                            <!--input type="text" id="alter" name="alter" value="{{ $user->alter }}" class="form-control" placeholder="Wohnort"-->
                            <input type="text" id="alter" name="alter" size="2" value="26"> <input type="text" id="ort" name="ort" size="30" value="Heilbronn">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
