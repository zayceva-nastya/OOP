<?php
include 'autoload.php';

$file = new JsonFile('data.json');

$file->save([1=>1,2=>2,3=>3]);
print_r($file->load());

$ini= new IniFile('data.ini');

$ini->save([1=>1,2=>2,3=>3,4]);
print_r($ini->load());

$ini= new PHPFile('data.php');

$ini->save([1=>1,2=>2,3=>3,4,5]);
print_r($ini->load());