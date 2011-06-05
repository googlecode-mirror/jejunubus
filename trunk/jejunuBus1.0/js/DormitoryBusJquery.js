$(document).ready(function(){
$("#oldJeju").hide();
$("#oldJejuExtra").hide();
$("#newJeju").hide();

  $("#goOldJeju li:lt(3)").click(function(){
    $("#oldJeju").toggle();
  });
  $("#goOldJeju li:eq(3)").click(function(){		  
    $("#oldJejuExtra").toggle();
  });
  $("#goNewJeju").click(function(){
	  $("#newJeju").toggle();
  });
  $("#oldJeju").click(function(){
	  $("#oldJeju").toggle();
  });
  $("#newJeju").click(function(){
	  $("#newJeju").toggle();
  });
  $("#oldJejuExtra").click(function(){
	  $("#oldJejuExtra").toggle();
  });
  
});
