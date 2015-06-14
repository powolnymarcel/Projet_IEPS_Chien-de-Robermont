@extends('Admin/layout')

@section('content')
    <hr/>
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
        <a href="{{route('uploadPhoto')}}"><button class="btn btn-warning">Ajouter une photo</button></a>
        <a href="{{route('listePhoto')}}"><button class="btn btn-info">Liste des photos</button></a>
        <a href="{{ route('supprimerPhoto', ['slug' =>$photo->slug]) }}" onclick="return confirm('Etes vous certain de vouloir supprimer ?');"><button class=" btn btn-danger">Supprimer</button></a>


    </section>

    <hr/>
    <main class="container">
    <section class="row">

        <figure class="col-lg-6">
            <img src="{{asset('uploads/imagesArticles/'.$photo->photo)}}
" alt=""/>
        </figure>

    </section>
    </main>

@endsection







