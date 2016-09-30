<?php
namespace App\Controller\Component;
use App\Model\Table\MedicalAssessmentsTable;

class MedicalAssessmentComponent extends AppComponent
{
    public function loadDataToView()
    {
        $this->objectUtils->useTables($this, ['MedicalAssessments']);
        
        return [
            'familyHistory' => MedicalAssessmentsTable::initFamilyHistory,
            'pastMedicalHistory' => MedicalAssessmentsTable::initPastMedicalHistory,
            'urinologicalHistoryMale' => MedicalAssessmentsTable::initUrinologicalHistoryMale,
            'urinologicalHistoryFemale' => MedicalAssessmentsTable::initUrinologicalHistoryFemale,
            'sleep' => MedicalAssessmentsTable::initSleep,
            'knowAllergies' => MedicalAssessmentsTable::initKnowAllergies,
            'gastroIntestinalProblems' => MedicalAssessmentsTable::initGastroIntestinalProblems,
            'locomotorSystemProblems' => MedicalAssessmentsTable::initLocomotorSystemProblems,
            'regularExercise' => MedicalAssessmentsTable::initRegularExercise,
            'emotionalWellBeing' => MedicalAssessmentsTable::initEmotionalWellBeing            
            ];
    }
}
