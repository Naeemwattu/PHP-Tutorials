<?php
    // echo "Wellcome to Our New DataBase Connection with MySQL <br>";

    // connect to a DataBase
    $servername="localhost";
    $username="root";
    $password="";
    $database="dbnomi";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // create a connection
    if(!$conn){
        die("Connection was faild: ". mysqli_connect_error());
    }
    else{
        echo("Connection was Successfully.... <br>");
    }

    // Variable inserted to in table
    $name = "Khawaja Moosa";
    $rollNo = 18;
    $department ="BS-IT";


    // SQL Query to be executed in student table
    
    $sql= "INSERT INTO `students` (`S/No`, `Name`, `Roll No`, `Department`) VALUES (NULL, '$name', '$rollNo', '$department')";


    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "Connection Was Successfully";
    }
    else{
        echo "Connection was Failed Due to Error--->". mysqli_errno($conn);
    }

?>