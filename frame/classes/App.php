<?php

//class App extends Singleton{
//    public $config = null;
//    function start(){
//        $this->config = new Model(include APP.'config.php');
//        Router::gi()->parse();
//        $controller = app::gi(Router::gi()->controller.'Controller');
//        $controller->__call('action'.Router::gi()->action);
//    }
//}
class App extends Singleton
{
    public $config = null;
    public function start()
    {

        $this->config = new Model(include CONFIG.'config.php');
        Router::gi()->parse();
        $controller = app::gi(Router::gi()->controller . 'Controller');
        $controller->__call( Router::gi()->action);
    }
}
//<?php
//class App extends Singleton{
//    function start(){
//        Router::gi()->parse();
//        $controller = app::gi(Router::gi()->controller.'Controller');
//        $controller->__call('action'.Router::gi()->action);
//    }
//}

//class App extends Singleton{
//    function start(){
//        Router::gi()->parse();
//        $controller = app::gi(Router::gi()->controller.'Controller');
//        $controller->__call(Router::gi()->action);
//    }
//}