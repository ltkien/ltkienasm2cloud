<?php
$connect = pg_connect("host=ec2-54-157-149-88.compute-1.amazonaws.com 
dbname=d7li5vh6npno94
port=5432
user=zuqmehsapjptmv
password=623913fc950b42d76791b758a5f0146ddb4b104e5af583b34628a354935751e9
sslmode=require");

if ($connect === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  $id = $_GET['id'];
}
//echo ("Connect successfully!");
$del =  "delete from toy where id='$id'";
$data = pg_query($connect,$del);
if ($data) {
  echo "<script>alert('Edited succesfully!, Refresh');</script>";
  header('refresh: 1; url=toyform.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);