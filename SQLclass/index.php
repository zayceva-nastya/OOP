<?php

include 'src/autoload.php';

use W1019\DbTable;

// use W1019; использовать все классы с namespace

$table = new DbTable(
    new mysqli(
        "localhost",
        "root",
        "root",
        "bd124"
    ),
    "table124"
);
echo "<pre>";
print_r($table->get());
// echo $table->add(["text" => "gfhgf", "name" => "hgj"]);
// $table->edit(4, ["text" => "Hi", "name" => "Антоша"]);
$table->dell(2);
