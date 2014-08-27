/*
	Makels Model
	By Zerg 2014
*/

var Model = function(config) {

	this.tmpls = {
		empty: String.format("<div id='load_model_cnt' class='empty_model_container'>{0}</div>", app.l("photo_upload"))
	};


	// Wrapper for component
	this.wrapper = (config && config.wrapper) ? config.wrapper : "body";

	// Url for model image
	this.model_url = null;

	this.init = function() {

		// Clear model
		this.clear();

	}

	// Clear model
	this.clear = function() {
		var scope = this;
		this.model_url = null;
		$(this.wrapper).html(this.tmpls.empty);
		$("#load_model_cnt").click(function() {
			scope.loadModel();
		});
	}

	// Load Model
	this.loadModel = function() {
		debugger;
	}


}