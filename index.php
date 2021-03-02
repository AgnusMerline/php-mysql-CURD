<?php
    require_once('config/connect.php');

    $qry = "SELECT `id`, `name`, `account_no`, `branch_name`, `phone_no`, `status` FROM `bank_details`";

    $exec = mysqli_query($con, $qry);


    // while($row = mysqli_fetch_assoc($exec)){
    //     $res[] = [
    //         'name' => $row['name']
    //     ];
    // }


    echo "test";
   echo "test 2";

    while($row = mysqli_fetch_object($exec)){
        $res[] = [
            'id' => $row->id,
            'name' => $row->name,
            'account_no' => $row->account_no,
            'branch_name' => $row->branch_name,
            'phone_no' => $row->phone_no,
            'status' => $row->status
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <a class="btn btn-success float-right" href="new_bank.php">New Bank</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <?php
                    if(isset($_GET['formstatus'])){
                         if($_GET['formstatus'] == 'updated'){
                            ?>
                                <div class="alert alert-success">Updated Successfully....</div>
                            <?php
                         } else if($_GET['formstatus'] == 'deleted') {
                            ?>
                            <div class="alert alert-success">Deleted Successfully....</div>
                            <?php
                         } else {
                            ?>
                            <div class="alert alert-success">Inserted Successfully....</div>
                            <?php
                         }   
                    }
                 ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Account No</th>
                            <th>Branch</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($res as $item){
                             ?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td><?php echo $item['account_no']; ?></td>
                                <td><?php echo $item['branch_name']; ?></td>
                                <td><?php echo $item['phone_no']; ?></td>
                                <td><?php echo $item['status']; ?></td>
                                <td>
                                    <a href="edit_bank.php?edit_id=<?php echo $item['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="delete.php?delete_id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php    
                            }
                        ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="asset/js/jquery3.5.1.js"></script>
</body>
</html>