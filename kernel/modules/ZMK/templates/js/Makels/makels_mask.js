/*
	Makels mask element
*/

var MakelsMask = function(config) {

	this.selector = "#makels_loading_mask_wrapper";

	this.masked = (config && config.masked) ? config.masked : "body";

	// Initialization
	this.init = function() {
		$(this.masked).append("<div id='makels_loading_mask_wrapper'><div id='makels_loading_mask'></div><img src='" + app.tmpl_url + "/images/mask.gif' /><span>" + app.l("wait_msg") + "</span></div>");
		this.hide();
	}

	// Mask show
	this.show = function() {
		$(this.selector).show();
	}

	// Mask hide
	this.hide = function() {
		$(this.selector).hide();
	}

}