<?php

$usuarios = [
    [
        'name' => 'Alvaro_MG64',
        'email' => 'Alvaro_MG64@example.com',
        'password' => 'Uruguasho3*',
    ],
    [
        'name' => 'Federico',
        'email' => 'Federico@example.com',
        'password' => 'Abduzcan7#',
    ],
];

echo "INSERT INTO `users` (`name`, `email`, `password`) VALUES\n";

$valores = [];

foreach ($usuarios as $u) {
    $hash = password_hash($u['password'], PASSWORD_BCRYPT);

    $valores[] = sprintf(
        "('%s', '%s', '%s')",
        $u['name'],
        $u['email'],
        $hash
    );
}

echo implode(",\n", $valores) . ";\n";
