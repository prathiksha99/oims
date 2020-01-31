<?php
include 'db.php';
session_start();
if (!isset($_SESSION['empid'])) {
    echo "<script>window.location.href='../access/403.php'</script>";
}
else{
    $globalempname = $_SESSION['empname'];
    $globalempid = $_SESSION['empid'];
}
?>