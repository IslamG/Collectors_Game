//allow game to be played
function play(){
    $(".start").css("display","none");
    $(".start").css("display","none");
    $('body').css('pointer-events', 'none');
    timer(10,0);
    setTimeout(function() {$('body').css('pointer-events', 'auto');}, 1000);
    fallItems();
}
//initiate with starting 5 items
function fallItems(){
    var num = 5;
  while (num > 0) {
    buildItems();
    num--;
    if (!onOff)
        break;
    }
}
//reset game variables and initiate new game
function restartButton(){
    $('#pauseBtn').trigger("click");
    var ul=document.getElementById('itemList'), stuff=document.getElementById('stuff');
    while( ul.hasChildNodes() ){
            ul.removeChild(ul.lastChild);
    }
    while( stuff.hasChildNodes() ){
        stuff.removeChild(stuff.lastChild);
    }
    clicks=0;onOff=true;
    
    $('#timerDisplay').text("01:00");
    $('#winDialogue').css("display","none");
    $('body').css('pointer-events', 'auto');
    $('#scoreVal').text(0).css('color', 'white');
    clearInterval(watch);
    timer(60,0);
    init();
    fallItems();
}
var onOff=true;
function pause(){
    var str;
    if (onOff){
        //disable mouse on all but buttons
        onOff=false;
        clearInterval(watch);
        $('body').css('pointer-events', 'none');
        $('#pauseBtn').css('pointer-events', 'auto');
        $('#restartBtn').css('pointer-events', 'auto');
        $('.item').stop(true,false);
    }
    else{
        //restore mouse and resume timer
        onOff=true;
        $('body').css('pointer-events', 'auto');
        str=$('#timerDisplay').text();
        timer(str[3]+str[4],str[0]+str[1]);
        fallItems();
        $('.item').animate({"top": "430px"}, speed, "linear");
    }
}
//check for interaction and type
function posCheck(item){ 
    var txt, source=$(item).attr('src'), score=parseInt($('#scoreVal').text());
    $(item).addClass('fade');
    //was the item caught in basket?
    if(inRange(item)){
    var antiItem=false;
        $('#itemList li img').each(function(i){
           txt=$(this).attr('src');
           if(source==txt){
                score=score-30;
                $('#scoreVal').text(score);
                if(score<=0){
                    $('#scoreVal').css("color","rgb(250,20,20");
                antiItem=true;
                }
            }
            });
        if(!antiItem){
            score=score+10;
            $('#scoreVal').text(score);
            if(score>0){
                $('#scoreVal').css("color","white");
            }
            $('#stuff').append($('<span class="fade  green s">+10</span>'));
            var xPos=$(item).css('left'),
                yPos=$(item).css('top');
            $(item).toggleClass('green');
        }
        
    }
    else{
        var antiItem=false;
        $('#itemList li img').each(function(i){
           txt=$(this).attr('src');
           if(source==txt){
                score=score+10;
                $('#scoreVal').text(score);
                if(score>=0){
                    $('#scoreVal').css("color","white");
                antiItem=true;
                }
            }
            });
        if(!antiItem){
            score=score-10;
            $('#scoreVal').text(score);
            if(score<=0){
                $('#scoreVal').css("color","rgb(250,20,20");
            }
            var xPos=$(item).css('left'),
                yPos=$(item).css('top');
            $(item).toggleClass('red');
            $('#stuff').append($('<span class="fade  red s">-10</span>'));
        }
    }
    $('.fade').css({
            top: yPos,
            left: xPos
            }).addClass('running');
    $(".fade").on('animationend webkitAnimationEnd oAnimationEnd oanimationend MSAnimationEnd', 
        function() {
            item.remove();
            $(".fade").removeClass('running');
        });
    item.remove();
    buildItems();
}
//check if item overlaps with basket
function inRange(item){
    var itemWidth=parseInt($(item).width()), basWidth=parseInt($('#basket').width()),
        basLeft=parseInt($('#basket').css('left')), posX=parseInt($(item).css('left'));
    //overlaps from the right
    if ((basLeft<=posX)&&(posX<=((basLeft+basWidth))*0.9)){
        return true;
            }
    //overlaps from the left 
    else if ((basLeft>=posX)&&(basLeft<=((posX+itemWidth))*0.9)){
        return true;
            } 
    //overlaps from both ends (item is larger than basket)
    else if ((basLeft>=posX)&&((basLeft+basWidth)<=(posX+itemWidth))){
        return true;
            } 
    //overlaps from both ends (item is smaller than basket)
    else if ((basLeft<=posX)&&((basLeft+basWidth)>=(posX+itemWidth))){
        return true;
            } 
    //isn't overlapped
    else
        {
        return false;
    }
}
function won(){
    wonDialogue();
    var scoreVal=$('#scoreVal').text();
    $('#score').text($('#scoreVal').text());
    $('body').css('pointer-events', 'none');
    $('#winDialogue').css('pointer-events', 'auto');
    $('#pauseBtn').css('pointer-events', 'none');
    $('#restartBtn').css('pointer-events', 'auto');
}