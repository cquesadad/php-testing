<?php
$name = 'Carlos';
$isDev = true;
$age = 23;

var_dump = $name;
var_dump = $isDev;
var_dump = $age;

$output = "Hola $name, con una edad de $age años. 😁"
?>

<h1>
    <?= 
        "Me llamo "
        . $name
        . " Con una edad de"
        . $age
    ?>
</h1>

<h2> <?= $output ?> </h2> 

<style>
:root {
    color-scheme: light dark;
}

body {
    display: grid;
    place-content: center;
}
</style>