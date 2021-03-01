<?php
$connect = pg_connect("host=ec2-54-157-149-88.compute-1.amazonaws.com 
dbname=d7li5vh6npno94
port=5432
user=zuqmehsapjptmv
password=623913fc950b42d76791b758a5f0146ddb4b104e5af583b34628a354935751e9
sslmode=require");
 echo ("Connect successfully!");
if ($connect === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  //echo ("Connect successfully!");
  $toy_name = $_POST['toy-name'];
  $toy_price = $_POST['toy-price'];
  $atn_store = $_POST['store'];
  $toy_quantity = $_POST['toy-quantity'];
  $toy_description = $_POST['toy-description'];
}
//echo ("Connect successfully!");
$query = "INSERT INTO toy (toy_name, toy_price, atn_store, toy_quantity, toy_description) 
VALUES('$toy_name', '$toy_price','$atn_store', '$toy_quantity', '$toy_description');";
$result = pg_query($connect, $query);
if ($result) {
  echo "<script>alert('Record added succesfully!, Refresh');</script>";
  header('refresh: 3; url=toyform.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
