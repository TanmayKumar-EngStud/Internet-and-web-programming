<html>

<head>
  <title>Question 1</title>
</head>

<body>
  <?php
    $file = fopen("numbers.txt", "r");
    $numbers = fgets($file);
    $number = explode(" ", $numbers);
    echo "<br><br>Numbers in numbers.txt file are : <b>";
    // printing the all numbers
    for ($i = 0; $i < count($number); $i++) {
      echo $number[$i] . ", ";
    }
    $count = 10;
    // Selecting random 10 numbers from number and storing it in an array
    shuffle($number);
    $random_numbers = array_slice($number, 0, $count);
    echo "</b><br>Random numbers: ";
    // printing the random numbers
    for ($i = 0; $i < count($random_numbers); $i++) {
      echo $random_numbers[$i] . ", ";
    }
    echo "<br>";
    fclose($file);
    // counting every number from the random numbers
    for ($i = 0; $i < count($random_numbers); $i++) {
      $count = 0;
      for ($j = 0; $j < count($number); $j++) {
        if ($random_numbers[$i] == $number[$j]) {
          $count++;
        }
      }
      // Stroing the count of distinct numbers in an array
      if(count($distinct_numbers) == 0) {
        $distinct_numbers[$i][0] = $random_numbers[$i];
        $distinct_numbers[$i][1] = $count;
      }
      else {
        $flag = 0;
        for ($k = 0; $k < count($distinct_numbers); $k++) {
          if ($distinct_numbers[$k][0] == $random_numbers[$i]) {
            $distinct_numbers[$k][1] += $count;
            $flag = 1;
          }
        }
        if ($flag == 0) {
          $distinct_numbers[$i][0] = $random_numbers[$i];
          $distinct_numbers[$i][1] = $count;
        }
      }
    }
    echo "<br>Distinct numbers: <br>";
    // printing the distinct numbers
    for ($i = 0; $i < count($distinct_numbers); $i++) {
      echo $distinct_numbers[$i][0] . ": " . $distinct_numbers[$i][1] . "<br>";
    }
    echo "<br>";
    echo "Numbers that are occuring odd number of times are: ";
    for ($i = 0; $i < count($distinct_numbers); $i++) {
      if ($distinct_numbers[$i][1]%2 == 1){
        echo $random_numbers[$i] . ", ";
      }
    }
    echo "<br><b>Thankyou!!</b>"
  ?>
</body>

</html>