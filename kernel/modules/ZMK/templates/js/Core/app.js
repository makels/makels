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
		
	}

	// Set application mode
	this.setMode = function(mode) {
		this.mode = mode;
		$(".zmk_modes").hide();
		$("#zmk_mode_" + mode).show();
	}

}

var app = new App();