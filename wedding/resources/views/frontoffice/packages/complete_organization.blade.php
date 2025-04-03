@extends('frontoffice.layouts.front')

@section('content')
    <section class="section_coordination">
        <div class="coordination">
            <div class="side1">
                <div class="para_coordinate">
                    <p><span class="span_journee">0rganisation complète</span> est l'offre qui assure une organisation sans faille et un mariage mémorable.
                    </p>
                </div>
                <h6>Découvrez en vidéo les séances d'organisation complète.</h6>
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
                                <img src="{{ asset('images/Arches & Mariage.jpg') }}">
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
                <div class="double_chevron">
                    <div class="chevron1">
                            <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="chevron1">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                </div>
            <div class="essential_step">
                <div class="step1">
                    <span class="span_nb">01</span>
                    <div class="infos_coo">
                        <h4>Planification globale</h4>
                        <p>Budget, choix de la date et gestion du calendrier</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">02</span>
                    <div class="infos_coo">
                        <h4>Lieu & traiteur</h4>
                        <p>Résérvation du lieu de cérémonie et selection du traiteur</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">03</span>
                    <div class="infos_coo">
                        <h4>Gécoration et ambiance</h4>
                        <p>Création du thème, choix des couleurs, fleurs et agencement</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">04</span>
                    <div class="infos_coo">
                        <h4>Tenue des mariés</h4>
                        <p>Tenue vestimentaires, accèssoires et coiffure</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">05</span>
                    <div class="infos_coo">
                        <h4>Invitation et papeterie</h4>
                        <p>Conception et envoi de faire-part, menu et programme</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection