<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "LTKSneaker";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  $email = $_POST["email"];
  $userPassword = $_POST["password"];
  $sql = "SELECT * FROM User WHERE Email = '$email' and Password = '$userPassword'";
  $result = $conn->query($sql);

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if($count == 1) {
      //session_register("myusername");
      //$_SESSION['login_user'] = $myusername;
      echo "Login succesfully";
      //echo "Email: " . $row["Email"]. " - Password: " . $row["Password"]. "<br>";
      header("location: asm1.php");
  }else {
      //echo "Your Login Name or Password is invalid";
      header("location: loginFail.php");
  }
  
?>