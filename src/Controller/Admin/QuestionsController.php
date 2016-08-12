<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class QuestionsController extends AppAdminController
{
    protected $keyword = 'name';

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

}
