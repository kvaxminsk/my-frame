<?php
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('FRAME', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'frame' . DIRECTORY_SEPARATOR);
define('APP', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
define('CONFIG', APP . 'config' . DIRECTORY_SEPARATOR);
//include FRAME . 'frame.php';
//
//App::gi()->start();
//var_dump(App::gi());

//<?php
//define('ROOT',dirname(__FILE__).'/');
//define('IDEAL',dirname(__FILE__).'/ideal/');
//define('APP',dirname(__FILE__).'/application/');
//include IDEAL.'framework.php';
//app::gi()->start();


//define('ROOT',dirname(__FILE__).'/');
//define('IDEAL',dirname(__FILE__).'/frame/');
//define('APP',dirname(__FILE__).'/app/');
include FRAME.'frame.php';
app::gi()->start();