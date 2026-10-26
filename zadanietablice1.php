<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo $tab1[4];

$tab1[6] = 12;

$tab2 = array();

for($i=0; $i<count($tab1); $i++)
{
    $tab2[$i] = $tab1[$i];
}

$tab3 = array();

for($i=0; $i<count($tab1); $i++)
{
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

for($i=0; $i<count($tab1); $i++)
{
    $tab2[$i] = $tab1[count($tab1)-1-$i];
}

echo "<br>";
print_r($tab1);
echo "<br>";
print_r($tab2);
echo "<br>";
print_r($tab3);
?>
</body>
</html>