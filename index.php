<?php include './templates/head.php'; ?>

<?php
//variable types
$name = 'Carlos';
$isDev = true;
$age = 23;

// type methods
// var_dump($name);
// var_dump($isDev);
// var_dump($age);

// echo gettype($name);
// is_string($name);

//force type
// $newAge = (bool) 44; //force variable type to a boolean

$output = "Bienvenido $name, hemos recibido tu edad de $age años. 😁"; 

//global consts
define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

//const, no variable. Static constant, can't be used in for loops
const NOMBRE = 'Carlos';

?>

<img src="<?= LOGO_URL ?>" class="php-logo" alt="PHP logo" width="200"/>

<h1>
    <?= 
        "Me llamo "
        . $name
        . ", con una edad de "
        . $age;
    ?>
</h1>

<h2> <?= $output; ?> </h2>

<?php include 'footer.php'; ?>