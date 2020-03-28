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
                    </div>

                </div>
            </div>
          </div>
    </div>
</div>
@endsection
