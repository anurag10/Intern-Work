$(document).ready( function(){
	
	$("#employees").change( function() {
		var val1 = $("#employees").val();
	    if(val1!="")
	    $("#foodType").fadeIn(); 
	});

	$("#foodType").change( function() {
		var val2 = $("#foodType").val();
	    if(val2!="")
	    $("#havingFood").fadeIn(); 
	});
    
	$("#havingFood").change(function(){
		var value = $("#havingFood").val();
		console.log(value);
		if(value=="yes")
			$(".if_yes").fadeIn();
		else
			$(".if_yes").fadeOut();
	});



});