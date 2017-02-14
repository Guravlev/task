<?php
define("Q_PATH",dirname(__FILE__));
require 'application/core/route.php';

$app = new Route();
$app->Start();