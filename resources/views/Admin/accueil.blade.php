@extends('Admin/layout')

@section('content')

    <table class="table" >

        <tbody>

        <tr>
            <td>Retour au site web</td>
            <td><a href="{{route('accueil')}}"><button class="btn btn-default">Retour</button></a></td>
        </tr>

<tr>
    <td>Articles</td>
    <td><a href="{{URL::route('listeArticlesAdmin')}}"><button class="btn btn-default">Liste d'articles</button></a></td>
    <td><a href="{{URL::route('ajoutArticle')}}"><button class="btn btn-default">Ajouter article.</button></a></td>
</tr>

        </tbody>
    </table>



    @endsection