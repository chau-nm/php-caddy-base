<?php

require_once "../src/App.php";
$uri = $_SERVER['REQUEST_URI'];
App\App::handle($uri);