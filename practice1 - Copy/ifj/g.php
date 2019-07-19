<?php
$servername = "localhost";
$uname = "root";
$p = "";
$db = "mydb";

$conn = mysqli_connect($servername,$uname,$p,$db);

if (!$conn){
    die( " Connection failed" . mysqli_connect_error());
}


$query = "SELECT * FROM lalala";

$res = mysqli_query($conn,$query) or die("Query Not Executed " . mysqli_error($conn));

$data_array = array();
while($rows =mysqli_fetch_assoc($res))
{
    $data_array[] = $rows;
}

$fp = fopen('studRecords.json', 'w');

if(!fwrite($fp, json_encode($data_array))){
    die('Error : File Not Opened. ' . mysql_error());

}
else{
    echo "Data Retrieved Successully!!!";
}

fclose($fp);
mysqli_close($conn);
?>