<?php
//$username=$POST["username"];
//$password=$POST["password"];
$username="user";
$password="pass";


//$name=null;

$db=mysqli_connect("localhost","root","","likomn");
$data=$db->query("SELECT * FROM'login' WHERE 'username'='".$username."'AND'password'=' ".$password."'; ");
while ($row=mysqli_fetch_array($data)) {
	$name=$row["username"]."<br>";
}
if($name==null){
	echo "the username".$username."doesn't exists please sign up";
}
else{
	echo "<p>hallo".$name;
}
?>

