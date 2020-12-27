<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$msg = filter_input(INPUT_POST, 'msg');


if (!empty($username)){
if (!empty($email)){
if (!empty($phone)){
if (!empty($msg)){
$servername = "localhost";
$dbusername = "root";
$dbemail = "";
$dbphone = "";
$dbmsg = "";
$dbname = "sports";//add database name
// Create connection
$conn = new mysqli ($servername, $dbusername,$dbemail, $dbphone, $dbmsg, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO spotrs (username, email, phone,msg)
values ('$username','$email','$phone','$msg')";
if ($conn->query($sql)){

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
	echo "msg should not be empty";
die();
}
}
else{
	echo "phone should not be empty";
die();
}
}
else{
	echo "email should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>