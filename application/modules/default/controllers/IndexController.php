<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        $this->view->message = 'Primera aplicacion';
    }


}

