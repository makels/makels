var App = function() {

	this.mode = "main";

	this.mainMenu = new MainMenu();

	this.init= function() {

		// Main menu init
		this.mainMenu.init();

		// Main slited init
		this.mainSliderInit();

		// Set startup mode (main)
		this.setMode(this.mode);

	}

	// Init main slider
	this.mainSliderInit = function() {
		$("#zmkSlider").jFlow(
			{
				controller: ".jFlowControl", // must be class, use . sign
				slideWrapper: "#jFlowSlider", // must be id, use # sign
				slides: "#mySlides",  // the div where all your sliding divs are nested in
				selectedWrapper: "jFlowSelected",  // just pure text, no sign
				effect: "rewind", //this is the slide effect (rewind or flow)
				width: "1024px",  // this is the width for the content-slider
				height: "300px",  // this is the height for the content-slider
				duration: 400,  // time in milliseconds to transition one slide
				pause: 5000, //time between transitions
				prev: ".jFlowPrev", // must be class, use . sign
				next: ".jFlowNext", // must be class, use . sign
				auto: true
			}
		);
	}

	// Set application mode
	this.setMode = function(mode) {
		this.mode = mode;
		$(".zmk_modes").hide();
		$("#zmk_mode_" + mode).show();
	}

}

var app = new App();