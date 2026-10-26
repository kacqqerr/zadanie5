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

for($i=0; $i<100; $i++)
{
    $tablica[$i] = null;
}

echo "Pusta tablica: ";
print_r($tablica);

echo "<br>";

$liczby = array();
$liczby[0] = 0;
$liczby[1] = 1;

for($i=2; $i<100; $i++)
{
    $liczby[$i] = $liczby[$i-1] + $liczby[$i-2];
}

echo "Ciag Fibonacciego: ";
print_r($liczby);

echo "<br>";

$liczby = array();
$liczby[0] = 1;

for($i=1; $i<100; $i++)
{
    $liczby[$i] = $liczby[$i-1]*2;
}

echo "Potegi liczby 2: ";
print_r($liczby);

echo "<br>";

$liczby = array();

for($i=0; $i<100; $i++)
{
    $liczby[$i] = ($i+1)*3;
}

echo "Ciag 3, 6, 9, 12...: ";
print_r($liczby);

echo "<br>";

$liczby = array();
$liczby[0] = 2;

for($i=1; $i<100; $i++)
{
    $liczby[$i] = $liczby[$i-1]*2;
}

echo "Ciag 2, 4, 8, 16...: ";
print_r($liczby);
?>
</body>
</html>