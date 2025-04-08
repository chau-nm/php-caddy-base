<?php
$options = getopt("m:", ["message:"]);
$message = $options["m"] ?? $options["message"] ?? "Unknown message";
echo $message;