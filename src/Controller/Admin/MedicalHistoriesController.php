<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class MedicalHistoriesController extends AppAdminController
{
    protected $keyword = 'description';

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];
}
