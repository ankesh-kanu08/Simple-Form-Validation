<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contact = $_POST['contact'];
        $age = $_POST['age'];
        $email = $_POST['email'];

      // Connecting to the Database
$host= "localhost";
$user= "root";
$password= "";
$dbname= "mydb";

      // Create a connection
$conn = mysqli_connect($host, $user, $password, $dbname);



if(!$conn){
    die("Sorry failed to connect:".mysqli_connect_error());

}
else{
    $sql =" INSERT INTO `detail` (`First Name`, `Last Name`, `Age`, `Contact`, `Email`) VALUES
    ('$firstname', '$lastname', '$age', '$contact', '$email')";
 

   $result = mysqli_query($conn, $sql); 
}
}
header("location:index.php");
?>
