<?php
include("functions.php");
$tableau1 = array(
    "bleu",
    "rouge",
    "vert",
    "jaune",
    "orange"
);
$tableau2 = array(
    "bleu" => "#0000ff",
    "rouge" => "#ff0000",
    "vert" => "#00ff00",
    "jaune" => "#ffff00",
    "orange" => "#ff7700"
);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
12 x 5 = <?php echo multiplier(12,5); ?>
<ol>
    <?php
    for($i=0;$i<30;$i++) {
        ?>
        <li><?php echo $i;?> Bonjour</li>
    <?php } ?>
</ol>
</body>
</html> 