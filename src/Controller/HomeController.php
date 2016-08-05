<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Lib\ObjectUtils;

class HomeController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }
    
    public function index()
    {
        $this->objectUtils->useTables($this, ['Pages']);
        $pages = $this->Pages->getAllPages();
        $this->set(compact('pages'));
    }
}