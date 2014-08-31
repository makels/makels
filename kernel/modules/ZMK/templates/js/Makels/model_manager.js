/*
	Model Manager
	By Zerg 2014
*/

var ModelManager = function(config) {

	// This model
	this.model = config.model;

	this.modelData = null;

	// Render manager
	this.render = function() {
		$('#model_manager_wrapper').remove();
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
		var scope = this;
		app.Makels.mask.show();
		app.api.analizeModel(this.model.model_data.file, function(data) {
			app.Makels.mask.hide();
			scope.modelData = data;
			scope.drawModelPoints();
		});
	}

	this.drawModelPoints = function() {
		var scope = this;
		if(this.modelData && this.modelData.face_detect && this.modelData.face_detect.length > 0) {
			$.each(this.modelData.face_detect, function(index, coords) {
				scope.setRectangle(coords);
			});
		}
	}

	this.setRectangle = function(coords) {
		var rnd = Math.ceil(Math.random(5)*10000);
		var rect_id = "rect_" + rnd;
		$("#model_img_id").append("<div id='" + rect_id + "' class='model_rect'></div>");
		$("#" + rect_id).css('top', coords.y + "px");
		$("#" + rect_id).css('left', coords.x + 'px');
		$("#" + rect_id).css('width', coords.w + 'px');
		$("#" + rect_id).css('height', coords.h + 'px');
	}

	this.setPoint = function(x, y) {
		var point_id = 'p_" + x + "_" + y + "';
		$(this.model.wrapper).append("<div id='" + point_id + "' class='model_point'></div>");
		$('#' + point_id).top(y);
		$('#' + point_id).left(x);
	}

}