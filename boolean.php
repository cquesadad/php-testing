<?php include './templates/head.php'; ?>

<?php

$isDev = true;
$age = 39;

$isOld = $age > 40;

if ($isOld) {
    echo "<h2>Eres viejo, lo siento</h2>";
} else if ($isDev) {
    echo "<h2>Eres joven, pero eres Dev, estás jodido.</h2>";
} else {
    echo "<h2>Eres jove, felicidades</h2>";
}

//Most recommended, separate logic from output
$outputAge = $isOld
    ? 'Eres viejo, si señor'
    : 'Eres jovenazo, congrats';
?>

<?php if ($isDev) : ?>
    <h2>Eres Dev, estás jodido.</h2>
<?php else : ?>
    <h2>No eres Dev. Todo bien</h2>
<?php endif; ?>

<h2><?= $outputAge ?></h2>

<?php include './templates/footer.php'; ?>

