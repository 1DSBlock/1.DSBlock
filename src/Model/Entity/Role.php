<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Role extends Entity
{
    const ROLE_ADMIN = 1;

    const ROLE_CUSTOM_SERVICE = 2;

    const ROLE_SALLER = 3;

    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
