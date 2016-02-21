<?php
$application = require __DIR__ . '/../bootstrap.php';

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

echo $application->router->respond($application->request, $application->response);
