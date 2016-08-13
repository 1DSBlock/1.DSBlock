<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AppAdminController
{
    protected $keywords = ['fullname', 'email', 'UserTypes.title'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'contain' => ['UserTypes']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    protected function formatInputData()
    {
        $data = parent::formatInputData();

        if ($this->isPut()) {
            if(empty($data['password'])) {
                unset($data['password']);
                unset($data['confirm-password']);
            }
        }

        if(!empty($data['birthday'])) {
            $data['birthday'] = $this->utils->formatDate($data['birthday']);
        }
        return $data;
    }

    public function add()
    {
        parent::add();
        $this->objectUtils->useTables($this, ['UserTypes']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $this->set(compact('userTypes'));
    }

    public function edit($id = null, $return = false)
    {
        parent::edit($id);
        $this->objectUtils->useTables($this, ['UserTypes']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $this->set(compact('userTypes'));
    }
}
