<?php
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Address = $_POST['Address'];
$Address2 = $_POST['Address2'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$PhoneNumber = $_POST['PhoneNumber'];



if (!empty($First_Name) ||  !empty($Last_Name) ||  !empty($Address) ||  !empty($Address2)
     ||  !empty($City) ||  !empty($State) ||  !empty($Zip) ||  !empty($PhoneNumber)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "student";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
      $SELECT = "";
      $SELECT = "SELECT PhoneNumber From shipping Where PhoneNumber = ? Limit 1";

     $INSERT = "INSERT Into shipping (First_Name,Last_Name,Address,Address2,City,State,Zip,PhoneNumber) values(?, ?,?,?,?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s",$PhoneNumber);
     $stmt->execute();
     $stmt->bind_result($PhoneNumber);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss", $First_Name, $Last_Name,$Address,$Address2,$City,$State,$Zip,$PhoneNumber);
      $stmt->execute();
      echo "New record inserted sucessfully";
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
