<?php

$filename = "data.csv";
$data = [
    ["Tên", "Tuổi", "Email"],
    ["A", 25, "a@example.com"],
    ["B", 30, "b@example.com"]
];

header('Content-Type: text/csv');
header("Content-Disposition: attachment; filename=\"$filename\"");

$output = fopen("php://output", "w");

// Ghi dữ liệu vào output (dòng CSV)
foreach ($data as $row) {
    fputcsv($output, $row);
}

fclose($output);
exit;

