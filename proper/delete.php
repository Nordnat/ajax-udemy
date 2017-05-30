<?php 
$uid = $_POST['uid'];
$con = new mysqli("localhost", "root", "", "ajax");
$sql = "DELETE FROM names WHERE id = '".$uid."'";

if($con->query($sql) === TRUE) {
    echo 'DELETED...';
} else {
    echo 'FAILED...';
} 
?>
