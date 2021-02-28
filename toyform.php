<?php
session_start();
if (isset($_SESSION["email"])) {
  include('toy.php');
} else {
  header('Location: ./index.php');
}