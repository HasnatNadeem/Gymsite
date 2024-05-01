<?php
session_start();
if (empty($_SESSION['SESSION_ID'])) {
    header('location:account.php');
}
?>