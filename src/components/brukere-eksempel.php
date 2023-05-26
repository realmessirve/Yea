<!-- eksempel på hvordan man bruker php for å koble til database -->
<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "secret";
 $dbName = "GetWell.no";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if($conn){
    echo "connected";
 }else{
    echo "not connected";
 }

  ?> 