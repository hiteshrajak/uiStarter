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

$name= $_POST["U_name"];
$pass= $_POST["Password"]; 

$sql="SELECT Uname,pass FROM user ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if($name==$row["Uname"] && $pass==$row["pass"]){
        echo  " Wellcome to: " . $row["Uname"];
        break;
    }
    else{
        echo  " Invalid user Name Or Password: ";
        break;
    }
}
} else {
    echo "0 results";
}

$conn->close();
?>
</html></body>