<!DOCTYPE html>
<html>
<head>
    <title>Annual Costs</title>
</head>
<body>
<form method="GET">
    <label for="input">Enter number of years: </label>
    <input type="text" name="input" id="input"/>
    <input type="submit" name="submit" value="Show costs"/><br />
    <?php
    if (isset($_GET['submit'])) {
        echo "<table border=\"1\">";
        echo "<tr><th>Year</th>";
        echo "<th>January</th>";
        echo "<th>February</th>";
        echo "<th>March</th>";
        echo "<th>April</th>";
        echo "<th>May</th>";
        echo "<th>June</th>";
        echo "<th>July</th>";
        echo "<th>August</th>";
        echo "<th>September</th>";
        echo "<th>November</th>";
        echo "<th>December</th>";
        echo "<th>Total: </th></tr>";

        $years = array($_GET['input']);

        for($i = 0; $i < $_GET['input']; $i++){
            $years[$i] = array();
            for($j = 1; $j < 12; $j++){
                $random = rand(50, 1000);
                array_push($years[$i], $random);
            }
        }

        $count1 = count($years);
        $year = date("Y");
        for ($i=0; $i<$count1; $i++) {
            $sum = 0;
            $count2 = count($years[$i]);
            echo "<tr><td>" . ($year-($i));

            for ($j=0; $j<$count2; $j++) {
                $sum += $years[$i][$j];
                echo "</td><td>" . $years[$i][$j] . "</td>";
            }
            echo "</td><td>" . $sum . "</td>";
        }
        echo '<br />';
    }
    ?>
</body>
</html>