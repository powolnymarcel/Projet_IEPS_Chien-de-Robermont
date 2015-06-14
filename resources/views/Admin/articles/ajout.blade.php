@extends('Admin/layout')

@section('title')
    @if( isset($article->slug))
        <h1>Modifier un article</h1>
    @else
        <h1>Ajouter un article</h1>

    @endif

@endsection

@section('content')
    <hr/>
    <section class="container">
        <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour au Dashboard</button></a>
        <a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Retour à la liste des articles</button></a>

    <hr/>

    <form action="{{ isset($article->slug)? route('editerArticle',['slug'=>$article->slug]): route('ajoutArticleDB') }}" method="post" enctype="multipart/form-data">
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

        @if(isset($article->photo))
            <label for="photoactuelle">Photo actuelle</label><br/>
            <img src="{{asset('uploads/imagesArticles/'.$article->photo)}}" width="30%" id="photoactuelle" alt=""/>
            <input type="hidden" value="{{$article->photo}}" name="photoactuelle"/>

            <div style="border: 1px solid #000000;width: 30%">
                <label for="photo">Ajouter la nouvelle photo</label><br/>
                @endif
                <input type="file" id="photo" name="photo">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
</div>

        <div class="form-group">
            <label for="rubrique">Dans la rubrique</label>

        <select name="rubrique_id" id="rubrique">

            @foreach ($rubriques as $rubrique)
                <option value="{{ $rubrique->id}}"
                        @if(isset( $article))
                            @if($rubrique->id == $article->rubrique_id) selected="selected" @endif
                        @endif
                        >{{ $rubrique->titre }}</option>
            @endforeach
        </select>
        </div>

        <input type="submit" class="btn btn-success " />
            <a href="{{route('listeArticlesAdmin')}}" class="btn btn-danger">Annuler</a>
    </form>   </section>
@stop