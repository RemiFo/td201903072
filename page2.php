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
<?php
foreach ($tableau1 as $item) {
    echo "Couleur : " . $item . "<br>";
}
?>

<?php
foreach ($tableau2 as $key => $value) {
?>
<p style="color:<?php echo $value; ?>">La couleur "<?php echo $key; ?>" a pour code : <?php echo $value; ?></p>
<?php
}
?>
</body>
</html>