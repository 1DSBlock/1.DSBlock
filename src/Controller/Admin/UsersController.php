<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AppAdminController
{
    protected $keywords = ['fullname', 'email', 'UserTypes.title'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'contain' => ['UserTypes', 'UserMedicalHistories.MedicalHistories']
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

    protected function saveRelationshipData($entity)
    {
        $data = $this->request->data;
        $this->objectUtils->useTables($this, ['UserMedicalHistories']);

        if ($this->isPut()) {
            $this->UserMedicalHistories->deleteAll(['user_id' => $entity->id]);
        }

        $medicals = [];
        foreach($data['medical_history_id'] as $medical_history_id) {
            $medicals[] = $this->utils->getEntity('UserMedicalHistory', [
                'user_id' => $entity->id,
                'medical_history_id' => $medical_history_id
            ]);
        }
        $this->UserMedicalHistories->saveMany($medicals);
    }

    public function add()
    {
        parent::add();
        $this->objectUtils->useTables($this, ['UserTypes', 'MedicalHistories']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $medicals = $this->MedicalHistories->find()->combine('id', 'description')->toArray();
        $this->set(compact('userTypes', 'medicals'));
    }

    protected function getObject($id)
    {
        $table = $this->name;
        $entity = $this->$table->get($id, ['contain' => ['UserMedicalHistories']]);
        return $entity;
    }

    public function edit($id = null, $return = false)
    {
        parent::edit($id);
        $this->objectUtils->useTables($this, ['UserTypes', 'MedicalHistories']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $medicals = $this->MedicalHistories->find()->combine('id', 'description')->toArray();
        $this->set(compact('userTypes', 'medicals'));
    }

}
