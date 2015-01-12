/*
	Makels Model
	By Zerg 2014
*/

var Model = function(config) {

	this.tmpls = {
		empty: String.format("<div id='load_model_cnt' class='empty_model_container'>{0}</div>", app.l("photo_upload"))
	};

	// Context
	this.context = null;

	// Wrapper for component
	this.wrapper = (config && config.wrapper) ? config.wrapper : "body";

	// Model data
	this.model_data = null;

	// Model management component
	this.managerCmp = null;

	this.init = function() {

	}
	
	// Render Model
	this.renderModel = function() {
		
	}

}