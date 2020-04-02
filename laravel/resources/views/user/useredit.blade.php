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

                    <form method="post" action="/useredit" enctype="multipart/form-data">
                        @csrf

                    <div class="row">

                        <div class="col-md-3">
                            <input type="file" name="image"  class="custom-file-input" accept=".png, .jpg, .jpeg, .gif" value="">
                            <label class="custom-file-label">Profilbild</label>
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
                            <h2>Wähle aus was du gerne machst:</h2> </br>
                            <div class="row">
                                <div class="col-md-3">
                                  @if(!empty($profils) && $profils->Schwimmen === 'true')
                                    <input type="checkbox" id="1" name="Schwimmen" checked>
                                    <label for="1">Schwimmen </label>
                                  @else
                                  <input type="checkbox" id="1" name="Schwimmen">
                                  <label for="1">Schwimmen </label>
                                  @endif
                                </div>

                                <div class="col-md-3">
                                  @if(!empty($profils) && $profils->Tanzen === 'true')
                                    <input type="checkbox" id="2" name="Tanzen" checked>
                                    <label for="2">Tanzen </label>
                                  @else
                                  <input type="checkbox" id="2" name="Tanzen">
                                  <label for="2">Tanzen </label>
                                  @endif
                                </div>

                                  <div class="col-md-3">
                                    @if(!empty($profils) && $profils->Fitness === 'true')
                                      <input type="checkbox" id="3" name="Fitness" checked>
                                      <label for="3">Fitness </label>
                                    @else
                                    <input type="checkbox" id="3" name="Fitness">
                                    <label for="3">Fitness </label>
                                    @endif
                                  </div>

                                    <div class="col-md-3">
                                      @if(!empty($profils) && $profils->Handball === 'true')
                                        <input type="checkbox" id="4" name="Handball" checked>
                                        <label for="4">Handball </label>
                                      @else
                                      <input type="checkbox" id="4" name="Handball">
                                      <label for="4">Handball </label>
                                      @endif
                                    </div>

                                      <div class="col-md-3">
                                        @if(!empty($profils) && $profils->Klettern === 'true')
                                          <input type="checkbox" id="5" name="Klettern" checked>
                                          <label for="5">Klettern </label>
                                        @else
                                        <input type="checkbox" id="5" name="Klettern">
                                        <label for="5">Klettern </label>
                                        @endif
                                      </div>

                                        <div class="col-md-3">
                                          @if(!empty($profils) && $profils->Minigolf === 'true')
                                            <input type="checkbox" id="6" name="Minigolf" checked>
                                            <label for="6">Minigolf </label>
                                          @else
                                          <input type="checkbox" id="6" name="Minigolf">
                                          <label for="6">Minigolf </label>
                                          @endif
                                        </div>

                                          <div class="col-md-3">
                                            @if(!empty($profils) && $profils->Wandern === 'true')
                                              <input type="checkbox" id="7" name="Wandern" checked>
                                              <label for="7">Wandern </label>
                                            @else
                                            <input type="checkbox" id="7" name="Wandern">
                                            <label for="7">Wandern </label>
                                            @endif
                                          </div>
                                            <div class="col-md-3">
                                              @if(!empty($profils) && $profils->Tennis === 'true')
                                                <input type="checkbox" id="8" name="Tennis" checked>
                                                <label for="8">Tennis </label>
                                              @else
                                              <input type="checkbox" id="8" name="Tennis">
                                              <label for="8">Tennis </label>
                                              @endif
                                            </div>
                                  </div>

                            </div>
                        </div>
                            </br> </br>
                                            <div style="float: right">
                                              <a class="btn btn-outline-secondary" href="/userprofil"></i> Abbrechen</a>
                                              <input type="submit" name="submit" value="Speichern"class="btn btn-dark"></input>
                                            </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
