<?php include './templates/head.php'; ?>

<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# first init a new cURL sesion. ch = curl handler
$ch = curl_init(API_URL);

//indicate that we want to receive the result of the request and don't show  it in screen, no echo
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

/* Execute petition 
and save it */
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<main>
    <!-- <pre style="font-size: 14px">
          // var_dump($data)
    </pre> -->
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300">
    </section>
    <h2>The next Marvel movie is:</h2>
    <h3><?= $data["title"] ?></h3>
    <p>Launch day: <?= $data["release_date"] ?></p>
    <p>The following production is: <?= $data["following_production"]["title"] ?></p>

</main>