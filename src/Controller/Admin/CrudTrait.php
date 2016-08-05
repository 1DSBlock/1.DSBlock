<?php
namespace App\Controller\Admin;

use Cake\Utility\Inflector;

trait CrudTrait {

    public function lists()
    {
        $table = $this->name;
        $this->set('rows', $this->paginate($this->$table));
    }

    protected function formatInputData()
    {
        $data = $this->request->data;
        
        if(!empty($data['title'])) {
            $data['alias'] = Inflector::slug(Inflector::dasherize($data['title']));
        }
        
        return $data;
    }

    protected function save($data = null)
    {
        if ($this->isPost() || $this->isPut()) {
            $table = $this->name;
            if ($this->isPost()) {
                $entity = $this->$table->newEntity($this->formatInputData());
            } else {
                $entity = $this->$table->patchEntity($data, $this->formatInputData());
            }
            if (empty($entity->errors())) {
                $result = $this->$table->save($entity);
                
                $params = $this->request->params;
                $controller = $params['controller'];
                $prefix = $params['prefix'];
                return $this->redirect("$prefix/$controller/lists");
            } else {
                $this->set(compact('entity'));
            }
        }
        return false;
    }

    public function add()
    {
        $table = $this->name;
        $entityClass = Inflector::singularize($this->$table->alias());
        
        $entity = $this->utils->getEntity($entityClass);
        $this->set(compact('entity'));
        $this->save();
    }

    protected function getObject($id)
    {
        $table = $this->name;
        $entity = $this->$table->get($id);
        return $entity;
    }

    public function edit($id = null)
    {
        $id = (int) $id;
        $params = $this->request->params;
        $controller = $params['controller'];
        $prefix = $params['prefix'];
        if (! $id) {
            $this->Flash->error("Not exists this id: " . $id);
            return $this->redirect("$prefix/$controller/lists");
        } else {
            $entity = $this->getObject($id);
            
            $this->set(compact('entity'));
            $this->save($entity);
        }
        
        return $entity;
    }

    public function delete($id = null)
    {
        $params = $this->request->params;
        $controller = $params['controller'];
        $prefix = $params['prefix'];
        
        $id = (int) $id;
        if (! $id) {
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