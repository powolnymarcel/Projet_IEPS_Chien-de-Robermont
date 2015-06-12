@extends('Admin/layout')


@section('content')

   
    <form action="{{ route('editerArticles') }}" method="post" >
        <div class="form-group">
            <label for="titre">Modifier le titre</label>
            <input type="text" name="titre" id="titre" value="" required="required" />
        </div>
        
    <div class="form-group">
            <label for="titre">Modifier le slug</label>
            <input type="text" name="slug" id="slug" value="" required="required" />
        </div>

        <div class="form-group">
            <label for="titre">Modifier le texte</label>
            <input type="text" name="texte" id="texte" value="" required="required" />
        </div>

        <div class="form-group">
            <label for="photo">Modifier la photo</label>
            <input type="file" name="photo" id="photo" accept="image/*" />
        </div>
               
        <input name="_method" type="hidden" value="PUT">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <input type="submit" />
    </form>
@stop