var App = function() {

	// App mode
	this.mode = "main";

	// App main menu
	this.mainMenu = new MainMenu();

	// Makels module
	this.Makels = null;

	// Language
	this.lang = null;

	// Url templates
	this.tmpl_url = "";

	// Client API
	this.api = new Api();

	// Initialization
	this.init= function() {

		// Main menu init
		this.mainMenu.init();
		
		this.Makels = new MAKELS({
			selector: '#zmk_workplace_wrapper',
			// other config items
		});

		// Init makel component
		this.Makels.init();

		// Set startup mode (main)
		this.setMode(this.mode);

	}

	// Set application mode
	this.setMode = function(mode) {
		this.mode = mode;

		if(this.mode == "main")
			$("#zmk_workplace_wrapper").hide();
		else
			$("#zmk_workplace_wrapper").show();


		$(".zmk_modes").hide();
		$("#zmk_mode_" + mode).show();
	}

	// Get lang value
	this.l = function(key) {
		var res = null;
		$.each(this.lang, function(index, el) {
			if(el.key == key) res = el.val;
		});
		return res;
	}

}

var app = new App();