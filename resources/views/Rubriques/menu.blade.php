
@foreach($rubriques as $rubrique)

    <li><a href="#{{$rubrique->slug}}" id="nav{{$rubrique->id}}" class="bg-{{$rubrique->slug}} columns large-3" data-right="{{$rubrique->id-1}}00%" data-page="#section{{$rubrique->id}}">{{$rubrique->titre}}</a></li>

@endforeach