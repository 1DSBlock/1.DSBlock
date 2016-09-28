<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MedicalAssessmentsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        // $this->belongTo('Users');
        
    }

    const initFamilyHistory = [
    	'anemia' => ['name' => 'Anemia (Thiếu máu, thiếu chất)'],
    	'asthma' => ['name' => 'Asthma (Hen suyễn)'],
    	'epylepsy' => ['name' => 'Epylepsy (Bệnh động kinh)'],
    	'hepatitis' => ['name' => 'Hepatitis (Viêm gan siêu vi)' , 'extension' => ['type' => 'Type (Loại)']],
    	'osteoporosis' => ['name' => 'Osteoporosis (Loãng xương)'],
    	'alcoholism' => ['name' => 'Alcoholism (Nghiện rượu)'],
    	'parkinsons_disease'  => ['name' => 'Parkinsons disease (Bệnh Parkinson)'],
    	'glaucoma' => ['name' => 'Glaucoma (Bệnh mắt)'],
    	'hypertension' => ['name' => 'Hypertension (Cao huyết áp)'],
    	'stroke' => ['name' => 'Stroke (Đột quỵ)' , 'extension' => ['when' => 'When (Lúc nào)']],
    	'alzheimers_disease' => ['name' => 'Alzheimers diease (Bệnh đãng trí)'],
    	'cancer' => ['name' => 'Cancer (Ung thư)'],
    	'hay_fever' => ['name' => 'Hay fever (Dị ứng thời tiết)'],
    	'lipid_disorder' => ['name' => 'Lipid disorder (Rối loạn chuyển hóa)'],
    	'thyroid_diseases' => ['name' => 'Thyroid diseases (Bệnh tuyến giáp)'],
    	'arthritis' => ['name' => 'Arthritis (Viêm khớp)'],
    	'diabetes' => ['name' => 'Diabetes (Tiểu đường)' , 'extension' => ['type' => 'Type (Loại)']],
    	'heart_diseases' => ['name' => 'Heart diseases (Bệnh tim)'],
    	'mental_diseases' => ['name' => 'Mental diseases (Bệnh tâm thần)'],	
    	'others' => ['name' => 'Others (Bệnh khác)']
    	];

    
}
