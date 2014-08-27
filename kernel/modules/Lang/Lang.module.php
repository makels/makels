<?php

class Lang extends Module {

	public function main() {
		global $app;
		if(isset($_POST["mod_lang_value"]))	$_SESSION["lang"] = $_POST["mod_lang_value"];
		$lang = isset($_SESSION["lang"]) ? $_SESSION["lang"] : 'ru';
		$app->lang = $lang;

		$lang_labels = $app->db->query(sprintf("SELECT `key`, `value_%s` as val FROM `#translate`", $lang));

		$labels = json_encode($lang_labels);
		$labels = str_replace('"', '\"', $labels);
		parent::assign("lang_labels", $labels);
		parent::assign("current_lang", $lang);

	}

}



?>