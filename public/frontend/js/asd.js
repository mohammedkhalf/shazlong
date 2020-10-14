$(document).ready(function() {

	$('.carousel').carousel({
	  interval: 500
	});

	$(".gear-check").click(function()
	{

		$(".color-option").fadeToggle();

    });

    var scroll = $("#scroll-top");

    $(window).scroll(function()
    {
    	console.log($(this).scrollTop());

    	scroll.click(function(){

    	$("html,body").animate ({scrollTop : 0}, 600);


    	});
    });

});

/* star loading*/
/* css spinner */

$(window).load(function()
{  
	//show the scroll


	$(".loading-overflow .spinner").fadeOut(1000,function()
	{
		$(this).parent().fadeOut(1000,function()
		{
			$("body").css("overflow","auto");
			$(this).remove();
		});

	});
});

/* end loading*/

