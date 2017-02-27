<?php

$sum= 0;
$length=0;

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19,
];

foreach ($students as $name=>$age) {
    echo "Nom: $name  Age: $age <br/>";
    $sum += $age;
    $length++;
};

echo "La moyenne d'âge est: ".$sum/$length." ans !";
