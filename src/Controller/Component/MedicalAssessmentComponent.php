<?php
namespace App\Controller\Component;
use App\Model\Table\MedicalAssessmentsTable;

class MedicalAssessmentComponent extends AppComponent
{
    public function loadDataToView()
    {
        $this->objectUtils->useTables($this, ['MedicalAssessments']);
        
        return [
            'familyHistory' => MedicalAssessmentsTable::initFamilyHistory
            ];
    }
}
