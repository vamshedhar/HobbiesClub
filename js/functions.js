$(document).ready(function(){
$("a#nwes").click(function(){
	//alert($("div#web").css("display"));
	if($("div#abt").css("display") != 'none')
	{
	$("div#home").css("background-image",'none');
 	$("div#web").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#photo").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#literary").css("background-image",'none');
 	$("div#modelling").css("background-image",'none');
	$("div#electronics").css("background-image",'none');
	
  $("div#abt").fadeOut(300,function()
 { 
 	

   $("div#nws").fadeIn(1000);
});
	}
	if($("div#evnt").css("display") != 'none')
	{
  $("div#evnt").fadeOut(300,function()
 { 
$("div#home").css("background-image",'none');
 	$("div#web").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#photo").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#literary").css("background-image",'none');
 	$("div#modelling").css("background-image",'none');
	$("div#electronics").css("background-image",'none');
   $("div#nws").fadeIn(1000);
});
	}

});

$("a#abot").click(function(){
	//alert($("div#web").css("display"));
	if($("div#nws").css("display") != 'none')
	{
  $("div#nws").fadeOut(300,function()
 { 
  	$("div#web").css("background-image",'url(images/websitedesignmanchester-960x500.png)');
  	$("div#photo").css("background-image",'url(images/graphicdesignmanchester2-960x500.png)');
	$("div#arts").css("background-image",'url(images/FINE ARTS1.png)');
  	$("div#literary").css("background-image",'url(images/literarynew.png)');
	$("div#electronics").css("background-image",'url(images/electronics1.png)');

   $("div#abt").fadeIn(1000);
});
	}
	if($("div#evnt").css("display") != 'none')
	{
  $("div#evnt").fadeOut(300,function()
 { $("div#web").css("background-image",'url(images/websitedesignmanchester-960x500.png)');
  	$("div#photo").css("background-image",'url(images/graphicdesignmanchester2-960x500.png)');
	$("div#arts").css("background-image",'url(images/FINE%20ARTS1.png)');
  	$("div#literary").css("background-image",'url(images/literarynew.png)');
	$("div#electronics").css("background-image",'url(images/electronics1.png)');
   $("div#abt").fadeIn(1000);
});
	}

});

$("a#eve").click(function(){
	//alert($("div#web").css("display"));
	if($("div#abt").css("display") != 'none')
	{
  $("div#abt").fadeOut(300,function()
 { 
$("div#home").css("background-image",'none');
 	$("div#web").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#photo").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#literary").css("background-image",'none');
 	$("div#modelling").css("background-image",'none');
	$("div#electronics").css("background-image",'none');  
	 $("div#evnt").fadeIn(1000);
});
	}
	if($("div#nws").css("display") != 'none')
	{
  $("div#nws").fadeOut(300,function()
 { 
$("div#home").css("background-image",'none');
 	$("div#web").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#photo").css("background-image",'none');
 	$("div#arts").css("background-image",'none');
 	$("div#literary").css("background-image",'none');
 	$("div#modelling").css("background-image",'none');
	$("div#electronics").css("background-image",'none');
   $("div#evnt").fadeIn(1000);
});
	}

});

});

