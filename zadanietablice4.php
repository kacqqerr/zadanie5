<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$liczby = array();

for($i=0; $i<100; $i++)
{
    $liczby[$i] = rand(1, 100);
}

echo "Tablica: ";
print_r($liczby);
echo "<br>";

$max = max($liczby);
$ile = 0;

for($i=0; $i<count($liczby); $i++)
{
    if($liczby[$i] == $max)
    {
        $ile++;
    }
}

echo "Najwieksza liczba: ".$max."<br>";
echo "Liczba wystapien: ".$ile."<br>";

echo "Liczby nieparzyste: ";

for($i=0; $i<count($liczby); $i++)
{
    if($liczby[$i]%2 != 0)
    {
        echo $liczby[$i]." ";
    }
}

echo "<br>Liczby o nieparzystych indeksach: ";

for($i=0; $i<count($liczby); $i++)
{
    if($i%2 != 0)
    {
        echo $liczby[$i]." ";
    }
}

echo "<br>Liczby z przedzialu <5,15): ";
$ile = 0;

for($i=0; $i<count($liczby); $i++)
{
    if($liczby[$i]>=5 && $liczby[$i]<15)
    {
        echo $liczby[$i]." ";
        $ile++;
    }
}

echo "<br>Ilosc liczb: ".$ile."<br>";

$a = 25;
$najblizsza = $liczby[0];

for($i=1; $i<count($liczby); $i++)
{
    if(abs($liczby[$i]-$a)<abs($najblizsza-$a))
    {
        $najblizsza = $liczby[$i];
    }
}

echo "Liczba najblizsza ".$a.": ".$najblizsza."<br>";

$indeks = array_search(min($liczby), $liczby);

echo "Minimum: ".$liczby[$indeks]."<br>";

if($indeks>0)
{
    echo "Poprzednik: ".$liczby[$indeks-1]."<br>";
}

if($indeks<count($liczby)-1)
{
    echo "Nastepnik: ".$liczby[$indeks+1]."<br>";
}

$nowa = array();

for($i=0; $i<count($liczby); $i++)
{
    if($liczby[$i]>10)
    {
        $nowa[] = $liczby[$i];
    }
}

echo "Liczby wieksze od 10: ";
print_r($nowa);

echo "<br>";

$A = $liczby;
$B = array();
$B[0] = $A[0];

for($i=1; $i<100; $i++)
{
    $B[$i] = $B[$i-1] + $A[$i];
}

echo "Sumy kolejnych elementow: ";
print_r($B);

echo "<br>";

rsort($liczby);

echo "Sortowanie malejaco: ";
print_r($liczby);

echo "<br>Liczby wystepujace przynajmniej 3 razy: ";

$wypisane = array();

for($i=0; $i<count($liczby); $i++)
{
    $ile = 0;

    for($j=0; $j<count($liczby); $j++)
    {
        if($liczby[$i] == $liczby[$j])
        {
            $ile++;
        }
    }

    if($ile>=3 && !in_array($liczby[$i], $wypisane))
    {
        echo $liczby[$i]." ";
        $wypisane[] = $liczby[$i];
    }
}
?>
</body>
</html>