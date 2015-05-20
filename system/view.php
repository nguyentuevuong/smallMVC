<?php

class View {

	private $pageVars = array();
	private $folder, $template;
	public function __construct($folder, $template)
	{
		$this->template = APP_DIR .'views/'.str_replace('controller', '', strtolower($folder)).'/'. $template .'.php';
	}

	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		extract($this->pageVars);

		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
    
}

?>