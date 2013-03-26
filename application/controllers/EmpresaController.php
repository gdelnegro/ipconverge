<?php

class EmpresaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction(){
        $model = new Application_Model_Empresa();
        $dados = $model->select();
        $this->view->assign("dados", $dados);
    }
    
    public function showAction(){
        $model = new Application_Model_Empresa();
        $empresa = $model->find($this->_getParam('id'));
        $this->view->assign("empresa", $empresa);
    }
    
    public function newAction(){}
    
    public function createAction(){
        $model = new Application_Model_Empresa();
        $model->insert($this->_getAllParams());
        $this->redirect('empresa/index');
    }
    
    public function editAction(){
        $model = new Application_Model_Empresa();
        $empresa = $model->find($this->_getParam('id'));
        $this->view->assign("empresa", $empresa);
    }
    
    public function updateAction(){
      $model = new Application_Model_Empresa();
      $model->update($this->_getAllParams());
      $this->_redirect('empresa/index');
   }
   
   public function destroyAction(){
      $model = new Application_Model_Empresa();
      $model->delete($this->_getParam('id'));
      $this->_redirect('empresa/index');
   }

}

