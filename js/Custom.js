/*global $,alert,console */
$(function()
{
    'use strict';
    var userError=true,
        mailError=true,
        msgError=true;
    $('.UserName').blur(function()
    {
        if($(this).val().length < 4)
        {
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.Custom').fadeIn(200);
            $(this).parent().find('.ast').fadeIn(100);
            userError=true;
        }
        else{
            $(this).css('border','1px solid #080');
            $(this).parent().find('.Custom').fadeOut(200);  
            $(this).parent().find('.ast').fadeIn(100); 
            userError=false;
        }
    });
    $('.email').blur(function()
    {
        if($(this).val().length < 1)
        {
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.Custom').fadeIn(200);
            $(this).parent().find('.ast').fadeIn(100);
            mailError=true;
        }
        else{
            $(this).css('border','1px solid #080');
            $(this).parent().find('.Custom').fadeOut(200);  
            $(this).parent().find('.ast').fadeIn(100); 
            mailError=false;
        }
    });
    $('.messages').blur(function()
    {
        if($(this).val().length < 11)
        {
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.Custom').fadeIn(200);
            $(this).parent().find('.ast').fadeIn(100);
            msgError=true;
        }
        else{
            $(this).css('border','1px solid #080');
            $(this).parent().find('.Custom').fadeOut(200);  
            $(this).parent().find('.ast').fadeIn(100); 
            msgError=false;
        }
    });
    $('.Contact-form').submit(function(e)
    {
        if(userError===true || mailError===true || msgError===true)
        {
            e.preventDefault(); 
            $('.UserName, .email , .messages').blur(); 
        }
    });
});