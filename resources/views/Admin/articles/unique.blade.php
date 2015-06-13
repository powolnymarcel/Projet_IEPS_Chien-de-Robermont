@extends('Admin/layout')

@section('content')
    <hr/>
<section class="container">
    <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a> &nbsp;&nbsp;
    <a href="{{route('ajoutArticle')}}"><button class="btn btn-success">Ajouter un article</button></a>&nbsp; &nbsp;
    <a href="{{ route('editerArticle', $article->slug) }}"><button class="btn btn-warning">Modifier cet  article</button></a>&nbsp; &nbsp;
    <a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Retour à la liste des articles</button></a>
</section>

    <hr/>
    <section class="container">

            <h4><u>Id de l'article: </u></h4>
            <p><strong>{{$article->id}}</strong></p><br/>

            <h4><u>Titre de l'article: </u></h4>
            <p><strong>{{$article->titre}}</strong></p><br/>

            <h4><u>Affichage dans l'URL: </u></h4>
            <p><strong>{{$article->slug}}</strong></p><br/>

            <h4><u>Texte de l'article: </u></h4>
            <article style="border: 1px solid black">
            <p>{!!$article->texte!!}</p><br/>
            </article>

        @if($article->photo)
            <h4><u>Photo de l'article: </u></h4>
            <img src="{{asset('files/'.$article->photo)}}" alt=""/>

        @endif

            <h4><u>Rubrique de l'article: </u></h4>
            @foreach($rub as $r)
            <p><strong>{{$r->titre}}</strong></p><br/>
            @endforeach


    </section>


@endsection







