@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <form method="POST" action="/editprofile">
                        @csrf

                    <div class="row">
                        <div class="col-md-3">
                            <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4YpX3wpf0VlhoxvYamPEvfvPSaYXRMZAeXmNtAu-9c6Kwbosb&s'); background-position: center; width: 130px; height: 130px; border-radius: 100px;"></div>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="benutzername" name="benutzername" size="15" value="ln.frrchs"><br>
                            <input type="text" id="name" name="name" size="30" value="Lena Frerichs"><br>
                            <input type="text" id="alter" name="alter" size="2" value="26"> <input type="text" id="ort" name="ort" size="30" value="Heilbronn">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col">
                            <h4>Ich mag..</h4>

                            <div class="row activities">

                                <?php

                                    foreach ($aktivitaeten as $aktivitaet) {
                                    
                                ?>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="aktivitaet{{ $aktivitaet->id }}" id="aktivitaet{{ $aktivitaet->id }}">
                                        <label for="aktivitaet{{ $aktivitaet->id }}">
                                            {{ $aktivitaet->bezeichnung }}
                                        </label>
                                    </div>
                                <?php

                                    }
                                ?>
                            </div>
                            <!--
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="achterbahnfahren" value="101"> Achterbahn fahren
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="schwimmen" value="102"> Schwimmen
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="rutschen" value="103"> Rutschen (Wasser)
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="kartfahren" value="104"> Kart fahren
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Wandern" value="105"> Wandern
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Spazieren" value="106"> Spazieren
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="cinemalover" value="107"> ins Kino gehen
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Filmabend" value="108"> Filmabend
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Wandern" value="105"> Wandern
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Spazieren" value="106"> Spazieren
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="cinemalover" value="107"> ins Kino gehen
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Filmabend" value="108"> Filmabend
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Saufen" value="109"> Saufen
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="feiernohnealkohol" value="110"> Feiern ohne Alk
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Zocken" value="111"> Zocken
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Kartfahren" value="112"> Kart fahren
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Festivals" value="113"> Festivals
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="KonzerteGross" value="114"> Konzerte (groß)
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="KonzerteKlein" value="115"> Konzerte (klein)
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Motorradfahren" value="116"> Motorrad fahren
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="BurgenSchloesser" value="117"> Burgen und Schlösser besichtigen
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" name="Weihnachtsmarktfieber" value="118"> Weihnachtsmärkte besuchen
                                </div>
                            </div>
                        -->

                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <h4>Ich interessiere mich für..</h4>

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Geschichtliches" value="119"> Geschichtliches
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Politik" value="120"> Politik
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="AutoTuning" value="121"> Auto Tuning
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Fitness" value="122"> Fitness
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="GesundeErnaehrung" value="123"> Ges. Ernährung
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Reisen" value="124"> Reisen
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Shopping" value="125"> Shopping
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="E-Mobilitaet" value="126"> E-Mobilität
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Umweltschutz" value="127"> Umweltschutz
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Psychologie" value="128"> Psychologie
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Promiklatsch" value="129"> Promiklatsch
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Kultur" value="130"> Kultur
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <h4>Ich bin..</h4>

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="extrovertiert" value="201"> extrovertiert
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="introvertiert" value="202"> introvertiert
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="schüchtern" value="203"> schüchtern
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="ehrgeizig" value="204"> ehrgeizig
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="kommunikativ" value="205"> kommunikativ
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="kreativ" value="206"> kreativ
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="selbstbewusst" value="207"> selbstbewusst
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="sorgfaeltig" value="208"> sorgfältig
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="spontan" value="209"> spontan
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="wissbegierig" value="210"> wissbegierig
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="witzig" value="211"> witzig
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="zuverlaessig" value="212"> zuverlässig
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="zuvorkommend" value="213"> zuvorkommend
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="bescheiden" value="214"> bescheiden
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="eitel" value="215"> eitel
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="neugierig" value="216"> neugierig
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="emotional" value="217"> emotional
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="impulsiv" value="218"> impulsiv
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="sensibel" value="219"> sensibel
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="energisch" value="220"> energisch
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="rational" value="221"> rational
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="konservativ" value="222"> konservativ
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="sarkastisch" value="223"> sarkastisch
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="penibel" value="224"> penibel
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="optimistisch" value="225"> optimistisch
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="kultiviert" value="226"> kultiviert
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="enthusiastisch" value="227"> enthusiastisch
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="charmant" value="228"> charmant
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <h4>Musik, die ich liebe..</h4>

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="ClassicRock" value="301"> Classic Rock
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="HardRock" value="302"> Hard Rock
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="AlternativeRock" value="303"> Alternative Rock
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Softrock" value="304"> Softrock
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Country-Rock" value="305"> Country-Rock
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="HeavyMetal" value="306"> Heavy Metal
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="ExtremeMetal" value="307"> Extreme Metal
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="ProgressiveMetal" value="308"> Progressive Metal
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Techno" value="309"> Techno
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Trance" value="310"> Trance
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Hardstyle" value="311"> Hardstyle
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Hardcore" value="312"> Hardcore
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="House" value="313"> House
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Electro" value="314"> Electro
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="EDM" value="315"> EDM
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Dubstep" value="316"> Dubstep
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="90erTechno" value="317"> 90er Techno
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Pop" value="318"> Pop
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Charts" value="319"> Charts
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="RnB" value="320"> RnB
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Hip-Hop" value="321"> Hip-Hop
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Rap" value="322"> Rap
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Soul" value="323"> Soul
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Blues" value="324"> Blues
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Schlager" value="325"> Schlager
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="SchlagerYoung" value="326"> Schlager (young)
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Malle-Schlager" value="327"> Malle-Schlager
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Volksmusik" value="328"> Volksmusik
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="70er" value="329"> 70er
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="80er" value="330"> 80er
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="90er" value="331"> 90er
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="2000er" value="332"> 2000er
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="IndieKlassiker" value="333"> Indie Klassiker 
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="IndieRock" value="334"> Indie Rock
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Alternative10s" value="335"> Alternative 10s
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Alternative90s" value="336"> Alternative 90s
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Latin" value="337"> Latin 
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Klassik" value="338"> Klassik
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Jazz" value="339"> Jazz
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="ClassicPunk" value="340"> Classic Punk
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="PopPunk" value="341"> Pop Punk 
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="PunkRock" value="342"> Punk Rock
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col">

                            <div class="row">
                                <div class="col-md-9">
                                    <h4>Ich bin eher der Urlaubstyp für..</h4>
                                </div>
                                <div class="col-md-3">
                                    <img src="https://static.thenounproject.com/png/33660-200.png" width="30" id="privatsphaereEinstellen">
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="Strandurlaub" value="401"> Strandurlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Staedtetrips" value="402"> Städtetrips
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Aktivitaeten" value="403"> Aktivitäten
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="SeenBerge" value="404"> Seen und Berge
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="LuxusUrlaub" value="405"> Luxus-Urlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="VillaUrlaub" value="406"> Villa-Urlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="SkiUrlaub" value="407"> Ski-Urlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Wintersonne" value="408"> Wintersonne
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="checkbox" name="SommerUrlaub" value="409"> Sommer-Urlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="UrlaubPaare" value="410"> Urlaub für Paare
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Familienurlaub" value="411"> Familienurlaub
                                </div>
                                <div class="col-md-3">
                                    <input type="checkbox" name="Maennerurlaub" value="412"> Männerurlaub
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="UrlaubFreundinnen" value="413"> Urlaub mit Freundinnen
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" name="UrlaubFreunden" value="414"> Urlaub mit Freunden
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="MulticenterUrlaub" value="415"> Multicenter-Urlaub
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" name="RomantischerUrlaub" value="416"> Romantischer Urlaub
                                </div>
                            </div>

                        </div>
                    </div>

                    <br><br><br>

                    <div style="float: right"> 
                        <a class="btn btn-secondary" href="/profile">Abbrechen</a> <input type="submit" value="Speichern" class="btn btn-primary"> 
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
