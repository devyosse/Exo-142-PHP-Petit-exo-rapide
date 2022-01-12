<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$bonjour = "Bonjour";
echo $bonjour . "<br>";


$tableau = ["un", "deux", "trois", 'quatre'];

echo $tableau[2] . "<br>";

for ($i = 0; $i < count($tableau); $i++) {
    echo "Value : $tableau[$i]" . "<br>";
}

foreach ($tableau as $item){
    echo "la valeur est : $item"."<br>";
}

?>


<ul></ul>
</body>
</html>






