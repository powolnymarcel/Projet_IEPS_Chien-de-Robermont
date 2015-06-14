@extends('Admin/layout')

@section('content')
    <hr/>
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
        <a href="{{route('uploadPhoto')}}"><button class="btn btn-warning">Ajouter une photo</button></a>
        <td><a href="{{route('listePhoto')}}"><button class="btn btn-info">Liste des photos</button></a></td>

    </section>

    <hr/>
    <main class="container">
    <section class="row">

        <figure class="col-lg-6">
            <img src="{{asset('uploads/'.$photo->photo)}}
" alt=""/>
        </figure>

    </section>
    </main>

@endsection







