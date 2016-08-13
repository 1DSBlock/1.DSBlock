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
        $now = Time::parse($date);
        return $now->i18nFormat($format);
    }
}
