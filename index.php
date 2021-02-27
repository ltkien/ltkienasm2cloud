<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="asm1.css">
  <title> ATN shop</title>
  <link rel="icon" href="label.ico">
  
</head>


<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="registration.php">Registration <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Contact us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100026494092401">Facebook</a>
            <a class="dropdown-item" href="https://www.instagram.com/ltkien_10/">Instagram </a>

          </div>
        <li class="nav-item">

          <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdbWvEjb_DXsaKbzK1mkx50Fh189j3w3ALQ3mR-MSUa6V32kQ/viewform" target="_blank">Feedback</a>
        </li>

        </li>

      </ul>
      <a class="navbar-brand" href="index.php"><strong><i class="icon fas fa-store"></i> ATN store</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>





  <div class="row">
    <div class="col-5"></div>
    <div class="col-2">
      <!-- Example single danger button -->
      <div class="btn-group">
        <h1 >
          Login page for boss
        </h1>
        
      </div>
    </div>
    <div class="col-5"></div>
  </div>


  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <form action="checkLogin.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted btn btn-warning">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember password</label>
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
      </form>
    </div>
    <div class="col-2"></div>
  </div>


  <div class="row">
    <div class="col-5"></div>
    <div class="col-2">
      <!-- Example single danger button -->
      
      <a class="btn btn-secondary" href="loginStaff.php" role="button">Login for staff</a>
      
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Connect with 
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="https://vi-vn.facebook.com/login/" target="_blank">Facebook</a>
          <a class="dropdown-item" href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F1%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F1%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Gmail</a>
        </div>
      </div>
    </div>
    <div class="col-5"></div>
  </div>






  







</body>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>