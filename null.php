<?php

$name = "Acha";
$name = null;

$age = null;

echo "name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

$name = null;
$name = "Acha";

if (is_null ($name)) {
    echo "Name is null";
} else { 
    echo "Name is not null";
}

?>