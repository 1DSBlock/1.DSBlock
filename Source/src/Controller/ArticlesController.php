<?php
namespace App\Controller;

class ArticlesController extends AppController
{

    public function aboutus()
    {
        $entity = $this->Articles->getAboutUs();
        $this->set(compact('entity'));
        exit();
    }

    public function introductions()
    {
        $introductions = $this->Articles->getIntroductions();debug($introductions);
        $this->set(compact('introductions'));
        exit;
    }
    
    public function qanda() {
        $questions = $this->Articles->getQA();
        $this->set(compact('questions'));
        exit;
    }
}