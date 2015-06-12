@extends('Admin/layout')

@section('content')



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
            <td><button class=" btn btn-danger">Supprimer</button></td>
        </tr>


    @endforeach
    </tbody>
        </table>

@endsection







