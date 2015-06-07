
$(function(){
  page_display();
  
   hauteurPages();
  
  $('input[type="submit"]').addClass('button');
  
  $(window).on("resize",function(){
       page_display();
       hauteurPages();
       menu();

        
    });

    $('#menu a').on("click",function(){

         var right = $(this).attr('data-right');
         $('#pages').css('right', right);
    });
    $('#home').on("click",function(){

         $('#pages').css('right', '0%');
    });
    
    $('#lien-contact, #lien-contact2').on("click",function(){

         $('#pages').css('right', '500%');
    });
    
    var pageActive = (window.location.hash).replace('#','');
    
    if (pageActive =='apropos'){
        $('#pages').css('right', '100%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#section2').addClass('page-actuelle');
        hauteurPages();
    }
    if (pageActive =='lescours'){
        $('#pages').css('right', '200%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#section3').addClass('page-actuelle');
        hauteurPages();
    }
    if (pageActive =='agenda'){
        $('#pages').css('right', '300%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#section4').addClass('page-actuelle');
        hauteurPages();
    }
    if (pageActive =='medias'){
        $('#pages').css('right', '400%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#section5').addClass('page-actuelle');
        hauteurPages();
    }
    if (pageActive =='contact'){
        $('#pages').css('right', '500%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#contact-page').addClass('page-actuelle');
        hauteurPages();
    }
    if (pageActive ==''){
        $('#pages').css('right', '0%');
        $('.page-actuelle').removeClass('page-actuelle');
        $('#section1').addClass('page-actuelle');
        hauteurPages();
    }
    
    $('[data-page]').click(function(){
        var page= $(this).attr('data-page');
        
        var hauteur = $(page).innerHeight();
        
        $('#pages').innerHeight(hauteur);
        
        $('html, body').animate({
		scrollTop: 0
	}, 'slow');
    });
    
  
  $('#show-menu').click(function(){
      $('#navigation').toggle();
  });
  
   $('#navigation a').click(function(){
     if($('body').width() < 1024){
         $('#navigation').hide();
     }
  });

    
});


function page_display(){
    nbrePages = $('#pages>*').size();
    tailleEcran= $('body').width();
    
    largeurConteneur= nbrePages * tailleEcran;
    
    $('#pages').width(largeurConteneur);
    $('.page-systeme').width(tailleEcran);
    
    hauteurFenetre = $(window).innerHeight();
    $('.page-systeme').css('min-height', hauteurFenetre);
};


function hauteurPages(){
    
    var hauteurPages = $('.page-actuelle').innerHeight();
    $('#pages').innerHeight(hauteurPages);
    
}

function menu(){
    if($('body').width() > 1024){
         $('#navigation').show();
     }
}