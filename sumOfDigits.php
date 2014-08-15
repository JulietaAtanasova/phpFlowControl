<!DOCTYPE html>
<html>
<head>
  <title>Prime in Range</title>
</head>
<body>
  <form action="<?php $_PHP_SELF ?>" method="GET">
    Input string: <input type="text" name="inputString" />
    <input type="submit" name="submit" />
  </form> 

  <?php
  if( isset($_GET['submit']) )
  {
    $inputArray = explode(", ", $_GET['inputString']);
    
    $arrayWithSums = array();
    for ($i=0; $i < sizeof($inputArray); $i++) { 
      $currentSum = 0;
      $numberToSum = $inputArray[$i];
      for ($j=0; $j < strlen($inputArray[$i]); $j++) { 
        $currentSum += $numberToSum % 10;
        $numberToSum = $numberToSum / 10;
      }
      if ($currentSum == 0) {
        $currentSum = "I cannot sum that";
      }
      $arrayWithSums[$inputArray[$i]] = $currentSum;
    }

    function createTable($outputArray) {
      echo '<table border="1">';
      foreach ($outputArray as $key => $value) {
        echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
      }
      echo "</table>";
    }

    createTable($arrayWithSums);
  }
  ?>
</body>
</html>
