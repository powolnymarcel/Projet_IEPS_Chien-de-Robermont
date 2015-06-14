@extends('Admin/layout')
@section('content')
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
        <a href="{{route('uploadPhoto')}}"><button class="btn btn-warning">Ajouter une photo</button></a>
    </section>

    @if (Session::has("message"))
        {{ Session::get("message") }}
    @endif
    <hr />
<main class="container">
<section class="row">


    @foreach($photos as $photo)
        <figure class="col-lg-6 text-center" style="border:1px solid #000000">
            <figcaption>Titre: {{$photo->titre}}</figcaption>
             <img src="{{asset('uploads/'.$photo->photo)}}" width="30%" height="100px" alt=""/><br/>
            <button class="btn btn-info">Modifier</button>
            <button class="btn btn-danger">Supprimer</button>
        </figure>
    @endforeach

</section>

</main>
@endsection
