(function($){
	var initMin = 0.1;
	var time = initMin*60;
	var sec , min;
	timeConvertion();
	$(document).ready(function(){
		
		updateTimer();


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

	$(".start").click(function(){
		$this = $(this)
		$this.attr("disabled","disabled");
		$(".form_container").fadeIn();
		interval = setInterval(countdownStart,1000);
	});


	
})(jQuery);