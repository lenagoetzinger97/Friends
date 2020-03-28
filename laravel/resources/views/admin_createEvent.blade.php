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
                            <a href="/admin" class="btn btn-primary">back</a>
                          </div>
                        </div>
                      </div>

                      <div class="row" style="padding-top: 10px;">
                        <div class="col-sm-12">
                          <div class="jumbotron">

                            <form action="{{route('addEvent')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                <label for="">Name des Events:</label>
                                <input type="text" name="eventName" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="">Veranstaltungstag:</label>
                                <input type="date" name="when" class="form-control" placeholder="Veranstaltungstag">
                              </div>
                              <div class="form-group">
                                <label for="">Veranstaltungsbeginn:</label>
                                <input type="timeTz" name="time" class="form-control" placeholder="Veranstaltungsbeginn">
                              </div>
                              <div class="form-group">
                                <label for="">Veranstaltungsort:</label>
                                <input type="text" name="where" class="form-control" placeholder="Veranstaltungsort">
                              </div>
                              <div class="form-group">
                                <label for="">Veranstalter:</label>
                                <input type="text" name="organizer" class="form-control" placeholder="Veranstalter">
                              </div>
                              <div class="form-group">
                                <label for="">Veranstaltungsbeschreibung:</label>
                                <input type="text" name="description" class="form-control" placeholder="Veranstaltungsbeschreibung">
                              </div>
                              <label>Eventfoto:</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input">
                                  <label class="custom-file-label" for="">Fügen Sie ein Bild hinzu</label>
                                </div>
                              </div>

                              <div class="text-center" style="padding-top: 10px;">
                                <button type="submit" name="submit" class="btn btn-primary"> Speichern </button>
                              </div>
                            </form>
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
