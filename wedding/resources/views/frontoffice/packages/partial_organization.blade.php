@extends('frontoffice.layouts.front')

@section('content')
<section class="section_coordination">
    <div class="coordination">
        <div class="side1">
            <div class="para_coordinate">
                <p><span class="span_journee">Organisation partielle</span>est l'offre qui allège la pression tout en laissant aux futurs mariés une certaine autonomie.
                </p>
            </div>
            <h6>Découvrez en vidéo les séances d'organisation partielle.</h6>
            <div class="slide_coordinate">
                <div class="chevron">
                    <i class="fa fa-chevron-left"></i>
                </div>

                <div class="slider_slick">
                    <div class="box_slider_coordinate">
                        <div class="picture9">
                            <img src="{{ asset('images/Arches & Mariage.jpg') }}">
                        </div>
                        <div class="picture9">
                            <img src="{{ asset('images/heart.jpg') }}">
                        </div>
                        <div class="picture9">
                            <img src="{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="chevron">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="side2">
            <img src="{{ asset('images/Arches & Mariage.jpg') }}" alt="">
        </div>
    </div>
    <div class="big_step">
            <h5>Les étapes essentiels de ce service</h5>
        <div class="essential_step">
            <div class="step1">
                <span class="span_nb">01</span>
                <div class="infos_coo">
                    <h4>Coordination jour J</h4>
                    <p>Superviseur des préstataires, gestion de planning et des imprevus</p>
                </div>
            </div>
            <div class="step1">
                <span class="span_nb">02</span>
                <div class="infos_coo">
                    <h4>Sélection des prestatires</h4>
                    <p>Aide à choisir les:
                            <ul style="padding-left: 1vw; font-size:1vw">
                                <li>Traiteur</li>
                                <li>Photographe</li>
                                <li>Fleuriste</li>
                            </ul>
                        </p>
                </div>
            </div>
            <div class="step1">
                <span class="span_nb">03</span>
                <div class="infos_coo">
                    <h4>Décoration et mise en place</h4>
                    <p>Création d'une ambiance personnalisée et installation  le jour de mariage.</p>
                </div>
            </div>
            <div class="step1">
                <span class="span_nb">04</span>
                <div class="infos_coo">
                    <h4>Gestion des invités</h4>
                    <p>Plan du table, accueil des invités et distributions des cadeaux</p>
                </div>
            </div>
            <div class="step1">
                <span class="span_nb">05</span>
                <div class="infos_coo">
                    <h4>Conseils logiques</h4>
                    <p>Support pour la gestion du lieu, transport et hébérgement.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection