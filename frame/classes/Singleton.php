<?php

abstract class Singleton {
    private static $instance = array();


    public static function getInstance($className=false)
    {
       $className = ($className===false)?get_called_class():$className;
        if (class_exists($className)) {
            if (!isset(self::$instance[$className])) {
                self::$instance[$className] = new $className();
                return  self::$instance[$className];
            }
            else {
                return self::$instance[$className];
            }
        }
else {
	return 0;
}

    }

    public static function  gI($className=false) {
        return self::getInstance($className);
    }

    final private function __clone(){}
    private function __construct(){}
}

