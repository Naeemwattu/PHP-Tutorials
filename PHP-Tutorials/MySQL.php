<?php
    echo "Wellcome to Our New DataBase Connection with MySQL <br>";

    // connect to a DataBase
    $servername="localhost";
    $username="root";
    $password="";

    $conn = mysqli_connect($servername, $username, $password);

    // create a connection
    if(!$conn){
        die("Connection was faild: ". mysqli_connect_error());
    }
    else{
        echo("Connection was Successfully....");
    }
?>