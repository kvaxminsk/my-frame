<?php
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('FRAME', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'frame' . DIRECTORY_SEPARATOR);
define('APP', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
include FRAME . 'frame.php';

app::gi()->start();
