/*
	Uploader client
*/

var FileUploader = function() {

	this.afterUpload = null;

	this.files = null;

	this.uploadFile = function(success) {
		var scope = this;
		this.afterUpload = success;
		this.clearContent();
		this.prepareContent();
		$('#input_file').change(function(event) {
			scope.files = event.target.files;
			scope.beginUpload();
		});
		$('#input_file').click();
	}

	this.prepareContent = function() {
		$('body').append('<form style="display: none;" id="fileUploader"><input type="file" id="input_file" name="input_file" accept="image/jpeg,image/png,image/gif" /></form>');
	}

	this.clearContent = function() {
		$('#fileUploader').remove();
	}

	this.beginUpload = function() {
		var scope = this;
		var data = new FormData();
		$.each(this.files, function(key, value)	{
			data.append(key, value);
		});
		app.Makels.mask.show(); 
		app.api.upload(data, function(result) {
			if(scope.afterUpload) scope.afterUpload(result);
		});
	}

}