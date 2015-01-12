/*
	Makels main module
	By Zerg 2014
*/

var MAKELS = function(config) {

	// Main selector for wrapper element
	this.selector = (config && config.selector) ? config.selector : "body";

	// Model loaded
	this.model = null;

	// Main mask
	this.mask = new MakelsMask({
		masked: this.selector
	});

	// Initialization module
	this.init = function() {

		// Init Mask
		this.mask.init();

		// Render Makels
		this.render();

	}

	// Render all module
	this.render = function() {

	}

}