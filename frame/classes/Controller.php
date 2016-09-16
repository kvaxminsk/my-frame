<?php

class Controller extends Singleton {

    public function __call($methodName, $arguments = array())
    {
        if(is_callable(array($this, $methodName))) {
            return call_user_func_array(array($this, $methodName), $arguments);
        }
        else {
            throw new Exception('In controller ' . get_called_class() . 'method' . $methodName . ' not found!');
        }
    }
}


//class Controller extends Singleton{
//    function __call( $methodName,$args=array() ){
//        if( is_callable( array($this,$methodName) ) )
//            return call_user_func_array(array($this,$methodName),$args);
//        else
//            throw new Except('In controller '.get_called_class().' method '.$methodName.' not found!');
//    }
//}