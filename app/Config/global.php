 <?php

define('DS', DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', __DIR__ . DS . '..' . DS . 'Controller' . DS);
define('MODEL_PATH', __DIR__ . DS . '..' . DS . 'Model' . DS);
define('VIEW_PATH', __DIR__ . DS . '..' . DS . 'View' . DS);
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/crud_mvc_psr4/');
define('ASSETS_URL', BASE_URL.'app/Assets/');
