@extends('Admin/layout')
@section('content')
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a>
        <a href="{{route('listePhoto')}}"><button class="btn btn-warning">Voir la liste des photos </button></a>
    </section>

    @if (Session::has("message"))
        {{ Session::get("message") }}
    @endif
    <hr />

    <form action="{{route('AjoutPhoto')}}" method="post" enctype="multipart/form-data">
        <label for="titre">Titre de la photo</label>
        <input type="text" id="titre" name="titre"/>
        <input type="file" name="file">        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <br/>
        <input type="submit" class="btn btn-info">
    </form>
@endsection
