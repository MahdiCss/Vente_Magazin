    <?php
     session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
?>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "bdvente");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $prix = mysqli_real_escape_string($connect, $_POST["prix"]);  
      $qte = mysqli_real_escape_string($connect, $_POST["qte"]);  
      $des= mysqli_real_escape_string($connect, $_POST["description"]);  
      echo $prix."<br>".$_POST["produit_id"]."<br>".$qte."<br>".$des."<br>";
      if($_POST["produit_id"] != '')  
      {  
           $query = "  
           UPDATE produit   
           SET prixprod ='$prix',   
           quantiteprod ='$qte' 
           WHERE idprod = ".$_POST["produit_id"].""; 
           $message = 'table Updated';  
      }  
       if(mysqli_query($connect, $query))  
      {  
         $output= "New record created successfully";
               header('location:gereprod.php');

      }  
      else
      {
            echo "Error: " . $query . "<br>" . $connect->error;

        $output= "erreur";
      }
      echo $output;  
      header('location:gereprod.php');

    }

?>