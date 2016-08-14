<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UserTreatmentsController extends AppAdminController
{
    protected $keywords = ['contract_number'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'contain' => ['Users', 'Owners']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    protected function formatInputData()
    {
        $data = parent::formatInputData();

        if(!empty($data['user_id'])) {
            $data['user_id'] = (int) $data['user_id'];
        }

        if(!empty($data['contract_price'])) {
            $data['contract_price'] = (float) $data['contract_price'];
        }

        if(!empty($data['contract_sign_date'])) {
            $data['contract_sign_date'] = $this->utils->formatDate($data['contract_sign_date']);
        }

        if(!empty($data['treatment_date'])) {
            $data['treatment_date'] = $this->utils->formatDate($data['treatment_date']);
        }

        return $data;
    }

    public function add()
    {
        parent::add();
        $this->objectUtils->useTables($this, ['Products', 'Users', 'SystemUsers']);
        $products = $this->Products->find()->combine('id', 'name')->toArray();
        $users = $this->Users->find()->combine('id', 'fullname')->toArray();
        $sallers = $this->SystemUsers->getSallerList();
        $this->set(compact('products', 'users', 'sallers'));
    }

    public function edit($id = null, $return = false)
    {
        parent::edit($id);
        $this->objectUtils->useTables($this, ['Products', 'Users', 'SystemUsers']);
        $products = $this->Products->find()->combine('id', 'name')->toArray();
        $users = $this->Users->find()->combine('id', 'fullname')->toArray();
        $sallers = $this->SystemUsers->getSallerList();
        $this->set(compact('products', 'users', 'sallers'));
    }
}
