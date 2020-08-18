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

      echo "<li>Identity Operator</li>";




  }
  ?>
</body>
</html>
