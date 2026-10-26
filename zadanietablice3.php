<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$tablica = array();

$wyraz = "AbCdEfGhIj";

for($i=0; $i<10; $i++)
{
    $tablica[$i] = $wyraz[$i];
}

echo "Tablica liter: ";
print_r($tablica);

for($i=0; $i<count($tablica); $i++)
{
    if($tablica[$i] == strtoupper($tablica[$i]))
    {
        $tablica[$i] = strtolower($tablica[$i]);
    }
    else
    {
        $tablica[$i] = strtoupper($tablica[$i]);
    }
}

echo "<br>Po zamianie liter: ";
print_r($tablica);

shuffle($tablica);

echo "<br>Losowa kolejnosc: ";
print_r($tablica);
?>
</body>
</html>