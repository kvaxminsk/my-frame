<?php

class UserController extends Controller {
    public function index()
    {
        $model = new User();

        include ROOT .'app/views/user/index.php';
    }
}

/*
<?php
class UserController extends Controller{
    function actionIndex(){
        $model = new User();
        include ROOT.'application/views/user/index.php';
    }
}*/