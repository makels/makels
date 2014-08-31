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

		this.disableDropDocument();

		$("#load_model_cnt").on("dragenter", function(e) {
			e.stopPropagation();
    	e.preventDefault();
			$(this).css("border-color", "#909090");
		});

		$("#load_model_cnt").on("dragleave", function(e) {
			e.stopPropagation();
    	e.preventDefault();
			$(this).css("border-color", "#c0c0c0");
		});

		$("#load_model_cnt").on("drop", function(e) {
			e.preventDefault();
			app.Makels.mask.show();
			var upl = new FileUploader();
			upl.files = e.originalEvent.dataTransfer.files;
			upl.afterUpload = function(data) {
				scope.onLoaded(data);
			}
			upl.beginUpload();

		});
	}

	// Load Model
	this.loadModel = function() {
		this.webCamClose();
		var scope = this;
		var upl = new FileUploader();
		upl.uploadFile(function(data) {
			scope.onLoaded(data);
		});
	}

	// Load Model Template
	this.loadModelTemplate = function(file) {
		this.webCamClose();
		app.mainMenu.choiseMode("zmm_photo");
		var scope = this;
		app.Makels.mask.show();
		app.api.setModelTemplate(file, function(model_data) {
			if(model_data && model_data.url && model_data.url != "") {
					scope.model_data = model_data;
					scope.renderModel();
				}
				window.setTimeout(function() {
					app.Makels.mask.hide();
				}, 1000);
		});
	}

	// Load Model from WebCam
	this.loadModelWebCam = function() {
		this.webCamClose();
		var scope = this;
		$("#load_model_cnt").remove();
		$("#model_img_id").remove();
		$(this.wrapper).photobooth().on( "image", function( event, dataUrl ){
			app.Makels.mask.show();
			app.api.setModelWebCam(dataUrl, function(model_data) {
				if(model_data && model_data.url && model_data.url != "") {
					scope.model_data = model_data;
					scope.webCamClose();
					scope.renderModel();
				}
				window.setTimeout(function() {
					app.Makels.mask.hide();
				}, 1000);
			});

		});
		$(this.wrapper).data( "photobooth" ).resize( 400, 300 );
	}

	// Loaded Model
	this.onLoaded = function(data) {
		var scope = this;
		if(data.file && data.file != "") {
			app.api.setModel(data.file, function(model_data) {
				if(model_data && model_data.url && model_data.url != "") {
					scope.model_data = model_data;
					scope.renderModel();
				}
				window.setTimeout(function() {
					app.Makels.mask.hide();
				}, 1000);
			});
		} else {
			app.Makels.mask.hide();
		}
	}

	// Render Model
	this.renderModel = function() {
		$("#load_model_cnt").remove();
		$("#model_img_id").remove();
		var rnd = Math.ceil(Math.random(5)*10000);
		$(this.wrapper).append("<div id='model_img_id'><img src='" + this.model_data.url + "?cache=" + rnd + "' /></div>");
		this.managerCmp = new ModelManager({
			model: this
		});
		this.managerCmp.render();
	}

	this.webCamClose = function() {
		if($(".photobooth").length > 0 && $(this.wrapper).data( "photobooth" ) && $(this.wrapper).data( "photobooth" ).destroy)
			$(this.wrapper).data( "photobooth" ).destroy();
	}

	// Disable document dragable
	this.disableDropDocument = function() {
		$(document).on('dragenter', function (e) {
	    e.stopPropagation();
	    e.preventDefault();
		});
		$(document).on('dragover', function (e)	{
		  e.stopPropagation();
		  e.preventDefault();
		});
		$(document).on('drop', function (e) {
	    e.stopPropagation();
	    e.preventDefault();
		});
	}
}