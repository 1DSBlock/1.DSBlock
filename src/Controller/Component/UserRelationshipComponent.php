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
        $pastMedicalHistories = $this->savePastMedicalHistory($data);
        $urinologicalHistoryMales = $this->saveUrinologicalHistoryMale($data);
        $emotionalWellBeings = $this->saveEmotionalWellBeing($data);
        $regularExercises = $this->saveRegularExercise($data);
        $locomotorSystemProblems = $this->saveLocomotorSystemProblem($data);
        $gastroIntestinalProblems = $this->saveGastroIntestinalProblem($data);
        $knowAllergies = $this->saveKnowAllergie($data);
        $sleeps = $this->saveSleep($data);
        $urinologicalHistoryFemales = $this->saveUrinologicalHistoryFemale($data);

        
        $assessments = [];    
        $assessments = $this->utils->getEntity('UserMedicalHistory', [
            'user_id' => $entity->id,
            'current_complaints' => $data['current_complaints'],
            'current_medication' => $data['current_medication'],
            'previous_surgical_operations' => $data['previous_surgical_operations'],
            'previous_aesthtic_treatments' => $data['previous_aesthtic_treatments'],
            'othera_aesthtic_treatments' => $data['othera_aesthtic_treatments'],
            'past_medical_history' => $pastMedicalHistories,
            'inological_history_male' => $urinologicalHistoryMales,
            'family_history' => $familyHistories,
            'regular_exercise' => $regularExercises,
            'locomotor_system_problem' => $locomotorSystemProblems,
            'gastro_intestinal_problem' => $gastroIntestinalProblems,
            'know_allergies' => $knowAllergies,
            'sleep' => $sleeps,
            'urinological_history_female' => $urinologicalHistoryFemales,
            'emotional_well_being' => $emotionalWellBeings
        ]);        
        $this->MedicalAssessments->save($assessments);        
    }

    public function saveFamilyHistory(array $data)
    {
        $familyHistories = MedicalAssessmentsTable::initFamilyHistory;

        $saveData = [];
        foreach($data['familyHistory'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($familyHistories['extension']['type'])) {
           $k = $familyHistories['extension']['type'];
           $familyHistories[$key][$k] = $data[$familyHistory[$key]['type']]; 
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
        $pastMedicalHistories = MedicalAssessmentsTable::initPastMedicalHistory;

        $saveData = [];
        foreach($data['pastMedicalHistory'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($pastMedicalHistories['extension']['type'])) {
           $k = $pastMedicalHistories['extension']['type'];
          } elseif(!empty($pastMedicalHistories['extension']['when'])) {
           $k = $pastMedicalHistories['extension']['when'];
           // $pastMedicalHistories[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveUrinologicalHistoryMale(array $data)
    {
        $urinologicalHistoryMales = MedicalAssessmentsTable::initUrinologicalHistoryMale;

        $saveData = [];
        foreach($data['urinologicalHistoryMale'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($urinologicalHistoryMales['extension']['type'])) {
           $k = $urinologicalHistoryMales['extension']['type'];
          } elseif(!empty($urinologicalHistoryMales['extension']['when'])) {
           $k = $urinologicalHistoryMales['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveUrinologicalHistoryFemale(array $data)
    {
        $urinologicalHistoryFemales = MedicalAssessmentsTable::initUrinologicalHistoryFemale;

        $saveData = [];
        foreach($data['urinologicalHistoryFemale'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($urinologicalHistoryFemales['extension']['type'])) {
           $k = $urinologicalHistoryFemales['extension']['type'];
          } elseif(!empty($urinologicalHistoryFemales['extension']['when'])) {
           $k = $urinologicalHistoryFemales['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveSleep(array $data)
    {
        $sleeps = MedicalAssessmentsTable::initSleep;

        $saveData = [];
        foreach($data['sleep'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($sleeps['extension']['type'])) {
           $k = $sleeps['extension']['type'];
          } elseif(!empty($sleeps['extension']['when'])) {
           $k = $sleeps['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveKnowAllergie(array $data)
    {
        $knowAllergies = MedicalAssessmentsTable::initKnowAllergies;

        $saveData = [];
        foreach($data['knowAllergie'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($knowAllergies['extension']['type'])) {
           $k = $knowAllergies['extension']['type'];
          } elseif(!empty($knowAllergies['extension']['when'])) {
           $k = $knowAllergies['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveGastroIntestinalProblem(array $data)
    {
        $gastroIntestinalProblems = MedicalAssessmentsTable::initGastroIntestinalProblems;

        $saveData = [];
        foreach($data['gastroIntestinalProblem'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($gastroIntestinalProblems['extension']['type'])) {
           $k = $gastroIntestinalProblems['extension']['type'];
          } elseif(!empty($gastroIntestinalProblems['extension']['when'])) {
           $k = $gastroIntestinalProblems['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveLocomotorSystemProblem(array $data)
    {
        $locomotorSystemProblems = MedicalAssessmentsTable::initLocomotorSystemProblems;

        $saveData = [];
        foreach($data['locomotorSystemProblem'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($locomotorSystemProblems['extension']['type'])) {
           $k = $locomotorSystemProblems['extension']['type'];
          } elseif(!empty($locomotorSystemProblems['extension']['when'])) {
           $k = $locomotorSystemProblems['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveRegularExercise(array $data)
    {
        $regularExercises = MedicalAssessmentsTable::initRegularExercise;

        $saveData = [];
        foreach($data['regularExercise'] as $key => $value) {

          $saveData[$key] = [
           'value' => !empty($value) ? 1: 0
          ];
          if(!empty($regularExercises['extension']['type'])) {
           $k = $regularExercises['extension']['type'];
          } elseif(!empty($regularExercises['extension']['when'])) {
           $k = $regularExercises['extension']['when'];
           // $urinologicalHistoryMales[$key][$k] = ; <= input data
          }
         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }

    public function saveEmotionalWellBeing(array $data)
    {
        $emotionalWellBeings = MedicalAssessmentsTable::initEmotionalWellBeing;

        $saveData = [];
        foreach($data['emotionalWellBeing'] as $key => $value) {

          $saveData[$key] = [
           'value' => $value
          ];         
        }
        $saveData = json_encode($saveData);
        return $saveData;
    }
}
