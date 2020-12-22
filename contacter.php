<?php
$con = mysqli_connect("127.0.0.1 ","root","","bdvente");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
{
 
$mail=$_POST["email"];
$nom=$_POST["nom"];
$mes=$_POST["message"];
$d=date("Y-m-d");
}
  
$sql ="INSERT INTO `contact` (`id`, `nom`, `email`, `message`,`date`)VALUES (NULL, '$nom', '$mail', '$mes','$d');";
if ($con->query($sql) === TRUE) {
    header("location:index.php");
}
$con->close();


?>