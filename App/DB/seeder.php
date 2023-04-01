<?php
$users = [
    ['name' => 'aabb@gmail.com', 'psw' => md5('123')],
    ['name' => 'bbcc@gmail.com', 'psw' => md5('123')],
    ['name' => 'ccdd@gmail.com', 'psw' => md5('123')]
];

file_put_contents(__DIR__ .'/users.json', json_encode($users));

echo 'All is OK';
