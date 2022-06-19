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


    // Now Create the Table in MySQL DataBase
    
    $sql= "CREATE TABLE `dbnomi`.`students` ( `S/No` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Roll No` INT(15) NOT NULL , `Department` VARCHAR(20) NOT NULL , PRIMARY KEY (`S/No`))";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "Connection Was Successfully";
    }
    else{
        echo "Connection was Failed Due to Error--->". mysqli_errno($conn);
    }

?>