<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class UserTreatment extends Entity
{
    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _getContractSignDateFull()
    {
        if(!empty($this->_properties['contract_sign_date'])) {
            return $this->_properties['contract_sign_date']->format('d/m/Y');
        }
        return '';
    }

    protected function _getTreatmentDateFull()
    {
        if(!empty($this->_properties['treatment_date'])) {
            return $this->_properties['treatment_date']->format('d/m/Y');
        }
        return '';
    }
}
