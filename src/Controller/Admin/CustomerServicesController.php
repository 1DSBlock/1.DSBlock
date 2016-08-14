<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class CustomerServicesController extends AppAdminController
{
    protected $keywords = ['topic'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];

    public function birthday()
    {

    }
}
