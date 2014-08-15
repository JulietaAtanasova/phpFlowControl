<!DOCTYPE html>
<html>
<head>
  <title>Prime in Range</title>
</head>
<body>
  <form action="<?php $_PHP_SELF ?>" method="GET">
    Starting Index: <input type="text" name="startIndex" />
    End: <input type="text" name="endIndex" />
    <input type="submit" name="submit" />
  </form> 

  <?php
  if( isset($_GET['submit']) )
  {
    $startIndex = $_GET['startIndex'];
    $endIndex = $_GET['endIndex'];
    $currentNumber = $startIndex;

    function isPrime($num) {
    if($num == 1)
      return false;
    if($num == 2)
      return true;
    if($num % 2 == 0) {
      return false;
    }
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
      if($num % $i == 0)
        return false;
    }
    return true;
    }

    for ($i = $startIndex; $i <= $endIndex; $i++) {
      if (isPrime($currentNumber)) {
        echo '<strong>';
        echo $currentNumber;
        echo '</strong>';
        if ($i != $endIndex) {
          echo ', ';
        }
      } else {
        echo $currentNumber;
        if ($i != $endIndex) {
          echo ', ';
        }
      }
      $currentNumber++;
    }
      
     
  }
  ?>
</body>
</html>
