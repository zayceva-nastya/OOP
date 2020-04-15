<?php
include 'autoload.php';

$sq = new Square($_POST['a']);

echo $sq->{$_POST['op']}()."\n";
