<?php
       require_once('config/connect.php');

//       $qry="select* from bank details";   
//        $row =mysqli_query($con,$qry);




//       echo "<pre>";
//       while ($res = mysqli_fetch_assoc($row)){
//        print_r($res);    
//       }


$name = $_POST['name'];
$acc_no = $_POST['account_no'];
$branch = $_POST['branch'];
$phone_no = $_POST['phn_no'];
$status = $_POST['status'];

//print_r($_POST); exit;

$qry="INSERT INTO `bank_details`( `name`, `account_no`, `branch_name`, `phone_no`, `status`)
 VALUES ( '$name' , '$acc_no', '$branch', '$phone_no', '$status')";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=saved');

} else{
    echo "Error please try again";
}

?>