<?php
// src/Model/Table/UserTreatmentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserTreatmentsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->belongsTo('Users');
        $this->belongsTo('Owners', [
            'className' => 'SystemUsers',
            'foreignKey' => 'owner_id',
        ]);

        $this->addBehavior('Proffer.Proffer', [
            'treatment_content' => [
                'root' => WWW_ROOT . 'upload',
                'dir' => 'dir_treatment_content',
                'pathClass' => '\App\Lib\Proffer\TreatmentPath'
            ],
            'treatment_result' => [
                'root' => WWW_ROOT . 'upload',
                'dir' => 'dir_treatment_result',
                'pathClass' => '\App\Lib\Proffer\TreatmentPath'
            ]
        ]);
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
        $validator
        ->requirePresence('contract_number')
        ->notEmpty('contract_number', 'Please fill this field')
        ->add('contract_number', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Contract number need to be at least 5 characters long',
            ]
        ]);

        $validator
        ->requirePresence('contract_sign_date')
        ->notEmpty('contract_sign_date', 'Please fill this field');

        $validator
        ->requirePresence('contract_price')
        ->notEmpty('contract_price', 'Please fill this field');

        $validator
        ->requirePresence('user_id')
        ->notEmpty('user_id', 'Please fill this field');

        $validator
        ->requirePresence('treatment_date')
        ->notEmpty('user_id', 'Please fill this field');

        $validator
        ->requirePresence('treatment_content')
        ->notEmpty('user_id', 'Please fill this field');

        $validator->provider('proffer', 'Proffer\Model\Validation\ProfferRules');
        $validator
        ->requirePresence('treatment_content', 'create')
        ->allowEmpty('treatment_content', 'update')
        ->add('treatment_content', [
            'validExtension' => [
                'rule' => ['extension',['pdf', 'doc', 'docx']], // default  ['gif', 'jpeg', 'png', 'jpg']
                'message' => __('These files extension are allowed: .pdf, .doc/docx')
            ]])
        ->add('treatment_content', [
            'validSize' => [
                'rule' => ['fileSize', '<=', '5MB'],
            'message' => __('Cover file must be less than 5MB')
            ]]);

        $validator
        ->requirePresence('treatment_result', 'create')
        ->allowEmpty('treatment_result', 'update')
        ->add('treatment_result', [
            'validExtension' => [
                'rule' => ['extension',['pdf', 'doc', 'docx']], // default  ['gif', 'jpeg', 'png', 'jpg']
                'message' => __('These files extension are allowed: .pdf, .doc/docx')
            ]])
        ->add('treatment_result', [
            'validSize' => [
                'rule' => ['fileSize', '<=', '5MB'],
            'message' => __('Cover file must be less than 5MB')
            ]]);
        return $validator;
    }
}
