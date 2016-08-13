<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\WeakPasswordHasher;

class User extends Entity
{
    const STATUS_ACTIVE = 1;

    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($password)
    {
        return (new WeakPasswordHasher(['hashType' => 'sha256']))->hash($password);
    }

    protected function _getBirthdayFull()
    {
        if(!empty($this->_properties['birthday'])) {
            return $this->_properties['birthday']->format('d/m/Y');
        }
        return '';
    }

    protected function _getCreatedFull()
    {
        if(!empty($this->_properties['created'])) {
            return $this->_properties['created']->format('d/m/Y');
        }
        return '';
    }
}
