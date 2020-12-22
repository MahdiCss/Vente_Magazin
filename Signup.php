
<?php
// define variables and set to empty values


$con = mysqli_connect("127.0.0.1 ","root","","bdvente");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
 
$mail=$_POST["mail"];
$nom=$_POST["nom"];
$pre=$_POST["prenom"];
$phon=$_POST["phon"];
$cin=$_POST["cin"];
$adr=$_POST["adr"];
$pass=$_POST["pwd"];
}
  
$sql ="INSERT INTO `client` (`id`, `email`, `pass`, `nom`, `prenom`, `tel`, `adresse`, `cin`, `etat`) VALUES (NULL, '$mail', '$pass', 'nom', '$pre', '$phon', '$adr', $cin, 'non bloque');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:succes.php");
} else {
  header("location:failsig.php");
}

$con->close();


?>