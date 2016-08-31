<?php
namespace App\Controller\Component;

class UserRelationshipComponent extends AppComponent
{
    /**
    * update user medical histories
    */
    public function updateUserMedicalHistories(array $data)
    {
        $this->objectUtils->useTables($this, ['UserMedicalHistories']);

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
        $this->UserMedicalHistories->saveMany($medicals);
    }

    public function updateMedicalAssessment($data)
    {
        $medicalData = $data['MedicalAssessment'];
    }
}
