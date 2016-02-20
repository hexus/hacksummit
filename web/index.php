<?php
$application = require __DIR__ . '/../bootstrap.php';

echo $application->view->create('index')->render();
