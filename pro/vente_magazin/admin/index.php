<?php
      session_start();
if(isset($_SESSION['login'])){
    header('location:dashbord.php');
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/sweetalert.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<title>gestionvente</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;background-image:url("back.jpg"); }
* {box-sizing: border-box;    font-family: 'ABeeZee';font-size: 22px;
}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
#contain
{
    width: 500px;
    padding: 40px;
    padding-top: 15px;
    margin-top: 150px;
    margin-bottom: 100px;
    margin-right: auto;
    margin-left: auto;
    background-color: white;
    border: 5px solid black;
}
</style>
</head>
<body>
<div id="contain" >
<form style="max-width:500px;margin:auto;" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
  <h2 style="text-align: center; color:   #1E90FF;">Admin login</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Login" name="login" required="true">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" required="true" name="pass">
  </div>

  <button type="submit" name="sub" class="btn">Register</button>
</form>
</div>
<?php
// define variables and set to empty values
$login = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  $login = test_input($_POST["login"]);
  $pass = test_input($_POST["pass"]);
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

$sql = "SELECT logadmin,passadmin from adminlog;";
$result = $con->query($sql);


if ($result->num_rows > 0 && isset($_POST['sub'])) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if( $row["logadmin"]==$login && $row["passadmin"]==$pass && $login!=null)
       {
      session_start();
      $_SESSION["login"] = "$login";
      header("location:dashbord.php");
       }
       else
        {
          echo '<script>';
          echo 'swal("Erreur!", "tu doit verifier le login et le mot de pass ", "error");';
          echo '</script>';
        }
    }
} else {
    echo "";
}
$con->close();



?>

</body>
</html>