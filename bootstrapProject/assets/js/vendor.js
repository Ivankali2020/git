

$("#sidebtn").click(function(){
    $('.side').animate({marginLeft:0});
    $(".side").css({'backgroundColor':'white'})

    console.log('hello')
});
$("#close").click(function(){
    $('.side').animate({marginLeft:"-100%"});

});

function go(url){
    location.href = `${url}`;
};

  
$('#maxibtn').click(function(){
    console.log('h');
    $("#btn").toggleClass("max");
    $('#maxibtn').find('i').toggleClass(' fa-window-minimize  fa-window-maximize');
});
$('#lineBtn').click(function(){
    console.log('h');
    $("._chart").toggleClass("forChart");
    $('#lineBtn').find('i').toggleClass(' fa-window-minimize  fa-window-maximize');
});

$('#pieBtn').click(function(){
    console.log('h');
    $("._piechart").toggleClass("forChart");
    $('#pieBtn').find('i').toggleClass(' fa-window-minimize  fa-window-maximize');
});

$('#inputbtn').click(function(){
    console.log('h');
    $("#inputcard").toggleClass("max");
    $('#inputbtn').find('i').toggleClass(' fa-window-minimize  fa-window-maximize');
});