<?php

return [
    'class' => yii\db\Connection::class,
    'dsn' => 'mysql:host=' . ($_ENV['MYSQL_HOST'] ?? 'mysql') . ';dbname=' . ($_ENV['MYSQL_DB'] ?? 'mysql_db'),
    'username' => 'root',
    'password' => 'password',
    'charset' => 'utf8',
];
