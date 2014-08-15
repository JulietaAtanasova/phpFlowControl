<!DOCTYPE html>
<html>
<head>
    <title>Sum Of  Squares</title>
</head>
<body>
<div>
<?php
echo "<table border=\"1\">";
echo "<tr><th>Number</th>";
echo "<th>Square</th></tr>";
$sum = 0;
for ( $number = 0; $number <= 100; $number+=2){
    $square = round(sqrt($number), 2);
    $sum += $square;
    echo "<tr><td>" . $number . "</td><td>" . $square . "</td></tr>";
    if ($number == 100){
        echo "<tr><td><strong>Total: </strong></td><td>" . $sum . "</td></tr>";
    }
}
echo "</table>";
?>
</div>
</body>
</html>