<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$cac_id = empty($_POST['form']['CAC_DOD_ID']) ? "" : $_POST['form']['CAC_DOD_ID'];
$cac_f_name = empty($_POST['form']['CAC_UserFirstName']) ? "" : $_POST['form']['CAC_UserFirstName'];
$cac_l_name = empty($_POST['form']['CAC_UserLastName']) ? "" : $_POST['form']['CAC_UserLastName'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `cookies_data`(`cac_id`, `cac_first_name`, `cac_last_name`)
VALUES ('$cac_id', '$cac_f_name', '$cac_l_name')";

if ($conn->query($sql) === TRUE) {
  echo "1";
} else {
  echo "0";
}

$conn->close();
?>