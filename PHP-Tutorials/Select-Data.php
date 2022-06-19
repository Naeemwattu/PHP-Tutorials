<?php
// Connecting to the DataBase
$servername= 'localhost';
$username='root';
$password='';
$database='nomi';

$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not  Successfully

if(!$conn){
   die("sorry we Failed to connect" . mysqli_connect_errno());
}
else{
    echo"Connection was Successfully";
}

$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);
echo "<br>";

// find the number of records returned
$num= mysqli_num_rows($result);
echo "$num Number of record returned";
echo"<br>";

// Display the rows returned by the sql query

// if ($num>0) {
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     echo "<br>";
// }


// we can fetch in a better way to using while loop
if($num>0)
    while($row= mysqli_fetch_assoc($result)){
        echo var_dump($row);
        echo "<br>";
        echo "<br>";
    }     
?>