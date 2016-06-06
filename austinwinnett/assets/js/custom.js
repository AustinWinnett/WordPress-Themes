$(document).ready(function() {
    
    $("body").fadeIn(500);
    $(".card").addClass("animated slideInUp");
    
});

$("#panelTitle").click(function(){
    
    $(this).find("i").toggleClass("fa-caret-up");
    
});