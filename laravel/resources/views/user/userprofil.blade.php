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
                                <img src="{{Auth::user()->imageUrl}}" alt="Profil" width = "130px" height = "130px" border-radius = "100px" class="rounded-circle">
                                @else
                                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="Platzhalter" width = "130px" height = "130px" border-radius = "100px" class="rounded-circle">
                                @endif


                        </div>
                        <div class="col-md-6">
                        </br>
                            {{ Auth::user()->benutzername }}</br>
                            {{ Auth::user()->name }}</br>
                            {{ Auth::user()->alter }} Jahre alt | {{ Auth::user()->ort }}

                        </div>
                        <div class="col-md-3">
                            <a href="useredit" class="edit-profil"><img src="https://static.thenounproject.com/png/33660-200.png" width="30"></a>
                        </div>
                    </div>
                  </br> </br>
                    <div class="row">
                        <div class="col">
                            <h2>Aktivities:</h2>
                            <tr>
                              @if(!empty($profils))

                                @if($profils->Schwimmen === 'true')
                                  <h1><span class="badge badge-secondary">Schwimmen</span></h1>
                                @endif
                                @if($profils->Tanzen === 'true')
                                  <h1><span class="badge badge-secondary">Tanzen</span></h1>
                                @endif
                                @if($profils->Fitness === 'true')
                                  <h1><span class="badge badge-secondary">Fitness</span></h1>
                                @endif
                                @if($profils->Handball === 'true')
                                  <h1><span class="badge badge-secondary">Handball</span></h1>
                                @endif
                                @if($profils->Klettern === 'true')
                                  <h1><span class="badge badge-secondary">Klettern</span></h1>
                                @endif
                                @if($profils->Minigolf === 'true')
                                  <h1><span class="badge badge-secondary">Minigolf</span></h1>
                                @endif
                                @if($profils->Wandern === 'true')
                                  <h1><span class="badge badge-secondary">Wandern</span></h1>
                                @endif
                                @if($profils->Tennis === 'true')
                                  <h1><span class="badge badge-secondary">Tennis</span></h1>
                                @endif

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
