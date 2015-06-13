@extends('Admin/layout')

@section('content')
    <hr/>
<section class="container">
    <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
    <a href="{{route('ajoutArticle')}}"><button class="btn btn-warning">Ajouter un article</button></a>
</section>


    <hr/>
    <table class="table">
        <thead>
        <tr>
            <th>Nom de l'article</th>
            <th>Dans la rubrique</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{{$article->titre}}</td>
            <td> @if($rubriques[0]->id == $article->rubrique_id)
                         {{$rubriques[0]->titre}}

                @elseif($rubriques[1]->id == $article->rubrique_id)
                    {{$rubriques[1]->titre}}

                @elseif($rubriques[2]->id == $article->rubrique_id)
                    {{$rubriques[2]->titre}}
                @endif
            </td>

            <td><a href="{{ route('uniqueArticle', ['slug' =>$article->slug,"rubrique"=>$article->rubrique_id]) }}"><button class=" btn btn-success">Voir</button></a></td>
            <td><a href="{{ route('editerArticle', $article->slug) }}"><button class=" btn btn-info">Modifier</button></a></td>
            <td><a href="{{ route('supprimerArticle', ['slug' =>$article->slug]) }}" onclick="return confirm('Etes vous certain de vouloir supprimer ?');"><button class=" btn btn-danger">Supprimer</button></a></td>
        </tr>
    @endforeach
    </tbody>
        </table>




@endsection







