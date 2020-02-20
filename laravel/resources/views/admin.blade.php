@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matches</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <a href="/activitymatch"><div class="">Aktivitäten</div></a>
                    <a href="/musicmatch"><div class="">Musikrichtung</div></a>

                    <h3>Neueste Matches</h3>
                    <div class="">

                    </div>

                    <h3>Alle Matches</h3>
                    <div class="">


                    </div>
                    <a class="btn btn-primary" href="">Mehr laden</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
