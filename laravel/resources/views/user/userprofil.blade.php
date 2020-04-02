@extends('layouts.app')

@section('content')
@include('inc.messages')
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
 
                              @if(Auth::user()->imageUrl != null)
                                <img src="{{Auth::user()->imageUrl}}" alt="Profil" width="130px" height="130px" border-radius="100px" class="rounded-circle">
                                @else
                                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="Platzhalter" width="130px" height="130px" border-radius="100px" class="rounded-circle">
                                @endif


                        </div>
                        <div class="col-md-6">
                        </br>
                          <i>  {{ Auth::user()->benutzername }}</br> </i>
                          <h3>  {{ Auth::user()->name }}</h3>
                          <h4>  {{ Auth::user()->alter }} Jahre alt  | {{ Auth::user()->ort }} </h4>

                        </div>
                        <div class="col-md-3"> </br>
                            <a href="useredit" class="edit-profil"><img src="https://image.flaticon.com/icons/svg/159/159843.svg" width="30"></a>
                        </div>
                    </div>
                  </br> </br></br>
                    <div class="row">
                        <div class="col" style="text-align:center;">
                            <h2>Was ich gerne mache:</h2> </br>
                            <tr>
                              @if(!empty($profils))

                                @if($profils->Schwimmen === 'true')
                                  <button type="button" class="btn btn-dark">Schwimmen</button>
                                @endif
                                @if($profils->Tanzen === 'true')
                                  <button type="button" class="btn btn-dark">Tanzen</button>
                                @endif
                                @if($profils->Fitness === 'true')
                                  <button type="button" class="btn btn-dark">Fitness</button>
                                @endif
                                @if($profils->Handball === 'true')
                                  <button type="button" class="btn btn-dark">Handball</button> </br></br>
                                @endif
                                @if($profils->Klettern === 'true')
                                  <button type="button" class="btn btn-dark">Klettern</button>
                                @endif
                                @if($profils->Minigolf === 'true')
                                  <button type="button" class="btn btn-dark">Minigolf</button>
                                @endif
                                @if($profils->Wandern === 'true')
                                  <button type="button" class="btn btn-dark">Wandern</button>
                                @endif
                                @if($profils->Tennis === 'true')
                                  <button type="button" class="btn btn-dark">Tennis</button>
                                @endif
                              </br></br>
                              @endif
                              <td></td>
                            </tr>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
