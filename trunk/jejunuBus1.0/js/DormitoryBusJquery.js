$(document).ready(function(){
$("#oldJeju").hide();
$("#oldJejuExtra").hide();
$("#newJeju").hide();

  $("#goOldJeju li:lt(3)").click(function(){
	$("#oldJeju").toggle();
    $("#oldJejuExtra").hide();
    $("#newJeju").hide();
  });
  $("#goOldJeju li:eq(3)").click(function(){		  
	$("#oldJeju").hide();
    $("#newJeju").hide();
    $("#oldJejuExtra").toggle();
  });
  $("#goNewJeju").click(function(){
	  $("#oldJeju").hide();
	  $("#newJeju").toggle();
	  $("#oldJejuExtra").hide();
  });
  $("#oldJeju").click(function(){
	  $("#oldJeju").hide();
  });
  $("#newJeju").click(function(){
	  $("#newJeju").hide();
  });
  $("#oldJejuExtra").click(function(){
	  $("#oldJejuExtra").hide();
  });
  
});
