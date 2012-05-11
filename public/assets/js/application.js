$(function() {
	
	// apply datetime picker to all inputs with class .datetime
	$(".datetime").datepicker({
		duration: "",
		showTime: true,
		constrainInput: false,
		stepMinutes: 1,
		stepHours: 1,
		altTimeField: "",
		time24h: true
	});
});