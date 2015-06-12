@extends('Admin/layout')


@section('content')
    <hr/>
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour au Dashboard</button></a>
        <a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Retour à la liste des articles</button></a>
    </section>
    <hr/>

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

            <label for="texte">Modifier le texte</label>

            <textarea name="texte" id="texte"></textarea>
            <script>
                CKEDITOR.replace( 'texte' );
            </script>

        </div>

        <div class="form-group">
            <label for="photo">Modifier la photo</label>
            <input type="file" name="photo" id="photo" accept="image/*" />
        </div>

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />






        <div class="form-group">

        <select name="rubrique_id" id="">
            @foreach ($rubriques as $rubrique)
                <option value="{{ $rubrique->id}}" >{{ $rubrique->titre }}</option>
            @endforeach
        </select>
        </div>

        <input type="submit" />
    </form>
@stop