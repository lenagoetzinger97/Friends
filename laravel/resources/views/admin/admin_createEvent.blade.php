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
                            <p>Lege neue Events an und teile der Welt mit, was bei dir cooles abgeht! Hallo Hallo Ich bin ein Test!</p>
                            <a href="/admin" class="btn btn-primary">back</a>
                          </div>
                        </div>
                      </div>

                      <div class="row" style="padding-top:20px">
                        <div class="col-sm-12">
                          <div>

                            <form action="{{route('addEvent')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                <label>Veranstaltungsname</label>
                                <input type="text" name="Eventname" class="form-control" placeholder="Füge den Veranstaltungsnamen hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungstag</label>
                                <input type="date" name="Eventtag" class="form-control" placeholder="Füge den Veranstaltungstag hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsuhrzeit</label>
                                <input type="text" name="Eventuhrzeit" class="form-control" placeholder="Füge die Veranstaltungsuhrzeit hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsort</label>
                                <input type="text" name="Eventort" class="form-control" placeholder="Füge den Veranstaltungsort hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstalter</label>
                                <input type="text" name="Eventveranstalter" class="form-control" placeholder="Füge den Veranstalter hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsbeschreibung</label>
                                <input type="text" name="Eventbeschreibung" class="form-control" placeholder="Füge eine Veranstaltungsbeschreibung hinzu">
                              </div>

                              <div class="input-group">
                                <div class="custom-file">

                                  <input type="file" name="image" class="custom-file-input">
                                  <label class="custom-file-label"> Füge eine Bild hinzu </label>
                                </div>
                              </div>
                              <div class="text-center" style="padding-top:10px">
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
