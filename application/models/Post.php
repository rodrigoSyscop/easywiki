<?php

class Application_Model_Post
{
    protected $_table;
    
    public function __construct() {
        $this->_table = new Application_Model_DbTable_Post();
    }
    
    public function getPost($id) {
        return $this->_table->find($id);
    }

    public function getAll() {
        $select = $this->_table->select();
        return $this->_table->fetchAll($select);
    }
    
    public function insert($data) {
        return $this->_table->insert($data);
    }
}

