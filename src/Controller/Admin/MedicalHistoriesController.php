<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class MedicalHistoriesController extends AppAdminController
{
    protected $keywords = ['description'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];
}
