/*$(window).on("scroll", function() {
    var s = 400 - Math.min(400, $(document).scrollTop());
    $("img").width(s).height(s);
});
*/

$(document).ready(function(){
    $(".btn1").click(function(){
        $("p").hide();
    });
    $(".btn2").click(function(){
        $("p").show();
    });
});