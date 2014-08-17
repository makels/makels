/*
	Makels main module
	By Zerg 2014
*/

var MAKELS = function(config) {

	// Main selector for wrapper element
	this.selector = (config && config.selector) ? config.selector : "body";

	// Main mask
	this.mask = new MakelsMask({
		masked: this.selector
	});

	// Initialization module
	this.init = function() {

		this.mask.show();
	}

	// Render all module
	this.render = function() {

	}

	this.init();
}