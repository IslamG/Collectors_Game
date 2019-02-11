$(document).ready(function(){
    /* scroll to top*/
    $(function(){
      var scrollButton = $("#scroll-up");
      $(window).scroll(function(){
        $(this).scrollTop()>=500?scrollButton.show():scrollButton.hide();
      });
      scrollButton.click(function(){
        $("html,body").animate({scrollTop:0 },600);
      });
    });
    /*calculate text area*/
    $(function(){
      "use strict";
      var maxText = $('textarea').attr('maxlength') , ourMessage = $('.message');
      ourMessage.html('<span>'+ maxText + '</span> characters remaining.');
      $('textarea').keyup(function(){
        var textLength = $(this).val().length,
        remChars = maxText-textLength ;
        ourMessage.html('<span>'+ remChars +'</span> characters remaining.');
      });
                });
    /* add element to html*/
    $("<p> The main game is to strengthen the focus player by doing a search in the image of the things listed in the list to the left of the screen by clicking on them using the mouse. </p>").appendTo("#gameDesc");
   /*say ok */
    function sayDone(){
        'use strict';
        alert("message was sent");
    }
    
    });

