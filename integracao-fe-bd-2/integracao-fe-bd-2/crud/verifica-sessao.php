<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
  header('location:login.php');
}
?>