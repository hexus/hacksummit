<?php
$application = require __DIR__ . '/../bootstrap.php';

echo $application->router->respond($application->request, $application->response);
