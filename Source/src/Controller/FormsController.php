<?php
namespace App\Controller;

use Cake\Event\Event;

class FormsController extends AppController
{
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('*');
    }

    public function index()
    {
        $this->objectUtils->useTables($this, ['Forms']);
        $forms = $this->Forms->getForms();
        $this->set(compact('forms'));
    }
}