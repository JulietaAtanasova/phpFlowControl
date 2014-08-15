<!DOCTYPE html>
<html>
<head>
    <title>Rich people's problems</title>
</head>
<body>
<div>
<form action="<?php $_PHP_SELF ?>" method="GET">
    <label for="input">Enter cars</label>
    <input type="text" name="input" id="input"/>
    <input type="submit" name="submit" value="Show result"/><br />

    <?php
    if (isset($_GET['submit'])) {
        $colors = array ("yellow", "red", "blue", "black", "green", "purple", "white");
        echo "<table border=\"1\">";
        echo "<tr><th>Car</th>";
        echo "<th>Color</th>";
        echo "<th>Count</th></tr>";
        $cars = explode(', ', $_GET['input']);
    for ( $i = 0; $i < count($cars); $i++){
        $randomColor = rand(0, count($colors)-1);
        $color = $colors[$randomColor];
        $count = rand(1, 3);
        echo "<tr><td>" . $cars[$i] . "</td><td>" . $color . "</td><td>" . $count . "</td></tr>";
    }
    echo "</table>";
    }
?>
</form>
</div>
</body>
</html>