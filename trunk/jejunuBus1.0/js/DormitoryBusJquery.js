$(document).ready(function(){
$("#oldJeju").hide();
$("#oldJejuExtra").hide();
$("#newJeju").hide();

  $("#goOldJeju li:lt(3)").click(function(){
	$("#oldJeju").show();
    $("#oldJejuExtra").hide();
    $("#newJeju").hide();
  });
  $("#goOldJeju li:eq(3)").click(function(){		  
	$("#oldJeju").hide();
    $("#newJeju").hide();
    $("#oldJejuExtra").show();
  });
  $("#goNewJeju").click(function(){
	  $("#oldJeju").hide();
	  $("#newJeju").show();
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
