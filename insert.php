<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$min = $_POST['min'];
if (!empty($name) || !empty($email) || !empty($phone) || !empty($services) || !empty($date) || !empty($hour) || !empty($min)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root@123";
    $dbname = "splash_carwash";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From booking Where email = ? Limit 1";
     $INSERT = "INSERT Into booking (name,email,phone,services,date,hour,min) values(?, ?, ?, ?, ?, ?,?)";
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
      $stmt->bind_param("ssissii", $name, $email, $phone, $services, $date, $hour,$min);
      $stmt->execute();
      echo "New record inserted sucessfully";
      header ("Location: index.php");
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
