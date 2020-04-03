@extends('layouts.appEvent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/admin" style="color:#202224;"><i class="fas fa-arrow-left"> </i></a></div>

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
                            <p>Hier kannst du nun ein neues Event anlegen, um so für die Leute in dener Umgebung sichtbar zu werden! Denn nur wer von einer Party weiß, kann zu ihr kommen! <br>
                            WICHTIG!: Du MUSST ein Bild hochladen.</p>

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
                                <a href="/admin" class="btn btn-outline-dark"> Abbrechen </a>
                                <button type="submit" name="submit" class="btn btn-dark"> Speichern </button>
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
