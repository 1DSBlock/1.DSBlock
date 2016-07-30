<?php
namespace App\Controller\Admin;

use Cake\Utility\Inflector;

trait CrudTrait {
    public function lists() {
        $table = $this->name;
        $this->set('rows', $this->paginate($this->$table));
    }
    
    public function add() {
        $table = $this->name;
        $entityClass = Inflector::singularize($this->$table->alias());
        
        $entity = $this->utils->getEntity($entityClass);
        if($this->isPost()) {
            $entity = $this->$table->newEntity($this->request->data);
            if(empty($entity->errors())) {
                $result = $this->$table->save($entity);
                
                $params = $this->request->params;
                $controller = $params['controller'];
                $prefix = $params['prefix'];
                return $this->redirect("$prefix/$controller/lists");
            }
        }
        
        $this->set(compact('entity'));
    }
    
    public function edit($id = null) {
        $id = (int)$id;
        $params = $this->request->params;
        $controller = $params['controller'];
        $prefix = $params['prefix'];
        if(!$id) {
            $this->Flash->error("Not exists this id: " . $id);
            return $this->redirect("$prefix/$controller/lists");
        } else {
            $table = $this->name;
            $entity = $this->$table->get($id);
            
            if($this->isPost()) {
                $entity = $this->$table->newEntity($this->request->data);
                if(empty($entity->errors())) {
                    $result = $this->$table->save($entity);
            
                    $params = $this->request->params;
                    $controller = $params['controller'];
                    $prefix = $params['prefix'];
                    $this->redirect("$prefix/$controller/lists");
                }
            }
            $this->set(compact('entity'));
        }
    }
    
    public function delete($id = null)
    {
        $params = $this->request->params;
        $controller = $params['controller'];
        $prefix = $params['prefix'];
        
        $id = (int)$id;
        if(!$id) {
            $this->Flash->error("Not exists this id: " . $id);
        } else {
            $table = $this->name;
            $entity = $this->$table->get($id);
            $this->$table->delete($entity);
            $this->Flash->success("Deleted successful this id: " . $id);
        }
        $this->redirect("$prefix/$controller/lists");
    }
}