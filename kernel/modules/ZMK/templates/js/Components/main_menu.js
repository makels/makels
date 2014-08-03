/*
	Component Main menu
	By Zerg 2014
*/

var MainMenu = function() {

	this.init = function() {

		var scope = this;
		$('#zmk_main_menu li').click(function() {
			scope.choiseMode($(this).attr("id"));
		});

	}

	// Chhoice app mode
	this.choiseMode = function(id) {
		$("#zmk_main_menu li.active").removeClass("active");
		$("#" + id).addClass("active");
		var mode = id.replace("zmm_", "");
		app.setMode(mode);
	}

}