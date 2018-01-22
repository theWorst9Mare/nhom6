<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->disable();
	echo "hello index action";		
    }
	public function detailAction()
	
	{
			$this->view->disalbe();
			echo"hello I detail Action";
	}
}

