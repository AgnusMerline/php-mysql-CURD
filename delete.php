<?php
       require_once('config/connect.php');

$delete_id = $_GET['delete_id'];

$qry = "DELETE FROM `bank_details` WHERE id = '$delete_id'";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=deleted');

} else{
    echo "Error please try again";
}

?>