<?php

class Application_Model_Empresa
{
    
    /**
     * 
     * @param type $where
     * @param type $order
     * @param type $limit
     * @return type
     */
    public function select($where = null, $order = null, $limit = null){
        $dao = new Application_Model_DbTable_Empresa();
        $select = $dao->select()->from($dao)->order($order)->limit($limit);
        if (!is_null($where)){
            $select->where($where);
        }
        return $dao->fetchAll($select)->toArray();
    }
    /**
     * 
     * @param type $id
     * @return type
     */
    public function find($id){
        $dao = new Application_Model_DbTable_Empresa();
        $arr = $dao->find($id)->toArray();
        return $arr[0];
    }
    
    /**
     * 
     * @param array $request
     * @return type
     */
    public function insert(array $request){
        $dao = new Application_Model_DbTable_Empresa();
        $date = Zend_Date::now()->toString('yyyyMMddHHmmss');
        $dados = array(
            'cnpj' => $request['cnpj'],
            'nome' => $request['nome'],
            'responsavel' => $request['responsavel'],
            'email_responsavel' => $request['email_responsavel'],
            'tel_responsavel' => $request['tel_responsavel'],
            'dt_alteracao' => $date
        );
        return $dao->insert($dados);
    }
    
    /**
     * 
     * @param array $request
     */
    public function update(array $request){
        $dao = new Application_Model_DbTable_Empresa();
        $date = Zend_Date::now()->toString('yyyyMMddHHmmss');
        $dados = array(
            'cnpj' => $request['cnpj'],
            'nome' => $request['nome'],
            'responsavel' => $request['responsavel'],
            'email_responsavel' => $request['email_responsavel'],
            'tel_responsavel' => $request['tel_responsavel'],
            'dt_alteracao' => $date
        );
        $where = $dao->getAdapter()->quoteInto("id = ?", $request['id']);
        $dao->update($dados, $where);
    }
    
    /**
     * 
     * @param type $id
     */
    public function delete($id){
        $dao = new Application_Model_DbTable_Empresa();
        $where = $dao->getAdapter()->quoteInto("id = ?", $id);
        $dao->delete($where);
    }

}
?>