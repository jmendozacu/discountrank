Event.observe(window, 'load', function() {
	if(document.getElementById('meigee_general_appearance_maincolor') !== null) {
		var siteBg = new jscolor.color(document.getElementById('meigee_general_appearance_sitebg'), {})
		var mainColor = new jscolor.color(document.getElementById('meigee_general_appearance_maincolor'), {})
		var secondColor = new jscolor.color(document.getElementById('meigee_general_appearance_secondcolor'), {})
		var thirdColor = new jscolor.color(document.getElementById('meigee_general_appearance_thirdcolor'), {})		
	}
});