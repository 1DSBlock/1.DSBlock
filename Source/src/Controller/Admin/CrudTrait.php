<?php
namespace App\Controller\Admin;

trait CrudTrait {
    
    public function lists() {
        $table = $this->name;
        $this->set('rows', $this->paginate($this->$table));
    }
    
    public function add() {
    
    }
    
    public function edit($id = null) {
    
    }
    
    public function delete() {
    
    }
}