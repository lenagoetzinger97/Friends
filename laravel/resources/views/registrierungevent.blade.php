@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Event Registrierung</div>
                <div class="card-body">
                    <form action="/registrierungevent/add" method="post">
                      @csrf
                      <label for="Name"><b>Name:</b></label><br>
                        <input type="text" id="Name" name="Name"><br><br>

                        <label for="Email"><b>E-Mail:</b></label><br>
                        <input type="text" id="Email" name="Email"><br><br>

                        <label for="Betreff"><b>Betreff:</b></label><br>
                        <input type="text" id="Betreff" name="Betreff"><br><br>

                        <label for="Nachricht"><b>Nachricht:</b></label><br>
                        <textarea id="Nachricht" name="Nachricht" rows="10" cols="50"></textarea> <br><br>

                        <input type="submit" name="submit" class="btn btn-outline-primary">
                    </form>
                  </div>
                </div>
            </div>
        </div>
</div>
@endsection
