<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
// define variables and set to empty values
$login = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  $login = test_input($_POST["mail"]);
  $pass = test_input($_POST["pws"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$con = mysqli_connect("127.0.0.1 ","root","","bdvente");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $sql = "SELECT id FROM client where `email`= '$login' and pass= '$pass' and `etat`!='bloque' ";
    if($result = mysqli_query($con, $sql))
    {
    $rowcount=mysqli_num_rows($result);
  }
   
    if( $rowcount==1)
    {
     		      session_start();
       $_SESSION["client"] = "$login";

		header("location:index.php");
       }
      else
        {

          header("location:relogin.php");
        }
     
$con->close();



?>