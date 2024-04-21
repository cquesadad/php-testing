<?php include './templates/head.php'; ?>

<?php

$name = 'Carlos';
$isDev = true;
$age = 33;

$isOld = $age > 40;

//match, asign a variable and return a value. For pattern matching
$outputAge = match (true) {
    $age < 2 => "You're a baby, $name",
    $age < 10 => "You're a child, $name",
    $age < 18 => "You're a teeneager, $name",
    $age = 18 => "You're of legal age, $name",
    $age < 30 => "You're are in the best part, $name",
    $age > 40 => "You're a older, $name",
    default => "You're in the third age, $name",
}

?>



<h2><?= $outputAge ?></h2>

<?php include './templates/footer.php'; ?>
