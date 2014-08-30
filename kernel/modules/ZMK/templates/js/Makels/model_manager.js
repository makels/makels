/*
	Model Manager
	By Zerg 2014
*/

var ModelManager = function(config) {

	// This model
	this.model = config.model;

	// Render manager
	this.render = function() {
		$(this.model.wrapper).append("<div id='model_manager_wrapper'><button id='btn_test_id'>TEST</button></div>");
		this.initHandlers();
	}

	// Init manager handlers
	this.initHandlers = function() {
		var scope = this;
		$("#btn_test_id").click(function() {
			scope.test();
		});
	}

	// TEST
	this.test = function() {
		app.Makels.mask.show();
		app.api.analizeModel(this.model.model_data.file, function(data) {
			app.Makels.mask.hide();
			debugger;
		});
	}


}