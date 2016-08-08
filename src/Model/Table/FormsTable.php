<?php
// src/Model/Table/FormsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FormsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->addBehavior('Proffer.Proffer', [
            'filename' => [
                'root' => WWW_ROOT . 'upload',
                'dir' => 'dir',
                'pathClass' => '\App\Lib\Proffer\FormPath'
            ]
        ]);
    }
    
    public function validationDefault(Validator $validator) { 
        $validator = parent::validationDefault($validator);
        
        $validator
        ->requirePresence('description')
        ->notEmpty('description', 'Please fill this field')
        ->add('description', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Description need to be at least 5 characters long',
            ]
        ]);
        $validator->provider('proffer', 'Proffer\Model\Validation\ProfferRules');
        $validator
        ->requirePresence('filename', 'create')
        ->allowEmpty('filename', 'update')
        ->add('filename', [
            'validExtension' => [
                'rule' => ['extension',['pdf', 'doc', 'docx']], // default  ['gif', 'jpeg', 'png', 'jpg']
                'message' => __('These files extension are allowed: .pdf, .doc/docx')
            ]])
        ->add('filename', [
            'validSize' => [
                'rule' => ['fileSize', '<=', '5MB'], 
            'message' => __('Cover filename must be less than 5MB')
            ]]);
        return $validator;
    }
    
    public function getForms() {
        return $this->find()->all();
    }
}