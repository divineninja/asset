<?php
session_start();
require 'config/paths.php';
require 'config/database.php';

function __autoload($class) {
    $file = "libs/$class.php";
    if (file_exists($file)) {
        require "libs/" . $class . ".php";
    }
}

$navigation = new navigation;

$app = new Bootstrap();