@extends('layouts.appEvent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/admin" style="color:#202224;"> <i class="fas fa-arrow-left"> </i></a></div>

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
                            <h3>Event bearbeiten</h3>


                          </div>
                        </div>
                      </div>

                      <div class="row" style="padding-top:20px">
                        <div class="col-sm-12">
                          <div>




                            <form action="/updateEvent/{{$veranstaltungen->id}}" method="post" enctype="multipart/form-data">
                              @csrf
                              {{method_field('PUT')}}
                              <input type="hidden" name="id" id="id" value="{{$veranstaltungen->id}}">
                              <div class="form-group">
                                <label>Veranstaltungsname</label>
                                <input type="text" name="Eventname" class="form-control" value="{{$veranstaltungen->Eventname}}" placeholder="Füge den Veranstaltungsnamen hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungstag</label>
                                <input type="date" name="Eventtag" class="form-control" value="{{$veranstaltungen->Eventtag}}" placeholder="Füge den Veranstaltungstag hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsuhrzeit</label>
                                <input type="text" name="Eventuhrzeit" class="form-control" value="{{$veranstaltungen->Eventuhrzeit}}" placeholder="Füge die Veranstaltungsuhrzeit hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsort</label>
                                <input type="text" name="Eventort" class="form-control" value="{{$veranstaltungen->Eventort}}" placeholder="Füge den Veranstaltungsort hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstalter</label>
                                <input type="text" name="Eventveranstalter"  class="form-control" value="{{$veranstaltungen->Eventveranstalter}}" placeholder="Füge den Veranstalter hinzu">
                              </div>
                              <div class="form-group">
                                <label>Veranstaltungsbeschreibung</label>
                                <input type="text" name="Eventbeschreibung"  class="form-control" value="{{$veranstaltungen->Eventbeschreibung}}" placeholder="Füge eine Veranstaltungsbeschreibung hinzu">
                              </div>

                              <div class="input-group">
                                <div class="custom-file">

                                  <input type="file" name="image"  class="custom-file-input" value="{{$veranstaltungen->image}}">
                                  <label class="custom-file-label"> Füge eine Bild hinzu </label>
                                </div>
                              </div>
                              <div class="text-center" style="padding-top:10px">
                                <a href="/admin" class="btn btn-outline-dark"> Abbrechen </a>
                                <button type="submit" name="submit" class="btn btn-dark"> Update </button>
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
