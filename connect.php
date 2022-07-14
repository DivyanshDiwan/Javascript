<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 $name = $_POST['phpname'];
 $email = $_POST['phpemail'];
 $message = $_POST['phpmessage'];

 //Database Connection
$host = "localhost";
$username = "id17806969_divyansh";
$password = "=*X%_@$4W{@h/?Uv";
$dbname = "id17806969_contactform";

$conn = new mysqli($host,$username,$password,$dbname);
if(!$conn){
    echo "Not Connected...";
}else{
    $stmt = $conn->prepare("INSERT INTO Contactform (Name, Email, Message)
    VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    include './contact.html';
    $stmt->close();
    $conn->close();
}

?>
