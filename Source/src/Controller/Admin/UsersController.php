<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AppAdminController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('login');
    }
    
    public function login() {
        $this->viewBuilder()->layout(false);
    }
}