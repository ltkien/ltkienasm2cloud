<?php
session_start();
if (isset($_SESSION["email"])) {
  include('Toy.php');
} else {
  header('Location: ./Toy.php');
}
