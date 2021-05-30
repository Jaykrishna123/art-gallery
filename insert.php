<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($email) ||  !empty($password)) {
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "student";
    //create connection
 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
 if (mysqli_connect_error())
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
else {
   $SELECT = "SELECT email From trial Where email = ? Limit 1";
   $INSERT = "INSERT Into trial (email,password) values(?, ?)";
     //Prepare statement
   $stmt = $conn->prepare($SELECT);
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt->bind_result($email);
   $stmt->store_result();
   $rnum = $stmt->num_rows;
   if ($rnum==0) {
    $stmt->close(); 
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    echo "New record inserted sucessfully";
  } else {
    echo "Someone already register using this email";
  }
  $stmt->close();
  $conn->close();
}
}  
else {
 echo "All field are required";
 die();
}
header("refresh:2;url=index.html");
?>
