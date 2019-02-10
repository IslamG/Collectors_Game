$("document").ready(function(){
  
$("body").prepend("<div class='tdiv'></div>");
$("div.tdiv").append("<nav class='tnav'></nav>");
$("nav.tnav").append("<a id='title' href='#'>Collectors</a>");
$("nav.tnav").append("<ul class='tul'></ul>");
$("ul.tul").append("<li class='tlist'></li>");
$("li.tlist").append("<a id='a1' href='#' >home</a>");
$("li.tlist").append("<a id='a2' href='#' >about</a>");
$("li.tlist").append("<a  id='a3' href='gameIndex.php' >play now</a>");
$("li.tlist").append("<a id='log' href='#'>login</a>");
$("li.tlist").append("<a  id='a5' href='#' >register</a>");
  });
$("#log").click(function(){
$(".tlist").hide();

});
$("document").ready(function(){
$("nav.tnav").append("<li class= 'lit'></li>");
$("li.lit").append("<a  id='a7' href= '#' > log out </a>").hide();
$("#log").click(function(){
  
$(".lit").show();


});


});
$("document").ready(function(){
  $(".tnav a").click(function(e){
$("#a1").css({"backgroundColor":"black"});
$("#a2").css({"backgroundColor":"black"});
$("#a3").css({"backgroundColor":"black"});
$("#log").css({"backgroundColor":"orangered"});
$("#a5").css({"backgroundColor":"black"});
$(e.target).css({"backgroundColor":"grey"});

});


});


