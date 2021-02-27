<?php
$account = pg_connect("host=ec2-54-157-149-88.compute-1.amazonaws.com 
dbname=d7li5vh6npno94
port=5432
user=zuqmehsapjptmv
password=623913fc950b42d76791b758a5f0146ddb4b104e5af583b34628a354935751e9
sslmode=require");

if ($account === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  echo ("Connect successfully! ");

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM staff WHERE email = '$email' AND \"password\" = '$password'";
  $result = pg_query($account, $query);
  $count = pg_num_rows($result);
  if ($count == 1) {
    session_start();
    $_SESSION["email"] = $email;
    header('Location: /employee.php');
  } else {
    echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
    header('refresh: 2; url=/loginStaff.php'); //wrong reset
  }
}
pg_close($account);