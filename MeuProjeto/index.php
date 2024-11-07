<?php
require 'vendor/autoload.php';
use src\app\Usuario;
$user = new Usuario();
echo $user->helloWorld();