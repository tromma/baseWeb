<?php

ini_set('display_errors', 1);

require '../vendor/autoload.php';


$loader = new Nette\Loaders\RobotLoader;
$loader->addDirectory('..' . DIRECTORY_SEPARATOR . 'src');

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$loader->setTempDirectory(__DIR__ . 'temp');
$loader->register();
 
$router = new App\Router(dirname(__DIR__) . '/views');






$router
    ->get('/','main/index','home')

    ->run();
    

 ?>

 