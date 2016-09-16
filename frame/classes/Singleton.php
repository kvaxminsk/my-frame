<?php

//abstract class Singleton {
//    public static $instance = array();
//
//
//    public static function getInstance($className=false)
//    {
//       $className = ($className===false)?get_called_class():$className;
//        if (class_exists($className)) {
//            if (!isset(self::$instance[$className])) {
//                self::$instance[$className] = new $className();
//                return  self::$instance[$className];
//            }
//            else {
//                return self::$instance[$className];
//            }
//        }
//
//    }
//
//    public static function  gi($className=false) {
////        var_dump(self::getInstance());
//        return self::getInstance($className=false);
//    }
//
//    final private function __clone(){}
//    private function __construct(){}
//}

abstract class Singleton{
	private static $_aInstances = array();

	public static function getInstance( $className=false ) {
		$sClassName = ($className===false)?get_called_class():$className;
		if( class_exists($sClassName) ){
			if( !isset( self::$_aInstances[ $sClassName ] ) )
				self::$_aInstances[ $sClassName ] = new $sClassName();
			$oInstance = self::$_aInstances[ $sClassName ];
			return $oInstance;
		}else
			return 0;
	}
	public static function gi( $className=false ) {
		return self::getInstance($className);
	}
	final private function __clone(){}
	private function __construct(){}
}