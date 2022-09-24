<?php

$data = json_decode(file_get_contents(__DIR__ . '/data.json'), true);

echo
    $data['introductions'][array_rand($data['introductions'])].
    $data['who'][array_rand($data['who'])].
    $data['how'][array_rand($data['how'])].
    $data['what'][array_rand($data['what'])].
    $data['why'][array_rand($data['why'])].
    $data['culminations'][array_rand($data['culminations'])]
;
