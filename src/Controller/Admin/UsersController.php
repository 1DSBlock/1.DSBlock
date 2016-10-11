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
        $this->loadComponent('UserRelationship');

        $data = $this->request->data;
        // $this->UserRelationship->updateUserMedicalHistories($data);
        $this->UserRelationship->updateMedicalAssessment($data, $entity);
    }

    public function add()
    {
        $this->loadComponent('MedicalAssessment');
        $this->set($this->MedicalAssessment->loadDataToView());

        parent::add();
        $this->objectUtils->useTables($this, ['UserTypes', 'MedicalHistories']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $medicals = $this->MedicalHistories->find()->combine('id', 'description')->toArray();
        $this->set(compact('userTypes', 'medicals'));
        
    }

    protected function getObject($id)
    {
        $table = $this->name;
        $entity = $this->$table->get($id, ['contain' => ['UserMedicalHistories', 'MedicalAssessments']]);
        debug($entity);
        return $entity;        
    }

    public function edit($id = null, $return = false)
    {

        $this->loadComponent('MedicalAssessment');
        $this->set($this->MedicalAssessment->loadDataToView());
        
        parent::edit($id);
        $this->objectUtils->useTables($this, ['UserTypes', 'MedicalHistories']);
        $userTypes = $this->UserTypes->find()->combine('id', 'title')->toArray();
        $medicals = $this->MedicalHistories->find()->combine('id', 'description')->toArray();
        // $assessments = $this->MedicalAssessments->find()->combine('id', 'current_complaints', 'current_medication', 'previous_surgical_operations', 'previous_aesthtic_treatments', 'othera_aesthtic_treatments', 'inological_history_male', 'family_history', 'regular_exercise', 'past_medical_history', 'locomotor_system_problem', 'gastro_intestinal_problem', 'know_allergies', 'sleep', 'urinological_history_female', 'emotional_well_being')->toArray();
        $this->set(compact('userTypes', 'medicals'));
    }

    public function import()
    {

    }

    public function searchDetail()
    {
        $table = $this->name;

        $keyword = $this->request->data('keyword');
        if(!empty($keyword)) {
            $this->paginate += [
                'conditions' => [
                    'OR' => []
                ]
            ];
            foreach($this->keywords as $element) {
                $split = explode('.', $element);

                $key = $element . ' LIKE';
                if(count($split) < 2) {
                    $key = $table . '.' . $element . ' LIKE';
                }

                $this->paginate['conditions']['OR'][$key] = '%' . $keyword . '%';
            }
        }
        $this->set('rows', $this->paginate($this->$table));
    }
}
