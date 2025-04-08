<?php
$fileContent = "Hello World!";
$filename = "file.txt";

header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Length: " . strlen($fileContent));

echo $fileContent;