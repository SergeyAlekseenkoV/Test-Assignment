$(document).ready(function(){
    $(".card_link").click(function() {
        window.location = $(this).find(".read_more").attr("href"); 
        return false;
    });
});