<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$liczby = array(3, 7, 2, 10, 3, 8, 5, 12, 6, 9);

echo "Tablica: ";
print_r($liczby);
echo "<br>";

echo "Najmniejsza: ".min($liczby)."<br>";
echo "Najwieksza: ".max($liczby)."<br>";

$suma = 0;
$trojki = 0;
$parzyste = 0;
$nieparzyste = 0;
$podzielne = 0;

for($i=0; $i<count($liczby); $i++)
{
    $suma += $liczby[$i];

    if($liczby[$i] == 3)
    {
        $trojki++;
    }

    if($liczby[$i]%2 == 0)
    {
        $parzyste++;
    }
    else
    {
        $nieparzyste++;
    }

    if($liczby[$i]%3 == 0)
    {
        $podzielne++;
    }
}

echo "Srednia: ".$suma/count($liczby)."<br>";
echo "Liczba wystapien 3: ".$trojki."<br>";

sort($liczby);

echo "Tablica posortowana: ";
print_r($liczby);
echo "<br>";

$ile = count($liczby);

if($ile%2 == 1)
{
    $mediana = $liczby[(int)($ile/2)];
}
else
{
    $mediana = ($liczby[$ile/2-1] + $liczby[$ile/2])/2;
}

echo "Mediana: ".$mediana."<br>";

echo "3 najmniejsze: ";

for($i=0; $i<3 && $i<count($liczby); $i++)
{
    echo $liczby[$i]." ";
}

echo "<br>3 najwieksze: ";

for($i=max(0, count($liczby)-3); $i<count($liczby); $i++)
{
    echo $liczby[$i]." ";
}

for($i=0; $i<count($liczby); $i++)
{
    $liczby[$i] = $liczby[$i]*$liczby[$i];
}

echo "<br>Kwadraty: ";
print_r($liczby);

echo "<br>Liczby parzyste: ".$parzyste;
echo "<br>Liczby nieparzyste: ".$nieparzyste;
echo "<br>Liczby podzielne przez 3: ".$podzielne;
?>
</body>
</html>