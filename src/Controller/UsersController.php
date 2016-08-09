<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Lib\ObjectUtils;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('login');
    }

    public function login()
    {
        if ($this->isPost()) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Email or password is incorrect'), [
                'key' => 'auth'
            ]);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}

