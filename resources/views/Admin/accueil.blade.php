@extends('Admin/layout')

@section('content')

    <table class="table" >

        <tbody>

        <tr>
            <td>Retour au site web</td>
            <td><a href="{{route('accueil')}}"><button class="btn btn-warning">Retour</button></a></td>
        </tr>

<tr>
    <td>Articles</td>
    <td><a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Liste d'articles</button></a></td>
    <td><a href="{{route('ajoutArticle')}}"><button class="btn btn-success">Ajouter article.</button></a></td>
</tr>
        <tr>
            <td>Photos</td>
            <td><a href="{{route('listePhoto')}}"><button class="btn btn-info">Liste des photos</button></a></td>
            <td><a href="{{route('uploadPhoto')}}"><button class="btn btn-success">Ajouter photo.</button></a></td>
        </tr>

        </tbody>
    </table>



    @endsection