<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "sohailportfolio";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
//   echo "Successfull";
// }
// else{
  echo "Failed to connect";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["msg"];

  // $exists = false;
  // check whether this username exist
  $sql = "INSERT INTO `data` ( `name`, `email`, `subject`, `message`, `dt`) VALUES ('$name', '$email', ' $subject ', ' $message', current_timestamp())";
  $result = mysqli_query($conn , $sql);
   
  if($result){

    header("location: index.html");
  }
  


}
?>