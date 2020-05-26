<?php

include("autoload.php");

$student = new Student("Петр", "Иванов");
echo $student->introduce();
echo $student->learn();

echo "<br>";

$teacher = new Teacher('Галина', 'Сергеевна');
echo $teacher->introduce();
echo $teacher->teach();

echo "<br>";

$engineer = new Engineer('Василий', 'Петрович');
echo $engineer->introduce();
echo $engineer->learn('');
echo $engineer->work();