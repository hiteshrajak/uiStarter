<!doctype html>
<html>

<head>
    <title>
    Signup
    </title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"href="css/style.css">
    

</head>

<body>

    
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $name= $_POST["userName"];
  $pass= $_POST["psw"]; 

$sql = "INSERT INTO user ( Uname, pass)
VALUES ('$name', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    
</body>

</html>