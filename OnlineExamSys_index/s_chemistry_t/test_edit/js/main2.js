(function($){
	var initMin = 0.5;
	var time = initMin*60;
	var sec , min;
	timeConvertion();
	$(document).ready(function(){
		
		updateTimer();
		
		updateQuestion();

	});
	function countdownStart() {
		if(time != 0){
			time--;
		} else{
			$(".submit").click();
			clearInterval(interval);
		}
		timeConvertion();
		updateTimer();
	}

	function timeConvertion(){
		sec = time % 60; //Updating second
		min = Math.floor(time/60); //Updating minute
		sec = (sec <= 9) ? "0" + sec : sec;
		min = (min <= 9) ? "0" + min : min;
	}
	function updateTimer(){
		$(".timer").html(min + " : " + sec);
	}
	
	function updateQuestion(){
		
		var i;
		
		for(i = 1; i <= 15; i++ ){
			
			$(".new_class").append(
			"<tr>"+
			"<td> "+ i + " .Question no "+ i +"  ?</td>"+
			"</tr>"+
			"<tr>"+
			"<td>"+
			"<label class=\"radio-inline\" >"+
			"<input type=\"radio\" name=\"option_"+i+"\" id=\inlineRadio1\" class=\"comment\"   value=\"A\"> A"+
			"</label>"+
			"<label class=\"radio-inline\">"+
			"<input type=\"radio\" name=\"option_"+i+"\" id=\"inlineRadio2\" class=\"comment\"   value=\"B\"> B"+
			"</label>"+
			"<label class=\"radio-inline\">"+
			"<input type=\"radio\" name=\"option_"+i+"\" id=\"inlineRadio3\" class=\"comment\"   value=\"C\"> C"+
			"</label>"+
			"<label class=\"radio-inline\">"+
			"<input type=\"radio\" name=\"option_"+i+"\" id=\"inlineRadio3\" class=\"comment\"   value=\"D\"> D"+
			"</label>"+
			"</td>"+
			"</tr>"
			);
			
				
			/*
			
				
					
			*/
		}
		
	}

	$(".start").click(function(){
		$this = $(this)
		$this.attr("disabled","disabled");
		$(".form_container").fadeIn();
		interval = setInterval(countdownStart,1000);
	});


	
})(jQuery);