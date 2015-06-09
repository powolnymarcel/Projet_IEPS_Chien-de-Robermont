
@foreach($articlesAPropos as $articleAPropos)

    <p> {{$articleAPropos->titre}}</p>

   
<article>
    <h2 class="text-center transform titreArticle">{{articleAPropos->titre}}</h2>
    <div class="article row lato  ">
            <div class="text-center transform thumb">

            </div>
            <img width="960" height="720" src="{{asset('/files/articleAPropos->photo')}}" class="attachment-post-thumbnail wp-post-image" alt="1">
            <div>
                                    {{articleAPropos->texte}}

            </div>
    </div>
</article>
 @endforeach
