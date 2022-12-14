<?php

ob_start();
require __DIR__ . '/../jkm.php';
ob_end_clean();

$data = json_decode(file_get_contents(__DIR__ . '/../data.json'), true);
$introductions = $data['introductions'];
$whos = $data['who'];
$hows = $data['how'];
$whats = $data['what'];
$whys = $data['why'];
$culminations = $data['culminations'];

$statements = [];
foreach ($introductions as $introduction) {
    foreach ($whos as $who) {
        foreach ($hows as $how) {
            foreach ($whats as $what) {
                foreach ($whys as $why) {
                    foreach ($culminations as $culmination) {
                        $statements[] = $introduction . $who . $how . $what . $why . $culmination;
                    }
                }
            }
        }
    }
}

for ($i = 0; $i < 100; $i++) {
    assert(in_array(generate(), $statements));
}

for ($i = 0; $i < 20; $i++) {
    $statement = generate();
    $modifiedStatement = substr($statement, 0, $i) . 'xyz' . substr($statement, $i);
    assert(in_array($modifiedStatement, $statements) === false);
}

echo "\e[32mAll tests passed!";
