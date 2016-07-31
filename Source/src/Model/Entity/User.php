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
}