<?php
class UserController extends Controller{
    function index(){
        $model = new User();
        include ROOT.'app/views/user/index.php';
    }
}