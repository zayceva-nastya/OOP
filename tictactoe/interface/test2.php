<?php
session_start();

include 'autoload.php';

$test = new TestClass();

// $test->run(new JsonFile('data.json'));

// $test->run(new IniFile('data.ini'));

// $test->run(new PHPFile('data.php'));

$test->run(new SessionSaver('session'));

print_r($_SESSION);

//ход вызывался на те коорд которые мы выбрали
