@extends('Admin/layout')


@section('content')
    <h1>Editer {{ $articles->titre }}</h1>


    <form action="{{ route('ajoutArticleDB', $articles->id) }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="titre">Modifier le titre</label>
            <input type="text" name="titre" id="titre" value="{{ $articles->titre }}" required="required" />
        </div>
        
        <div class="form-group">
            <label for="titre">Modifier le slug</label>
            <input type="text" name="slug" id="slug" value="{{ $articles->slug }}" required="required" />
        </div>
        
        <div class="form-group">
            <label for="titre">Modifier le texte</label>
            <input type="text" name="texte" id="texte" value="{{ $articles->texte }}" required="required" />
        </div>

        @if(isset($articles->photo))
            <label for="photoactuelle">Photo actuelle</label><br/>
            <img src="{{asset('uploads/imagesArticles'.$articles->photo)}}" width="30%" id="photoactuelle" alt=""/>


            <div style="border: 1px solid #000000;width: 30%">
                <label for="photo">Ajouter la nouvelle photo</label><br/>
                @endif
                <input type="file" id="photo" name="file">

                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <input type="submit" />
    </form>
@stop