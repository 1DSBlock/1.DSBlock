<?php
namespace App\Controller\Component;
use App\Model\Table\MedicalAssessmentsTable;

class UserRelationshipComponent extends AppComponent
{
    /**
    * update user medical histories
    */
    public function updateUserMedicalHistories(array $data)
    {
        /*$this->objectUtils->useTables($this, ['UserMedicalHistories']);

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
        $this->UserMedicalHistories->saveMany($medicals);*/
    }

    public function updateMedicalAssessment(array $data, $entity)
    {
        $this->objectUtils->useTables($this, ['MedicalAssessments']);

        // if ($this->isPut()) {
        //     $this->MedicalAssessments->deleteAll(['user_id' => $entity->id]);
        // }
        $family_history = [];
        $assessments = [];
        $familyHistories = MedicalAssessmentsTable::initFamilyHistory;

        $saveData = [];
        foreach($data['familyHisory'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($familyHistories['extension']['type'])) {
           $k = $familyHistories['extension']['type'];
           // $saveData[$key][$k] = ; <= input data
          } elseif(!empty($familyHistories['extension']['when'])) {
           $k = $familyHistories['extension']['when'];
           // $saveData[$key][$k] = ; <= input data
          }
         
        }
    
        $assessments = $this->utils->getEntity('UserMedicalHistory', [
            'user_id' => $entity->id,
            'family_history' => $familyHistories
        ]);
        
        $this->MedicalAssessments->save($assessments);
        $saveData = json_encode($saveData);
        /*$medicalData = $data['MedicalAssessment'];*/
    }

    public function loadDataToView()
    {
        $this->objectUtils->useTables($this, ['MedicalAssessments']);
        
        return [
            'familyHistory' => MedicalAssessments::initFamilyHistory
            ];
    }
}
