<?php
if(!isset($_SESSION['id'])){
session_start();
}
session_destroy();
 header("Location:log.php");
?>