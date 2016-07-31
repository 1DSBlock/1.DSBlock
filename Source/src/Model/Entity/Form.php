<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Form extends Entity
{
    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
    public function _getImageFullPath()
    {
        return 'uploads/forms/' . $this->_properties['dir'] . '/' . $this->_properties['filename'];
    }
}