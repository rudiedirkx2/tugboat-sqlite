<?php

require 'inc.bootstrap.php';

header('Content-type: text/plain; charset=utf-8');

print_r($db);

$users = $db->select('users', '1')->all();
print_r($users);
