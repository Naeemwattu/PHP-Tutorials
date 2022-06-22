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
    echo"Connection was Successfully <br>";
}

// using where clause in database query
$sql = "SELECT * FROM `form` WHERE `Name`= 'Qayyum'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo  $num. ". Record found in the DataBase. <br>";

$no=1;
if ($num>0) {
    while($row=mysqli_fetch_assoc($result)){
        echo $no. ". Hello " . $row['Name'] . " Wellcome to " . $row['Subject'];
        echo '<br>';
        $no = $no+1;
    }
}
echo "--------------------------------------------";
// Update records in database

$sql = "UPDATE `form` SET `Subject` = 'BS-IT' WHERE `form`.`S.No` = 2;";
$result= mysqli_query($conn, $sql);
echo "<br>";
echo var_dump($result);

$aff= mysqli_affected_rows($conn);
echo "<br> Number of Effected rows: $aff <br>";
if ($result) {
    echo "Update Records Successfully Cahnge.";
}else{
    echo "Cannot Chamnge Records in form.";
}





?>