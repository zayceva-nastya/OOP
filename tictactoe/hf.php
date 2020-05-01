<?php
$map = [
    1 => 3,
    2 => 3,
    3 => Null,
    4 => 6,
    5 => Null,
    6 => Null
];
print_r($map);
 $free = [];
foreach ($map as $key=>$value) {
//     foreach ($key as $value) {
        if ($value === Null) {
            $free[] = $value;
        }
//     }
}
print_r($free);
