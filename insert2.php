<?php
$CardName = $_POST['CardName'];
$CardNumber = $_POST['CardNumber'];
$SecurityCode = $_POST['SecurityCode'];

if (!empty($CardName) ||  !empty($CardNumber) || !empty($SecurityCode)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "student";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT CardNumber From CreditCard Where CardNumber = ? Limit 1";
     $INSERT = "INSERT Into CreditCard (CardName,CardNumber,SecurityCode) values(?, ?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $CardNumber);
     $stmt->execute();
     $stmt->bind_result($CardNumber);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $CardName, $CardNumber,$SecurityCode);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this CardNumber";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
header("refresh:2;url=billing.html");
?>
