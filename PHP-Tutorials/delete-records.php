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


$sql="DELETE FROM `form` WHERE `form`.`Subjectxa` = 'BS-BOTONY'";
$result=mysqli_query($conn,$sql);

$aff = mysqli_affected_rows($conn);
echo "<br> Number of Effected Rows: $aff <br>";

if ($result) {
    echo "Deleted Records Successfully.";
}else{
    $err= mysqli_errno($conn);
    echo "Can't Deleted Record due to Servewr Error. $err";
}

?>