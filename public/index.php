<?php

require_once "../src/App.php";
$uri = $_SERVER['REQUEST_URI'];
\src\App::handle($uri);