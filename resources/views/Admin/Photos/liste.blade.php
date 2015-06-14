@extends('Admin/layout')
@section('title')
    <h1>Liste des photos</h1>
@endsection

@section('content')
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
        <a href="{{route('uploadPhoto')}}"><button class="btn btn-warning">Ajouter une photo</button></a>
    </section>

    @if(Session::has('message'))
        <br/>
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
    @endif


    <hr />
<main class="container">
<section class="row">


    @foreach($photos as $photo)
        <figure class="col-lg-6 text-center" style="border:1px solid #000000">
            <figcaption>Titre: {{$photo->titre}}</figcaption>
             <img src="{{asset('uploads/'.$photo->photo)}}" width="30%" height="100px" alt=""/><br/><br/>
            <a href="{{route('uniquePhoto',$photo->id)}}"> <button class="btn btn-success">Voir</button></a>
            <a href="{{ route('editerPhoto', $photo->slug) }}"><button class=" btn btn-info">Modifier</button></a>
            <a href="{{ route('supprimerPhoto', ['slug' =>$photo->slug]) }}" onclick="return confirm('Etes vous certain de vouloir supprimer ?');"><button class=" btn btn-danger">Supprimer</button></a>
            <br/><br/>
        </figure>
    @endforeach

</section>

</main>
@endsection
