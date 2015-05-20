<?php

class MainController extends Controller {
	
	function index()
	{
		$model = $this->loadModel('Main');
		$view = $this->loadView("Index");
		
		$view->set('abc', $model->getSomething());
		
		$view->render();
	}
    
}

?>
