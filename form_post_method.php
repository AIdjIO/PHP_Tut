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
  ?>