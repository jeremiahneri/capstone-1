<?php
include "admin/includes/database.php";
session_start();

$id = $_GET['ReservationID'];
$status = "Booking Cancelled";
// echo $id;

$updateStatus = "UPDATE `reservation` SET `Status`='$status' WHERE `ReservationID` = $id";
mysqli_query($conn, $updateStatus);

header('location: mybookings.php')
?>