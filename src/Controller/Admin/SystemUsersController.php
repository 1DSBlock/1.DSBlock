<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class SystemUsersController extends AppAdminController
{
    protected $keywords = ['fullname'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'contain' => ['Roles']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('login');
    }

    protected function formatInputData()
    {
        $data = parent::formatInputData();

        if ($this->isPut()) {
            if(empty($data['password'])) {
                unset($data['password']);
                unset($data['confirm-password']);
            }
        }

        return $data;
    }

    public function add()
    {
        parent::add();
        $this->objectUtils->useTables($this, ['Roles']);
        $roles = $this->Roles->find()->combine('id', 'role')->toArray();
        $this->set(compact('roles'));
    }

    public function edit($id = null, $return = false)
    {
        parent::edit($id);
        $this->objectUtils->useTables($this, ['Roles']);
        $roles = $this->Roles->find()->combine('id', 'role')->toArray();
        $this->set(compact('roles'));
    }

    public function login()
    {
        $this->viewBuilder()->layout(false);

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard()
    {}
}
