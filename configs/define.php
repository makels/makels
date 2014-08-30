<?php
/*
	Define variables module
*/
	// Define paths
	define("KERNEL", "/kernel");
	define("SMARTY", KERNEL."/smarty");
	define("TEMP", ABS."/temp");
	define("MODELS_DIR", ABS."/temp");
	define("MODELS_URL", "/temp");
	define("CONFIGS", "/configs");
	define("CACHE", "/cache");
	define("THEMES", "/themes");
	define("THEME", THEMES."/default");
	define("CLASSES", KERNEL."/classes");
	define("MODULES", KERNEL."/modules");
	define("UPLOADS_URL", "/uploads");
	define("UPLOADS_DIR", ABS.UPLOADS_URL);
	define("MODELS_TMPL_DIR", ABS.THEME."/images/models");
	define("CASCADE_PATH", ABS."/api/opencv/cascades/haarcascades");

	// Smarty
	define("SMARTY_TEMPLATES", ABS.THEME);
	define("SMARTY_COMPILES", TEMP);
	define("SMARTY_CONFIGS", CONFIGS);
	define("SMARTY_CACHE", CACHE);

?>