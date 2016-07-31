<?php
namespace App\Controller;

use Cake\Event\Event;

class ArticlesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('*');
    }

    public function aboutus()
    {
        $aboutUs = $this->Articles->getAboutUs();
        $this->set(compact('aboutUs'));
    }

    public function introductions()
    {
        $introductions = $this->Articles->getIntroductions();debug($introductions);
        $this->set(compact('introductions'));
    }
    
    public function qanda() {
        $questions = $this->Articles->getQA();
        $this->set(compact('questions'));
    }
}