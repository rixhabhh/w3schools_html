<?php



    

    $hName='localhost'; // host name

    $uName='root';   // database user name

    $password='Rishabh@12345';   // database password

    $dbName = "my_db"; // database name

    $conn= mysqli_connect($hName,$uName,$password,$dbName);

      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
      }

      include "submit.php";
?>