<?php
       require_once('config/connect.php');

$name = $_POST['name'];
$acc_no = $_POST['account_no'];
$branch = $_POST['branch'];
$phone_no = $_POST['phn_no'];
$status = $_POST['status'];

$edit_id = $_GET['edit_id'];

//print_r($_POST); exit;

$qry="UPDATE `bank_details` 
        SET `name`='$name',
        `account_no`='$acc_no',
        `branch_name`='$branch',
        `phone_no`='$phone_no',
        `status`='$status'
         WHERE id = '$edit_id'";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=updated');

} else{
    echo "Error please try again";
}

?>