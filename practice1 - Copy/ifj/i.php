<?php 
//connect and select the database 
$servername = "localhost";
$uname = "root";
$p = "";
$db = "mydb";

$conn = mysqli_connect($servername,$uname,$p,$db);

if (!$conn){
    die( " Connection failed" . mysqli_connect_error());
}

// get the contents of the JSON file 
$jsonCont = file_get_contents('s.json'); 

//decode JSON data to PHP array 
$content = json_decode($jsonCont, true); 

//Fetch the details of Student 
$sname = $content['name']; 
$semail = $content['email'];
$spass = $content['pass'];  
$sage = $content['age']; 
  
  //Insert the fetched Data into Database
  $query = "INSERT INTO lalala(naav,email,pass,age) values (?,?,?,?)";

  $ustmt = mysqli_prepare($conn,$query);
  mysqli_stmt_bind_param($ustmt,'sssi',$sname,$semail,$spass,$sage);
  
  if (mysqli_stmt_execute($ustmt)){
       echo "JHALA RE TU ADD";
   }
   else{
       echo "LUCK NAHI TUJA CHANGLA" . "Ha error aala-" . mysqli_error($conn) ;
   }
?>