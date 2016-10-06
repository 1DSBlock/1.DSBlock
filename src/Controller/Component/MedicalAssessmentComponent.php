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
            'knowAllergie' => MedicalAssessmentsTable::initKnowAllergies,
            'gastroIntestinalProblem' => MedicalAssessmentsTable::initGastroIntestinalProblems,
            'locomotorSystemProblem' => MedicalAssessmentsTable::initLocomotorSystemProblems,
            'regularExercise' => MedicalAssessmentsTable::initRegularExercise,
            'emotionalWellBeing' => MedicalAssessmentsTable::initEmotionalWellBeing            
            ];
    }
}
