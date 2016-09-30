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
        $familyHistories = $this->saveFamilyHistory($data);
        $pastMedicalHistory = $this->savePastMedicalHistory($data);
        $assessments = [];    
        $assessments = $this->utils->getEntity('UserMedicalHistory', [
            'user_id' => $entity->id,
            'current_complaints' => $entity->$current_complaints,
            'current_medication' => $entity->$current_medication,
            'pastMedicalHistory' => $pastMedicalHistory,
            'family_history' => $familyHistories
        ]);        
        $this->MedicalAssessments->save($assessments);        
    }

    public function saveFamilyHistory(array $data)
    {
        $familyHistories = MedicalAssessmentsTable::initFamilyHistory;

        $saveData = [];
        foreach($data['familyHisory'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($familyHistories['extension']['type'])) {
           $k = $familyHistories['extension']['type'];
           $familyHistories[$key][$k] = $data['familyHistory[$key][extension][type]']; 
          } elseif(!empty($familyHistories['extension']['when'])) {
           $k = $familyHistories['extension']['when'];
           // $familyHistories[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function savePastMedicalHistory(array $data)
    {
        $pastMedicalHistory = MedicalAssessmentsTable::initPastMedicalHistory;

        $saveData = [];
        foreach($data['familyHisory'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($pastMedicalHistory['extension']['type'])) {
           $k = $pastMedicalHistory['extension']['type'];
           // $familyHistories[$key][$k] = ; <= input data
          } elseif(!empty($pastMedicalHistory['extension']['when'])) {
           $k = $pastMedicalHistory['extension']['when'];
           // $familyHistories[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }
}
