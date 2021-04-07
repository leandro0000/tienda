<?php 

$host="localhost";
$db="id11152757_final";
$user="id11152757_leandro2"; 
$pass="123456789aass"; 



$conn= new  mysqli($host,$user,$pass,$db);

if (!$conn){

    die ("error al conectar".mysqli_connect_error());

}else {
    echo " ";
}

?>