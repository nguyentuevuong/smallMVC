<?php

class Controller {
	
	public function loadModel($name)
	{
		$name = $name.'model';
		require(APP_DIR .'models/'. strtolower($name) .'.php');
		
		$model = new $name;
		return $model;
	}
	
	public function loadView($name)
	{
		$view = new View(get_class($this),$name);
		return $view;
	}
	
	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'plugin.php');
	}
	
	public function loadHelper($name)
	{
		$helper = new $name.'helper';
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		return $helper;
	}
	
	public function redirect($loc)
	{
		global $config;
		
		header('Location: '. $config['base_url'] . $loc);
	}
    
}

?>