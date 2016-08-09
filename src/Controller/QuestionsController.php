<?php
namespace App\Controller;

use Cake\Event\Event;

class QuestionsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    public function index()
    {
        $questions = $this->Questions->find()->all();
        $this->set(compact('questions'));
    }
}
