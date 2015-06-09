@extends('app')

@section('content')

    <header class="fixe">
        <div class="clearfix" id="top">
            <div class="bg1 small-9 large-10 columns text-right">
                <div class="hide-for-medium-down">

                    <div class="hide-for-medium-down">Voie Mélotte, s/n – 4030 Grivegnée / tél: 04 365 27 89</div>

                </div>
                <div class="show-for-medium-down text-left">Le Chien de robermont</div>

            </div>
            <a href="#contact" id="lien-contact" class="hide-for-medium-down medium-2 columns text-center" data-page="#contact-page">Contacts</a>
            <a href="{{asset('/files/Le chien de Robermont ASBL.html')}}" id="show-menu" class="show-for-medium-down small-3 columns text-center">MENU</a>
        </div>
        <nav id="navigation" style="display: block;">
            <div class="text-center columns large-2 medium-12" id="logo">

                <a href="#" id="home" data-page="#section1">
                    <img src="{{asset('/files/logo.png')}}">
                    <br>Accueil</a>

            </div>





            <div class="columns medium-12 large-10">
                <ul class="clearfix text-center " id="menu">
                    
                    @include('Rubriques.menu')
                </ul>
            </div>

        </nav>
    </header>
    <div id="pages" class="trans" style="width: 9096px; right: 0%; height: 2188px;">


        <section id="section1" class="page-systeme page-accueil  page-actuelle" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke">Le <span class="grand">chien</span> <br>de Robermont</h1>
            <p class="text-center transform">ASBL - Education canine</p>



            <article><h2 class="text-center transform titreArticle">{{$articleAccueil->titre}}</h2><div class="article row lato  ">
                    <div class="text-center transform thumb"><img width="424" height="283" src="{{asset('files/'.$articleAccueil->photo)}}" class="attachment-post-thumbnail wp-post-image" alt="Hundetraining"></div>
                    <div>
                        {!!$articleAccueil->texte!!}
                    </div>
                        
                </div>
            </article>



        </section>

@foreach($rubriques as $rubrique)


        <section id="section{{$rubrique->id}}" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">

            @foreach($rubrique->articles as $article)

            <h1 class="text-center transform stroke titrePage">{{$article->titre}}</h1>
            <article><h2 class="text-center transform titreArticle ">{{$article->titre}}</h2><div class="article row lato  "><div class="text-center transform thumb">


                        @if ($article->photo)
                            <img width="424" height="283" src="{{asset('files/'.$article->photo)}}" class="attachment-post-thumbnail wp-post-image" alt="Hundetraining">
                        @else
                        @endif





                    </div><div>
                        <p>{!!$article->texte!!}</p>
                    </div></div>
            </article>

            @endforeach

        </section>

        @endforeach


                        <style type="text/css">
                            #gallery-1 {
                                margin: auto;
                            }
                            #gallery-1 .gallery-item {
                                float: left;
                                margin-top: 10px;
                                text-align: center;
                                width: 33%;
                            }
                            #gallery-1 img {
                                border: 2px solid #cfcfcf;
                            }
                            #gallery-1 .gallery-caption {
                                margin-left: 0;
                            }
                            /* see gallery_shortcode() in wp-includes/media.php */
                        </style>




        <section id="contact-page" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke titrePage">Contacts</h1>

            <article><h2 class="text-center transform titreArticle">Formulaire de contact</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><div role="form" class="wpcf7" id="wpcf7-f44-o1" lang="fr-FR" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form name="" action="http://patrogem.be/cdrobermont-wp/#wpcf7-f44-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="44">
                                    <input type="hidden" name="_wpcf7_version" value="4.1.2">
                                    <input type="hidden" name="_wpcf7_locale" value="fr_FR">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f44-o1">
                                    <input type="hidden" name="_wpnonce" value="3ddcca4aad">
                                </div>
                                <p>Votre nom (obligatoire)<br>
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
                                <p>Votre email (obligatoire)<br>
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
                                <p>Sujet<br>
                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </p>
                                <p>Votre message<br>
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha-187" value="2677549888"><img class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha-187" width="72" height="24" alt="captcha" src="{{asset('/files/2677549888.png')}}">  -&gt; Vérification: Entrez ce texte ci-dessous<br>
                                    <span class="wpcf7-form-control-wrap captcha-187"><input type="text" name="captcha-187" value="" size="40" class="wpcf7-form-control wpcf7-captchar" aria-invalid="false"></span> </p>
                                <p><input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit button"><img class="ajax-loader" src="{{asset('/files/ajax-loader.gif')}}" alt="Envoi en cours ..." style="visibility: hidden;"></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                    </div></div></article><article><h2 class="text-center transform titreArticle">Coordonnées</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><h1><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Adresse</span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;"><br>
</span></h1>
                        <div><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Voie Mélotte S/N</span></div>
                        <div>&nbsp; <span lang="\&quot;\\&quot;FR\\&quot;\&quot;">4030 </span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Grivegnée</span></div>
                        <div>
                            <hr>
                        </div>
                        <h1><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Personnes de contact</span></h1>
                        <div><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Roland Chantal 04 365 58 81 ou 0485 291 236</span></div>
                        <div><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Deltour Nadine 04 365 27 89</span></div>
                    </div></div></article>


        </section>
    </div>





@endsection
