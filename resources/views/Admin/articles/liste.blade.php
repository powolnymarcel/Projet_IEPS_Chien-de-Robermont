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
            <td><button class=" btn btn-info">Modifier</button></td>
            <td><button class=" btn btn-danger">Supprimer</button></td>

        </tr>


    @endforeach
    </tbody>
        </table>









@endsection







