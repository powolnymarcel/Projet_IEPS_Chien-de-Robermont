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

    <form action="{{isset($media->photo)?route('editerPhoto',['slug'=>$media->slug]):route('AjoutPhoto') }}" method="post" enctype="multipart/form-data">
        <label for="titre">Titre de la photo</label>
        <input type="text" id="titre" name="titre"  value="{{$media->titre or ''}}"/><br/>

       @if(isset($media->slug))
            <label for="photoactuelle">Photo actuelle</label><br/>
            <img src="{{asset('uploads/'.$media->photo)}}" width="30%" id="photoactuelle" alt=""/>


            <div style="border: 1px solid #000000;width: 30%">
            <label for="photo">Ajouter la nouvelle photo</label><br/>
        @endif
        <input type="file" id="photo" name="file">
           </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <br/>
        <input type="submit" class="btn btn-info">
            <a href="{{route('listePhoto')}}" class="btn btn-danger">Annuler</a>
    </form>
@endsection
