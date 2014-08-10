<?php
/*
	ZSlider module
*/

class ZSlider extends Module {

	public $slider = array();

	public function main() {
		
		$res = $this->getAllSlide();
		foreach ($res as $key => $value) {
			$slide = new ZSlide();
			$slide->id = $value['id'];
			$slide->name = $value['name'];
			$slide->descr = $value['descr'];
			$slide->image = $value['image'];
			$slide->link = $value['link'];
			$this->slider[] = $slide;
		}
		parent::assign("slider", $this->slider);
	}

	/* PRIVATE */

	private function getAllSlide() {
		global $app;
		$sql = "SELECT * FROM `#slider` ORDER BY `order`";
		$res = $app->db->query($sql);
		return $res;
	}

}


?>