<?php
include "connection.php";
    $oid=$_GET['oid'];
	$sql = "delete from organinfo where oid='$oid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one organ.";
	header("location:../organinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../organinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>
