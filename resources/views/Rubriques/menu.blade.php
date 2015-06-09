
@foreach($rubriques as $rubrique)

    <p> {{$rubrique->titre}}</p>

    @endforeach



    <div class="columns medium-12 large-10">
        <ul class="clearfix text-center " id="menu">
            <li><a href="#apropos" id="nav2" class="bg-apropos columns large-3" data-right="100%" data-page="#section2">A propos</a></li>
            <li><a href="#lescours" id="nav3" class="bg-lescours columns large-3" data-right="200%" data-page="#section3">Les cours</a></li>
            <li><a href="#agenda" id="nav4" class="bg-agenda columns large-3" data-right="300%" data-page="#section4">Agenda</a></li>
            <li><a href="#medias" id="nav5" class="bg-medias columns large-3" data-right="400%" data-page="#section5">Medias</a></li>
            <li class="show-for-medium-down"><a href="#contact" id="lien-contact2" data-page="#contact-page">Contacts</a></li>
        </ul>
    </div>
