    <?php
     session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
?>
 <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "bdvente");  
 if(isset($_POST["produit_id"]))  
 {  
      $query = "SELECT * FROM produit WHERE idprod ='".$_POST["produit_id"]."'";
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>