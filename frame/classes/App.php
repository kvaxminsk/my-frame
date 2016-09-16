<?php


//class App extends Singleton
//{
//    public function start()
//    {
////        die('fdasfds');
//        Router::gi()->parse();
//        $controller = App::gi(Router::gi()->controller . 'Controller');
////        var_dump(Router::gi()->controller . 'Controller');
////        die();
////        var_dump(Router::gi()->controller.'Controller');die();
////        $class_methods = get_class_methods(App::gi(Router::gi()->controller.'Controller'));
//        $controller->__call(Router::gi()->action);
//    }
//}

class App extends Singleton{
    function start(){
        Router::gi()->parse();
        $controller = app::gi(Router::gi()->controller.'Controller');
        $controller->__call('action'.Router::gi()->action);
    }
}
