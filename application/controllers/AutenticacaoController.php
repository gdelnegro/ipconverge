<?php

class AutenticacaoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function loginAction(){
        $this->helper->viewRenderer->setNoRender();
    }


}

