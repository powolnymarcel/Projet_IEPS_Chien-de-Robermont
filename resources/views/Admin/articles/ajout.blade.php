@extends('Admin/layout')


@section('content')
    <hr/>
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour au Dashboard</button></a>
        <a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Retour à la liste des articles</button></a>

    <hr/>

    <form action="{{ isset($article->slug)? route('editerArticle',['slug'=>$article->slug]): route('ajoutArticleDB') }}" method="post" >
        <div class="form-group">
            <label for="titre">Modifier le titre</label>
            <input class="form-control" type="text" name="titre" id="titre" value="{{ $article->titre or ''}}" required="required" />
        </div>


        <div class="form-group">

            <label for="texte">Modifier le texte</label>

            <textarea class="form-control" name="texte" id="texte">{{ $article->texte or ''}}</textarea>
            <script>
                CKEDITOR.replace( 'texte' );
            </script>

        </div>

        <div class="form-group">
            <label for="photo">Modifier la photo</label>
            <input  type="file" name="photo" id="photo" accept="image/*" />
        </div>

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


        <div class="form-group">
            <label for="rubrique">Dans la rubrique</label>

        <select name="rubrique_id" id="rubrique">

            @foreach ($rubriques as $rubrique)
                <option value="{{ $rubrique->id}}"
                        @if(isset( $articles))
                            @if($rubrique->id == $article->rubrique_id) selected="selected" @endif
                        @endif
                        >{{ $rubrique->titre }}</option>
            @endforeach
        </select>
        </div>

        <input type="submit" class="btn btn-success btn-lg" />
        <input type="reset" value="Effacer" class="btn btn-warning  btn-lg" />
    </form>   </section>
@stop