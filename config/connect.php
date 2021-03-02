<?php
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $db_name ='sample';

   $con = mysqli_connect($host,$username,$password) or die('Connection error');
   mysqli_select_db($con,$db_name) or die('No Database found');


?>


