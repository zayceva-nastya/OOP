<?php

$str = "Controller\TableController";
$str2 = "View\Html\Tags";
$pat = "/\w+\\\\|\\\\|Controller/";

echo preg_replace($pat,'',$str)."<br>";
echo preg_replace($pat,'',$str2);