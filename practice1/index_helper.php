<?php

$answer = $_POST['found'];

/*-------------------------add---------------------*/

if ($answer == "Add") {          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    $name = $_POST['register_name'];
    $email = $_POST['register_email'];
    $phno = $_POST['register_number'];
    $add = $_POST['register_address'];
    
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die ("Connection nahi hua" . $conn->connect_error);
    }

    $sql = "
            INSERT INTO student (email, name, phone, address)
            VALUES ( '$email','$name', $phno, '$add')
    ";

    if ($conn->query($sql) === TRUE) {
        
            $conn->close();
    } else {
        echo "ERROR GUESS KARO". $conn->error;
        $conn->close();
    }
}

/*--------------------update-------------------------*/

if ($answer == "Update") {          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    $name = $_POST['register_name'];
    $email = $_POST['register_email'];
    $phno = $_POST['register_number'];
    $add = $_POST['register_address'];
    
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die ("Connection nahi hua" . $conn->connect_error);
    }

    $sql = "
            UPDATE student
            set name='$name', phone='$phno', address='$add'
            where email='$email';
    ";

    if ($conn->query($sql) === TRUE) {
        
            $conn->close();
    } else {
        echo "ERROR GUESS KARO". $conn->error;
    }
}

/*-------------select-----------------*/
if ($answer == "View") {          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    $name = $_POST['register_name'];
    $email = $_POST['register_email'];
    $phno = $_POST['register_number'];
    $add = $_POST['register_address'];
    
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die ("Connection nahi hua" . $conn->connect_error);
    }

    $sql = "
            Select * from student where email='$email';
    ";

    $result = $conn->query($sql);
    if ($result){  
        if ($result->num_rows > 0){
            while($row= $result->fetch_assoc()){

            }}}
    echo '
        <script>
         document.getElementById("register_name").value = '.$.'
        </script>
    ';
    
    if ($conn->query($sql) === TRUE) {
        
            $conn->close();
    } else {
        echo "ERROR GUESS KARO". $conn->error;
    }


   

}


 /*----------------delete-------------------*/

 if ($answer == "Delete") {          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    $name = $_POST['register_name'];
    $email = $_POST['register_email'];
    $phno = $_POST['register_number'];
    $add = $_POST['register_address'];
    
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die ("Connection nahi hua" . $conn->connect_error);
    }

    $sql = "
            DELETE FROM student WHERE email='$email';
    ";

    if ($conn->query($sql) === TRUE) {
        
        $conn->close();
    } else {
        echo "ERROR GUESS KARO". $conn->error;
    }


   

}

echo "
<script type=\"text/javascript\">
    window.location ='http://localhost/exam/index.php';
</script>
";


?>