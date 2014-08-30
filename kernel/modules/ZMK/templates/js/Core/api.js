/*
	Api client module
	By Zerg 2014
*/

var Api = function() {

	// Api url
	this.url_prefix = "/api/";

	// Request
	this.upload = function(data, success) {
		var scope = this;
		$.ajax({
        url: this.url_prefix + 'upload',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data)
        {
        	if(typeof data.error === 'undefined')
        		success(data);
        	else
        		scope.onError();
        },
        error: function() {
					scope.onError();
        }
    });
	}

	// Set model
	this.setModel = function(file, success) {
		var scope = this;
		$.ajax({
            url: this.url_prefix + 'set_model',
            type: 'POST',
            data: {
            	file: file
            },
            dataType: 'json',
            success: function(data) {
            	success(data);
            },
            error: function() {
    			scope.onError();
            }
        });
	}

	// Set model template
	this.setModelTemplate = function(file, success) {
		var scope = this;
		$.ajax({
            url: this.url_prefix + 'set_model_template',
            type: 'POST',
            data: {
            	file: file
            },
            dataType: 'json',
            success: function(data) {
            	success(data);
            },
            error: function() {
    			scope.onError();
            }
        });
	}

    // Set model from webcam
    this.setModelWebCam = function(dataUrl, success) {
        var scope = this;
        $.ajax({
            url: this.url_prefix + 'set_model_webcam',
            type: 'POST',
            data: {
                dataUrl: dataUrl
            },
            dataType: 'json',
            success: function(data) {
                success(data);
            },
            error: function() {
                scope.onError();
            }
        });
    }

    // Analize photo
    this.analizeModel = function(file, success) {
      var scope = this;
        $.ajax({
            url: this.url_prefix + 'analize_model',
            type: 'POST',
            data: {
                file: file
            },
            dataType: 'json',
            success: function(data) {
                success(data);
            },
            error: function() {
                scope.onError();
            }
        });  
    }

	// Error handler
	this.onError = function() {
		app.Makels.mask.hide();
		console.log("Ошибка API");
	}
}