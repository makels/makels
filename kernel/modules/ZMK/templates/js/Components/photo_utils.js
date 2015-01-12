/*
	Photo Utils
	By Zerg 2014

	Using:

	var photoUtils = new PhotoUtils();

	// Get url model from file
	photoUtils.getPhotoByFile(function(url) {
		// url: photo
	});

	photoUtils.getPhotoByTemplate	- Get photo by template
	photoUtils.getPhotoByFile 		- Get photo by file
	photoUtils.getPhotoByWebCam		- Get photo with webcam
	photoUtils.getPhotoByFacebook - Get photo from facebook
	photoUtils.getPhotoByOK 			- Get photo from OK
	photoUtils.getPhotoByVK 			- Get photo from VK
	photoUtils.getPhotoByMakels 	- Get photo from Makels (next release)

*/

var PhotoUtils = function() {

	// Implement sources
	this.sources = {
		template:	0, 									// Template mode
		file: 		1, 									// File mode
		webcam: 	2,									// WebCam mode
		facebook: 3,									// Facebook mode
		ok: 			4,									// OK mode
		vk: 			5,									// VK mode
		mk: 			6										// Makels mode
	};

	this.source = 0;								// Default source file mode

	this.success = function() { /* empty callback */ };

	// Get photo by template
	this.getPhotoByTemplate = function(success) {
		if(success)	this.success = success; 
		this.source = this.sources.template;
		this.getPhoto();
	}

	// Get photo from file
	this.getPhotoByFile = function(success) {
		if(success)	this.success = success; 
		this.source = this.sources.file;
		this.getPhoto();
	}

	// Get photo with webcam
	this.getPhotoByWebCam = function(success) {
		if(success)	this.success = success; 
		this.source = this.sources.webcam;
		this.getPhoto();
	}

	// Get photo from facebook
	this.getPhotoByFacebook = function(success) {
		if(success)	this.success = success; 
		this.source = this.sources.facebook;
		this.getPhoto();
	}

	// Get photo from OK
	this.getPhotoByOK = function(success) {
		if(success)	this.success = success; 
		this.source = this.sources.ok;
		this.getPhoto();
	}

	// Get photo from VK
	this.getPhotoByVK = function(success) {
		if(success)	this.success = success;
		this.source = this.sources.vk;
		this.getPhoto();
	}

	// Get photo from Makels
	this.getPhotoByMakels = function(success) {
		//TODO: Implementation after makels released
		success();
	}

	/* PRIVATE */

	this.getPhoto = function() {
		// TODO: Implementation
	}
}