<?php  
//check.php  
$connect = mysqli_connect("localhost", "root", "", "bdvente"); 
if(isset($_POST["user_email"]))
{
 $mail = mysqli_real_escape_string($connect, $_POST["user_email"]);
 $query = "SELECT * FROM client WHERE email = '".$mail."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>
