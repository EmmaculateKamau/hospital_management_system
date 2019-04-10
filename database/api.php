<?php
$host='127.0.0.1';
$root='root';
$password='';
$database='likomn';



$con=mysqli_connect($host,$root,$password,$database)or die("unable to connect");
//select all the infor from one specific table
$sql="SELECT * FROM login";
$results=mysqli_query($con,$sql);

$content=array();

//convert the table results into a json array
while($row=mysqli_fetch_array($results)){

$temp=array();
$temp['id']=$row['id'];
$temp['password']=$row['password'];
$temp['ussername']=$row['ussername'];




array_push($content,$temp);


}
//show encoded json array
echo json_encode($content);
?>