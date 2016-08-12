<?php
namespace App\Controller;

use Cake\Event\Event;

class QuestionsController extends AppController
{
    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Questions.title' => 'asc'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    public function index()
    {
        $page = $this->request->query('page');
        if (empty($page)) {
            $page = 1;
        }

        $totalPage = PAGINATE_LIMIT;

        $questions = $this->paginate($this->Questions);
        $this->set(compact('questions', 'page', 'totalPage'));
    }
}
