<?php 
$f_name="Ai"; //variable with string datatype in double quotes (single quotes can be used too).
$l_name='Dj';
$age=44; //integer
$height=1.91; //float
$can_vote=true; //boolean
$address=array('street' => '1 Hacker Way', 'city'=> 'Palo Alto');
$state = NULL; //variable has no value;
define('PI',3.14159265);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Tutorial</title>
</head>
<body>
  <p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
  <form action="index.php" method="get"><br>
    <label>Your State : </label>
    <input type="text" name="state"/><br>
    <label>Number 1 : </label>
    <input type="text" name="num_1"/><br>
    <label>Number 2 : </label>
    <input type="text" name="num_2"/><br>
    <input type="submit" value="submit"/>
  </form>
  <?php
  if(isset($_GET) && array_key_exists('state', $_GET)){
    $state = $_GET['state'];
    if (isset($state) && !empty($state)){
      echo 'You live in ' . $state . '<br>';
      echo "$f_name lives in $state<br>";
    }
    if (count($_GET) >= 3){
      $num_1 = $_GET['num_1'];
      $num_2 = $_GET['num_2'];

      echo "<h2>Math operator</h2>";
      echo "$num_1 + $num_2 =  " .($num_1 + $num_2).'<br>';
      echo "$num_1 - $num_2 =  " .($num_1 - $num_2).'<br>';
      echo "$num_1 * $num_2 =  " .($num_1 * $num_2).'<br>';
      echo "$num_1 / $num_2 =  " .($num_1 / $num_2).'<br>';
      echo "$num_1 % $num_2 =  " .($num_1 % $num_2).'<br>';
      echo "$num_1 / $num_2 =  " .(intdiv($num_1 , $num_2)).'<br>';

      echo "<h2>Increment / Decrement</h2>";
      echo "Increment $num_1 =  " .($num_1++).'<br>';
      echo "Decrement $num_1 =  " .($num_1--).'<br>';

      echo "<h2>Math functions</h2>";
      echo "abs(-5) = " . abs(-5) .'<br>';
      echo "ceil(4.45) = " . ceil(4.45) . "<br>";
      echo "floor(4.45) = " . floor(4.45) . "<br>";
      echo "round(4.45) = " . round(4.45) . "<br>";
      echo "max(4,5) = " . max(4,5) . "<br>";
      echo "min(4,5) = " . min(4,5) . "<br>";
      echo "pow(4,2) = " . pow(4,2) . "<br>";
      echo "sqrt(16) = " . sqrt(16)."<br>";
      echo "exp(1) = " . exp(1) . "<br>";
      echo"log(e) = " . log(exp(1)) . "<br>";
      echo "log10(10) = " . log10(1) . "<br>";
      echo "PI= " . pi() . "<br>";
      echo "hypot(10,10) = " . hypot(10,10) . "<br>"; # hypothenuse
      echo "deg2rad(90) = " . deg2rad(90) . "<br>";
      echo "rad2deg(1.57) = " . rad2deg(1.57) . "<br>";
      echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>"; # fast random number
      echo "rand(1,50) = " . rand(1,50) . "<br>"; # original random num
      echo "Max Random = " . mt_getrandmax() . "<br>"; # max random num
      echo "is_finite(10) = " . is_finite(0) . "<br>";
      echo "is_infinite(log(10)) = " . is_infinite(log(0)) . "<br>";
      echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";
      echo "sin(0) = " . sin(0) . "<br>"; # sin, cos, tan, asin, atan, asinh, acosh, atanh, atan2

      echo "<h2>number format</h2>";
      echo number_format(12345.6789, 2) . "<br>";

      echo "<h2>Conditionals</h2>";
      echo "<li>IF Statment</li>";
      $num_oranges = 4; 
      $num_bananas = 36;
      if(($num_oranges > 25) && ($num_bananas > 30)){
        echo "35% Discount<br>";
      }
      elseif (($num_oranges>30) || ($num_bananas>35)){
        echo "15% Discount<br>";
      }
      elseif (!($num_oranges <5) || (!($nun_bananas < 5))){
        echo "5% Discount<br>";
      }
      else {
        echo "No Discount<br>";
      }
      echo "<li>SWITCH Statement</li>";
    }
    $request = "Coke";
    switch($request){
      case "Coke":
        echo "Here is your Coke<br>";
      break;
      case "Pepsi":
        echo "Here is your Pepsi<br>";
      break;
      default:
        echo "Here is your Water<br>";
      break;
    }

    $age = 12;
    switch(true){
      case ($age<5):
        echo "stay home<br>";
      break;
      case ($age == 5):
        echo "Go to kindergarten<br>";
      break;
      case in_array($age, range(6,17)):
        $grade = $age - 5;
        echo "Go to Grade $grade<br>";
      break;
      default:
      echo "Go to College<br>";
      break;
      }

      echo "<li>Ternary operator</li>";
      $can_vote = ($age>=18)? "Can Vote" : "Can't Vote";
      echo "Vote? : $can_vote<br>";

      echo "<li>Identity Operator ===</li>";
      echo "\"10\"===10? : ";
      if("10"===10){
        echo "They are equal<br>";
      }
      else {
        echo "They are not equal<br>";
      }

      echo "\"10\"==10? : ";
      if("10"==10){
        echo "They are equal<br>";
      }
      else {
        echo "They are not equal<br>";
      }

      echo "<h2>printf</h2>";
      printf("%c %d %.2f %s<br>", 65, 65, 1.234, "string");

      echo "<h2>Conditionals</h2>";
      $rand_str = "          Random String             ";
      echo "string: $rand_str<br>";
      printf("length : %d<br>", strlen($rand_str));
      printf("Length : %d<br>", strlen(rtrim($rand_str)));
      printf("Length : %d<br>", strlen(rtrim($rand_str)));
      $rand_str = trim($rand_str);
      printf("Upper : %s<br>", strtoupper($rand_str));
      printf("Lower : %s<br>", strtolower($rand_str));
      printf("Upper first character of every word: %s<br>", ucfirst($rand_str));
      printf("First 6 characters : %s<br>", substr($rand_str, 0, 6));
      printf("Index : %s<br>", strpos($rand_str, "String"));
      $rand_str = str_replace("String", "Characters", $rand_str);
      printf("A == B : %d<br>", strcmp("A","B"));

      echo "<h2>Array</h2>";
      $colors = array("blue", "orange", "yellow");
      echo '1st color : ' . $colors[0] . '<br>';
      $colors[3]="red";
      foreach($colors as $color){
        printf("color : %s<br>", $color);
      }
      $my_info = array('Name' => 'AI', 'Street' => 'Hacker Way');
      foreach($my_info as $key => $value){
        printf("%s : %s<br>", $key, $value);
      };
      $morecolor = array('indigo');
      $colors = $colors + $morecolor;

      sort($colors);
      rsort($colors);
      asort($my_info);
      ksort($my_info);
      arsort($my_info);
      krsort($my_info);
      $_2darray = array(array('addition', '+'),
                  array('subtraction','-'),
                  array('multiplication','*'),
                  array('division','/'));

      for($row = 0; $row < 4; $row++ ){
        for ($col = 0; $col < 2; $col++){
          echo  $_2darray[$row][$col] . ', ';
        }
        echo '<br>';
      }

      $let_str = "A B C D";
      $let_arr=explode(' ', $let_str);
      foreach($let_arr as $l){
        printf("Letter : %s<br>", $l);
      }
      $let_str2 = implode($let_arr);
      printf("%s<br>", $let_str2);

      printf("Key exists : %d<br>", array_key_exists("Name", $my_info));
      printf("Value exists : %d<br>", in_array("yellow", $colors));

      echo "<h2>Loops</h2>";
      $i = 0;
      while ($i <10){
        echo ++$i . ', ';
      }
      echo '<br>';

      for($i = 0; $i < 10; $i++){
        if($i%2==0){
          continue;
        }
        if($i==7) break;
        echo $i . ', ';
      }
      echo "<br>";

      $i = 0;
      do{
        echo "Do While : $i<br>";
      } while ($i>0);

      echo "<h2>Functions</h2>";
      function addNumbers($num1=0, $num2=0){
        return $num1 + $num2;
      }

      printf("5 + 4 = %d<br>", addNumbers(5,4));

      function changeMebyValue($change){
        $change = 10;
      }

      $change = 5;
      changeMebyValue($change);
      echo "Change by value: $change<br>";

      function changeMebyReference(&$change){
        $change = 10;
      }
      changeMebyReference($change);
      echo "Change by reference: " . $change ."<br>";

      function getSum(...$nums){
        $sum = 0;
        foreach($nums as $num){
          $sum += $num;
        }
        return $sum;
      }

      printf("Sum = %d<br>", getSum(1,2,3,4));

      function doMath($x, $y){
        return array(
          $x + $y,
          $x -$y
        );
      }

      list($sum, $difference) = doMath(5,4);
      echo "Sum = $sum<br>";
      echo "Difference = $difference<br>";

      function square($x){
        return $x*$x;
      }

      $list = [1,2,3,4];
      $dbl_list=array_map('square', $list);
      print_r($dbl_list); # prints out a human readable list;

      function mult($x,$y){
        $x *= $y;
        return $x;
      }

      $prod = array_reduce($list, 'mult', 1);
      printf("<br>%d <br>", $prod);

      function isEven($x){
        return ($x % 2 == 0);
      }

      $even_list = array_filter($list, 'isEven');

      print_r($even_list);

      echo "<h2>Dates</h2>";
      date_default_timezone_set('Europe/London');
      echo "Date : " . date('I F m-d-Y g:i:s A') . "<br>";
      $import_date = mktime(0,0,0 ,12,21,1974);
      echo "Important Date : " . date('I F m-d-Y g:i:s A', $import_date) . "<br>";

      echo "<h2>Including files inside php code</h2>";
      include 'say_hello.php';

      echo "<h2>Exception Handling</h2>";

      function badDivide($num){
        if($num ==0){
          throw new Exception("You can't divide by zero");
        }
        return $calc = 100/ $num;
      }

      try{
        echo "Hello<br>";
        echo 'Divide 100 by 0 :' . badDivide(0) . '<br>';
        echo 'Divide 100 by 1 :' . badDivide(1) . '<br>';
      }
      catch(Exception $e){
        echo "Exception : " . $e->getMessage();
      }
  }
  ?>
<hr>
  <form action="form_post_method.php" method="post">
  <label>Email : </label>
  <input type="text" name="email"/><br>
  <label>Number 1 : </label>
  <input type = "text" name="number1"/><br>
  <label>Number 2 : </label>
  <input type = "text" name="number2"/><br>
  <label>Website : </label>
  <input type = "text" name="website"/><br>
  <input type="submit" value="Submit"/>
  </form>
  <?php 
  if (isset($_POST["email"])){
    # INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV
    if(!filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL)){
      echo "Email isn't valid<br>";
    } else {
      echo "Email is valid<br>";
    }
  }

  if(isset($_POST["number1"]) && !empty($_POST["number2"])){
    $number1 = filter_input(INPUT_POST, 'number1', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    $number2 = filter_input(INPUT_POST, 'number2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $output = sprintf("%.1f + %.1f = %.1f", $number1, $number2, ($number1 + $number2));
    echo htmlspecialchars($output) . '<br>';
  }
  if (isset($_POST["website"])){
    $website = filter_input(INPUT_POST, 'website', FILTER_VALIDATE_URL);
    echo 'Website : ' . htmlspecialchars($website) . '<br>';
  }

  # Other Validations : php.net/manual/en/filter.filters.validate.php
  # Sanitization Filters : php.net/manual/en/filter.filters.sanitize.php

  $con_html ='<a href="#">Sample</a>';
  echo $con_html . '<br>';
  echo htmlspecialchars($con_html) . '<br>';
  echo strip_tags($con_html, '<a') . '<br>';
  $con_html = strip_tags($con_html) . '<br>';
  echo $con_html . '<br>';
  ?>
</body>
</html>
