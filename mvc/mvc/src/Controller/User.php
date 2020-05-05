<?php

class User
{
    private $_view  = null;

    public function __construct()
    {
        $this->_view = new View();
    }

    public function indexAction()
    {
        $userData = new UserModel();
        $this->_view->setTemplate('user');
        return $this->_view->renderTemplate(array('user' => $userData));
    }
}
