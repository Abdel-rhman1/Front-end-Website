$(document).ready(function()
{
    $("html").niceScroll();
    $('.carousel').carousel(
        {
            interval:5000
        }
    );
    $(".gear-check").click(function()
    {
        $(".color-option").fadeToggle();
    }); 
    var ColorLi=$(".color-option ul li");
    ColorLi
     .eq(0).css("backgroundColor","#E41B17").end()
     .eq(1).css("backgroundColor","#E426D5").end()
     .eq(2).css("backgroundColor","#009AFF").end()
     .eq(3).css("backgroundColor","#FFF400");
    ColorLi.click(function()
    {
        $("link[href*='Theme']").attr("href",$(this).attr("data-value"));
        //console.log($(this).attr("data-value"))
    });
});
//loading Screen
$(window).load(function()
{
    $(".overlay .loader").fadeOut(4000,function()
    {
        $("body").css("overflow","auto");
        $(this).parent().fadeOut(1000,function(){
            //$("body").css("overflow","auto");
            $(this).remove();
        })   
    });
    var ScrollButton=$("#scroll-top");
    $(window).scroll(function()
    {
        //console.log($(this).scrollTop());

        if($(this).scrollTop()>=700)
        {
            ScrollButton.show();
        }
        else
        {
            ScrollButton.hide();
        }
    });
    ScrollButton.click(function()
    {
        $("html,body").animate({scrollTop:0},900);
    })
});