<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$x = 1;
echo "<table border='1'>\n";
while($x < 10) {
    echo "\t<tr>\n";
    $y = 1;
    while($y < 10) {
        echo "\t\t<td>$x * $y = ". $x * $y ." </td>\n";
        $y++;
    }
    echo "\t</tr>\n";
    $x++;
}
echo '</table>';


?> 


</body>
</html>
