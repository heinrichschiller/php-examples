<?php

class Index
{
	private $_view = null;

	public function __construct()
	{
		$this->_view = new View();
	}

    public function indexAction()
    {
		$model = new Model();
		$this->_view->setTemplate('index');
		return $this->_view->renderTemplate(array('model' => $model));
    }
}
