<!DOCTYPE html>
<html>
<head>
    <title>Month Expenses</title>
</head>
<body>
<div>
<?php
echo "<table border=\"1\">";
echo "<tr><th>Month</th>";
echo "<th>Expenses</th></tr>";
$sum = 0;
for ( $month = 1; $month <= 12; $month++){
    $expenses = rand(50, 1000);
    $sum += $expenses;
    echo "<tr><td>" . $month . "</td><td>" . $expenses . "</td></tr>";
    if ($month == 12){
        echo "<tr><td><strong>Total: </strong></td><td>" . $sum . "</td></tr>";
    }
}
echo "</table>";
?>
</div>
</body>
</html>