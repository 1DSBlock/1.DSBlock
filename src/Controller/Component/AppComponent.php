<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

use App\Lib\Utils;
use App\Lib\ObjectUtils;

class AppComponent extends Component
{
    protected $utils;
    protected $objectUtils;

    public function initialize(array $config)
    {
        $this->utils = Utils::getInstance();
        $this->objectUtils = ObjectUtils::getInstance();
    }
}
