@extends('Admin/layout')

@section('content')
    <hr/>
<section class="container">
    <a href="{{route('accueilAdmin')}}"><button class="btn btn-default">Retour à l'accueil Admin</button></a> &nbsp;&nbsp;
    <a href="{{route('ajoutArticle')}}"><button class="btn btn-success">Ajouter un article</button></a>&nbsp; &nbsp;
    <a href="{{route('listeArticlesAdmin')}}"><button class="btn btn-info">Retour à la liste des articles</button></a>
</section>

    <hr/>
    <section class="container">

            <h4><u>Id de l'article: </u></h4>
            <p><strong>{{$article->id}}</strong></p><br/>

            <h4><u>titre de l'article: </u></h4>
            <p><strong>{{$article->titre}}</strong></p><br/>

            <h4><u>slug de l'article: </u></h4>
            <p><strong>{{$article->slug}}</strong></p><br/>

            <h4><u>texte de l'article: </u></h4>
            <article style="border: 1px solid black">
            <p>{!!$article->texte!!}</p><br/>
            </article>
            <h4><u>photo de l'article: </u></h4>
            <p><strong>{{$article->photo}}</strong></p><br/>

            <h4><u>rubrique_id de l'article: </u></h4>
            <p><strong>{{$article->rubrique_id}}</strong></p><br/>



    </section>


@endsection







