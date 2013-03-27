<?php

class Application_Model_DbTable_Empresa extends Zend_Db_Table_Abstract
{

    protected $_name = 'empresa';
    protected $_primary = 'id';
    protected $_dependentTables = array('campanha','empresa','usuario','sms','financeiro');

    protected $_referenceMap = array(
        'Financeiro' => array(
            'columns' => 'empresa',
            'refTableClass' =>'Aplication_Model_DbTable_Empresa',
            'refColumns' => 'id'
            
        )
    );
}

