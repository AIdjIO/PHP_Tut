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
</body>
</html>
