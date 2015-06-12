@extends('Admin/layout')

@section('content')
    <hr/>
<section class="container">
    <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour au Dashboard</button></a>
</section>
    <hr/>
    <table class="table">
        <thead>
        <tr>
            <th>Nom de l'article</th>
        </tr>
        </thead>
        <tbody>



    @foreach($articles as $article)
        <tr>
            <td>{{$article->titre}}</td>
            <td><a href="{{ route('ajoutArticle', $article->id) }}"><button class=" btn btn-info">Modifier</button></a></td>
            <td><a href="{{ route('supprimerArticle', ['slug' =>$article->slug]) }}"><button class=" btn btn-danger">Supprimer</button></a></td>
        </tr>


    @endforeach
    </tbody>
        </table>

@endsection







