<?php
namespace App\Lib;

use Cake\I18n\Time;

class Utils {
    private static $instance = null;

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __construct() {

    }

    public function getEntity($class, array $data = []) {
        $class = 'App\\Model\\Entity\\' . $class;
        return new $class($data);
    }

    public function formatDate($date, $format = 'yyyy-MM-dd')
    {
        $now = Time::now();

        list($d, $m, $y) = explode('/', $date);
        $now->setDate($y, $m, $d);
        return $now->i18nFormat($format);
    }
}
