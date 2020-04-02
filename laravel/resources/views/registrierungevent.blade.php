@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Eventregistrierung
                </div>
                <div class="card-body">
                  <div class ="row">
                    <h2> Eventregistrierungszugang beantragen:</h2>
                  </br></br>
                    <p>Um die Qualität unserer Events zu gewährleisten muss ein Zugang zum erstellen von Events per Mail angefragt werden. Bitte füllen sie die nachfolgende Vorlage aus.</p> </br>
                    <button type="button" class="btn btn-outline-dark" href="mailto:lenagoetzinger@hotmail.com?subject=Anfrage%20Eventregistrierungszugang%20zu%20Matches;body=Hallo%20Matches,%0D%0A%0D%0AName:%0D%0A%0D%0AFirma%20optional:%0D%0A%0D%0AKurze%20Nachricht%20um%20welche%20art%20Events%20es%geht:">
                      Mail Vorlage
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
