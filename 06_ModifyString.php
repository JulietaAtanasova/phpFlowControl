<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modify String</title>
</head>
<body>
  <form action="<?php $_PHP_SELF ?>" method="POST">
    <input type="text" name="string">

    <input id ="check-palindrome" type="radio" name="mode" value="check_palindrome"/>
    <label for="check-palindrome">Check Palindrome</label>

    <input id ="reverse-string" type="radio" name="mode" value="reverse_string"/>
    <label for="reverse-string">Reverse String</label>

    <input id ="chunk-split" type="radio" name="mode" value="chunk_split"/>
    <label for="chunk-split">Split</label>

    <input id ="hash-password" type="radio" name="mode" value="hash_password"/>
    <label for="hash-password">Hash String</label>

    <input id ="shuffle-string" type="radio" name="mode" value="shuffle_string"/>
    <label for="shuffle-string">Shuffle String</label>
    
    <input type="submit" />
  </form>

  <?php
    if (isset($_POST['mode'])) {
      $mode = $_POST['mode'];
      $inputString = $_POST['string'];
      
      function check_palindrome($string)   
      {  
        if ($string == strrev($string))  
            return true;
        else  
            return false;
      }

      if ($mode == "check_palindrome") {
        if (check_palindrome($inputString)) {
          echo $inputString." is a palindrome!";
        } else {
          echo $inputString." is not a palindrome!";
        }
      } elseif ($mode == "reverse_string") {
        echo strrev($inputString);
      } elseif ($mode == "chunk_split") {
        echo chunk_split($inputString, 1, "\r\n");
      } elseif ($mode == "hash_password") {
        echo password_hash($inputString, PASSWORD_DEFAULT);
      } elseif ($mode == "shuffle_string") {
        echo str_shuffle($inputString);
      }

    }
  ?>
</body>
</html>