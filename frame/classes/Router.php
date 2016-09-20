<?php

class Router extends Singleton
{
    public $action = 'index';
    public $controller = false;
    public $id;
    private $reg_paths = array(
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)/([0-9]+)' => 'controller/action/id',
        '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)' => 'controller/action',
        '([a-z0-9+_\-]+)' => 'controller',
    );


    public function parse()
    {
        $path = $_REQUEST['route'];

        $this->controller = app::gI()->config->default_controller;
        $this->action = app::gI()->config->default_action;
        $this->id = 0;

//        foreach($this->reg_paths as $regxp=>$keys) {
//            if (preg_match('#'.$regxp.'#Uuis', $path, $res)) {
//                $keys = explode('/',$keys);
//                foreach ($keys as $i=>$key) {
//                    $this->$key = $res[$i+1];
//                }
//            }
//        }

        if (isset($_REQUEST['controller']))
            $this->controller = $_REQUEST['controller'];
        if (isset($_REQUEST['action']))
            $this->action = $_REQUEST['action'];
    }

}

/*
 * public $controller;
  public $action;
  public $id;

  private $reg_paths = array(
    '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)/([0-9]+)' => 'controller/action/id',
    '([a-z0-9+_\-]+)/([a-z0-9+_\-]+)' => 'controller/action',
    '([a-z0-9+_\-]+)' => 'controller',
  );

  function parse(){
    $path = $_REQUEST['route'];

    $this->controller = app::gi()->config['default_controller'];
    $this->action = app::gi()->config['default_action'];
    $this->id = 0;

    foreach($this->reg_paths as $regxp=>$keys) {
      if (preg_match('#'.$regxp.'#Uuis', $path, $res)) {
        $keys = explode('/',$kyes);
        foreach ($keys as $i=>$key) {
          $this->$key = $res[$i+1];
        }
      }
    }
  }
 *
 *
 *
 *
 *
 *
 */