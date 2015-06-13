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


    @foreach($article as $articleunique)
            <h4><u>Id de l'article: </u></h4>
            <p><strong>{{$articleunique->id}}</strong></p><br/>

            <h4><u>titre de l'article: </u></h4>
            <p><strong>{{$articleunique->titre}}</strong></p><br/>

            <h4><u>slug de l'article: </u></h4>
            <p><strong>{{$articleunique->slug}}</strong></p><br/>

            <h4><u>texte de l'article: </u></h4>
            <article style="border: 1px solid black">
            <p>{!!$articleunique->texte!!}</p><br/>
            </article>
            <h4><u>photo de l'article: </u></h4>
            <p><strong>{{$articleunique->photo}}</strong></p><br/>

            <h4><u>rubrique_id de l'article: </u></h4>
            <p><strong>{{$articleunique->rubrique_id}}</strong></p><br/>




    @endforeach

    </section>


@endsection







