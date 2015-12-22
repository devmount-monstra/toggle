$(document).ready(function(){
    $(".click").click(function(event){
        /* set configuration */
        $(this).children(".toggle").slideToggle();
    });
});