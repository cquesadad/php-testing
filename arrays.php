<?php include './templates/head.php'; ?>

<?php 
$bestLanguages =  ["JavaScript", "PHP", "Python", 1];
//rewrite array
$bestLanguages[3] = "Java";
// adds to array at the end
$bestLanguages[] = "TypeScript";

//asociative arrays
$person = [
    "name" => "Carlos",
    "age" => 33,
    "isDev" => true,
    "languages" => ["JavaScript", "PHP", "TypeScript"]
]

?>

<h2>The best language is <?= $bestLanguages[1] ?></h2>
<!-- Iterating arrays -->
<ul>
<?php foreach ($bestLanguages as $language) : ?>
    <li><?= $language ?></li>  
<?php endforeach ?>

</ul>
