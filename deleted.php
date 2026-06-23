<?php
include "connection.php";
    $odid=$_GET['odid'];
	$sql = "delete from organdinfo where odid='$odid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one organ.";
	header("location:../organdinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../organdinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>
