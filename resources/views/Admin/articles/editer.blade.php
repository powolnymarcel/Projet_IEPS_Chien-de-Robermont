@extends('Admin/layout')


@section('content')
    <h1>Editer {{ $articles->titre }}</h1>


    <form action="{{ route('editerArticles', $articles->id) }}" method="post" >
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

        <div class="form-group">
            <label for="photo">Modifier la photo</label>
            <input type="file" name="photo" id="photo" accept="image/*" />
        </div>
               
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <input type="submit" />
    </form>
@stop