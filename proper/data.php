<?php 
$arr = [];
$con = new mysqli("localhost", "root", "", "ajax");
$sql = "SELECT * FROM names";

if($result = $con->query($sql) ) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    echo json_encode($arr);
}


