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
                    <li><a href="#apropos" id="nav2" class="bg-apropos columns large-3" data-right="100%" data-page="#section2">A propos</a></li>
                    <li><a href="#lescours" id="nav3" class="bg-lescours columns large-3" data-right="200%" data-page="#section3">Les cours</a></li>
                    <li><a href="#agenda" id="nav4" class="bg-agenda columns large-3" data-right="300%" data-page="#section4">Agenda</a></li>
                    <li><a href="#medias" id="nav5" class="bg-medias columns large-3" data-right="400%" data-page="#section5">Medias</a></li>
                    <li class="show-for-medium-down"><a href="#contact" id="lien-contact2" data-page="#contact-page">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="pages" class="trans" style="width: 9096px; right: 0%; height: 2188px;">


        <section id="section1" class="page-systeme page-accueil  page-actuelle" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke">Le <span class="grand">chien</span> <br>de Robermont</h1>
            <p class="text-center transform">ASBL - Education canine</p>



            <article><h2 class="text-center transform titreArticle">Horaire des cours</h2><div class="article row lato  "><div class="text-center transform thumb"><img width="424" height="283" src="{{asset('1.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt="Hundetraining"></div><div><h1>Puppies de 3 à 6 mois</h1>
                        <p>Mercredi: 17h30 – 18h00</p>
                        <p>Dimanche: 9h00 – 9h30</p>
                        <hr>
                        <h1>Groupe + de 6 mois</h1>
                        <p>Mercredi: 18h30 – 19h30</p>
                        <p>Dimanche: 9h30 – 10h30</p>
                        <hr>
                        <h1>Groupe 2 et 3</h1>
                        <p>Mercredi: 19h30 – 20h30</p>
                        <p>Dimanche: 10h30 – 11h30</p>
                        <hr>
                        <h1>Groupe Concours</h1>
                        <p>Mercredi: 20h30 – 21h30</p>
                        <p>Dimanche: 11h30 – 12h30</p>
                        <p>&nbsp;</p>
                    </div></div></article>



        </section>

        <section id="section2" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke titrePage">A propos</h1>

            <article><h2 class="text-center transform titreArticle">Notre méthode de travail</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><p><span lang="\&quot;FR\&quot;">Nous travaillons d’une manière positive, c’est-à-dire en privilégiant les récompenses plutôt que les sanctions. </span><span lang="\&quot;FR\&quot;">Mais tout mauvais comportement tel que&nbsp;: agressivité, aboiements intempestifs… sera fermement réprimandé.</span></p>
                        <p><span lang="\&quot;FR\&quot;">Nos objectifs sont l’éducation et l’apprentissage du programme d’obéissance reconnu par l’URCSH.</span></p>
                        <p class="\&quot;MsoNormal\&quot;"><span lang="\&quot;FR\&quot;">Mais attention, pas d’obéissance sans discipline&nbsp;! Le maitre doit s’investir dans le travail. L’instructeur est là pour le guider dans sa démarche, pas pour le remplacer.</span></p>
                        <p class="\&quot;MsoNormal\&quot;"><span lang="\&quot;FR\&quot;">Le chien doit obéir à son maitre et ce dernier ne doit jamais oublier que c’est un chien et qu’il faut «&nbsp;penser chien&nbsp;».</span></p>
                        <p class="\&quot;MsoNormal\&quot;"><span lang="\&quot;FR\&quot;">Le maitre est «&nbsp;le chef&nbsp;» et le chien doit le reconnaître comme tel sinon il y aura conflit.</span></p>
                    </div></div></article><article><h2 class="text-center transform titreArticle">Nos installations</h2><div class="article row lato  "><div class="text-center transform thumb"><img width="960" height="720" src="{{asset('/files/11.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt="1"></div><div><ul>
                            <li>Accès facile</li>
                            <li>Parking aisé</li>
                            <li>Terrain spacieux clôturé</li>
                            <li>Local accueillant</li>
                            <li>Toilettes P.M.R.</li>
                            <li>Terrasse</li>
                            <li>Possibilité de promenade aux alentours</li>
                        </ul>
                    </div></div></article><article><h2 class="text-center transform titreArticle">Le comité</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Le comité actuel se compose de </span></p>
                        <ul>
                            <li><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Présidente&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; Roland Chantal ( depuis le 16/10/2001)</span></li>
                            <li><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Secrétaire&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deltour Nadine ( depuis 2004)</span></li>
                            <li><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Trésorière&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Matwitchouck Magali ( depuis le 14/12/2012)</span></li>
                            <li><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Vice-trésorier&nbsp;: Joly willy ( depuis le 27/10/2007)</span></li>
                        </ul>
                    </div></div></article><article><h2 class="text-center transform titreArticle">L’historique de notre club</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Le club a été fondé le 5 octobre 1922. Il est directement affilié à l’Union Royale Cynologique de la Saint-Hubert (URCSH), sous le matricule 0080 et appelé «&nbsp;Le Chien de Défense de Robermont&nbsp;»</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Ses activités ont débuté sur un terrain jouxtant le cimetière de Robermont, rue de Herve. En 1974, suite à l’extension de ce dernier, le club s’est établi rue Malvaux à Grivegnée, sur un terrain privé. Jusqu’à cette époque, on travaillait en «&nbsp;ring&nbsp;», ce qui explique la dénomination «&nbsp;Chien de Défense&nbsp;». On y dressait des bergers allemands et des bergers malinois.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">En 1986, l’ancienne buvette est remplacée par un nouveau local, construit par l’équipe et inauguré le 30 janvier 1993.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Suite à l’évolution et à la demande des amateurs, une section «&nbsp;obéissance&nbsp;» voit le jour le 6 septembre 1991. L’accroissement du nombre de membres nécessite un nouvel horaire d’entrainement. Il prend cours le 14 juillet 1992. A partir de ce moment, les entrainements en ring ont lieu les mardis et les jeudis et ceux des «&nbsp;compagnons&nbsp;» les mercredis et dimanches.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Le 31 décembre 1996, la section «&nbsp;ring&nbsp;» est définitivement fermée. Plus aucun coucours 1B n’aura désormais lieu.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">En 1996, le club opte pour le statut d’ASBL. </span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">En aout 2007, suite à la vente du terrain rue Malvaux, l’ASBL est contrainte de chercher un nouvel emplacement.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">En mai 2012, le club s’installe sur un terrain communal, situé voie Mélotte à Grivegnée. Grâce à une équipe dynamique, le club ne cesse de prospérer.</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Le 3 aout 2012, l’URCSH accepte la nouvelle dénomination du club&nbsp;: </span><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">EDUCATION CANINE «&nbsp;LE CHIEN DE ROBERMONT&nbsp;» ASBL</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">Le comité actuel se compose de </span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">– Présidente&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; Roland Chantal ( depuis le 16/10/2001)</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">– Secrétaire&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deltour Nadine ( depuis 2004)</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">– Trésorière&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Matwitchouck Magali ( depuis le 14/12/2012)</span></p>
                        <p><span lang="\&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;FR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\&quot;\&quot;">– Vice-trésorier&nbsp;: Joly willy ( depuis le 27/10/2007)</span></p>
                    </div></div></article>


        </section>

        <section id="section3" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke titrePage">Les cours</h1>

            <article><h2 class="text-center transform titreArticle ">Horaire des cours</h2><div class="article row lato  "><div class="text-center transform thumb"><img width="424" height="283" src="{{asset('/files/1.jpg')}}" class="attachment-post-thumbnail wp-post-image" alt="Hundetraining"></div><div><h1>Puppies de 3 à 6 mois</h1>
                        <p>Mercredi: 17h30 – 18h00</p>
                        <p>Dimanche: 9h00 – 9h30</p>
                        <hr>
                        <h1>Groupe + de 6 mois</h1>
                        <p>Mercredi: 18h30 – 19h30</p>
                        <p>Dimanche: 9h30 – 10h30</p>
                        <hr>
                        <h1>Groupe 2 et 3</h1>
                        <p>Mercredi: 19h30 – 20h30</p>
                        <p>Dimanche: 10h30 – 11h30</p>
                        <hr>
                        <h1>Groupe Concours</h1>
                        <p>Mercredi: 20h30 – 21h30</p>
                        <p>Dimanche: 11h30 – 12h30</p>
                        <p>&nbsp;</p>
                    </div></div></article><article><h2 class="text-center transform titreArticle ">Déroulement des cours</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><p><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Les cours ont lieu 2 fois par semaine&nbsp;: mercredi soir et dimanche matin.</span></p>
                        <p><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Le montant de l’inscription est de 50 euros par an et par chien. </span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Pour les chiens supplémentaires de propriétaires vivant à la même adresse, il s’élève à 25 euros par an et par chien.</span></p>
                        <p><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Les entrainements coutent 2 euros la séance. Ils seront payés spontanément au comptoir avant l’entrainement. ( 1 euro pour les chiens de 3 à 6 mois).</span></p>
                        <p><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">La première fois, munissez-vous&nbsp;</span></p>
                        <ul>
                            <li><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">&nbsp;</span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">du passeport du chien (carte de vaccination)</span></li>
                            <li><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">&nbsp;</span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">d’une laisse d’un mètre 20 plus ou moins</span></li>
                            <li><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">&nbsp;</span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">d’un collier (pas de harnais)</span></li>
                            <li><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">&nbsp;</span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">d’un jouet</span></li>
                            <li><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">de friandises.</span></li>
                        </ul>
                        <p><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Vous réglez votre séance et si notre méthode de travail vous satisfait, vous payez le montant de l’affiliation au cours suivant. Vous pouvez vous affilier dès la première fois si votre décision est prise.</span></p>
                        <p class="\&quot;\\&quot;MsoNormal\\&quot;\&quot;"><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Les paiements se font en liquide. </span></p>
                    </div></div></article>



        </section>

        <section id="section4" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke titrePage">Agenda</h1>

            <article><h2 class="text-center transform titreArticle">16/05 : Evenement n°1</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div><p>Cras tortor lorem, imperdiet eget justo sed, tristique dictum lectus. Nullam ligula ex, blandit quis luctus nec, porta eu sem. Etiam rhoncus accumsan tellus. Phasellus tempor ante ac sapien suscipit faucibus.</p>
                    </div></div></article>


        </section>

        <section id="section5" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
            <h1 class="text-center transform stroke titrePage">Medias</h1>

            <article><h2 class="text-center transform titreArticle">Gallerie photo 1</h2><div class="article row lato  "><div class="text-center transform thumb"></div><div>
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
                        <div id="gallery-1" class="gallery galleryid-35 gallery-columns-3 gallery-size-thumbnail"><dl class="gallery-item">
                                <dt class="gallery-icon landscape">
                                    <a href="{{asset('/files/11.jpg')}}" data-slb-group="35" data-slb-active="1" data-slb-internal="0"><img width="150" height="150" src="{{asset('/files/11-150x150.jpg')}}" class="attachment-thumbnail" alt="1"></a>
                                </dt></dl><dl class="gallery-item">
                                <dt class="gallery-icon landscape">
                                    <a href="{{asset('/files/1.jpg')}}" data-slb-group="35" data-slb-active="1" data-slb-internal="0"><img width="150" height="150" src="{{asset('/files/1-150x150.jpg')}}" class="attachment-thumbnail" alt="Hundetraining"></a>
                                </dt></dl><dl class="gallery-item">
                                <dt class="gallery-icon landscape">
                                    <a href="http://patrogem.be/cdrobermont-wp/wp-content/uploads/2015/05/Koala.jpg" data-slb-group="35" data-slb-active="1" data-slb-internal="0"><img width="150" height="150" src="{{asset('/files/Koala-150x150.jpg')}}" class="attachment-thumbnail" alt="Koala"></a>
                                </dt></dl><br style="clear: both">
                        </div>

                    </div></div></article>



        </section>

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
