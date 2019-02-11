
  /*hide and show password*/
 $(function(){
  "use strict";
  $(".showP").click(function(){
    $(this).toggleClass("active");
    if($(this).hasClass("active")){
      $(this).text("hide password").prev("input").attr("type","text");}
      else{
        $(this).text("show password").prev("input").attr("type","password");
      }
    });
    
  });

