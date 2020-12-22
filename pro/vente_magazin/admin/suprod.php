      <script src="js/sweetalert.min.js"></script>

    <?php
     session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
?>
<?php
 $ref= $_GET['id'];
     session_start();
if(!isset($_SESSION['login']))
{
    header('location:index.php');
}
 

 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
                if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
    $sql='DELETE FROM produit WHERE idprod ='.$ref;
    mysqli_query($con,$sql);
    echo '<script>';
    echo 'swal("Le produit a été supprimer avec succés", {icon: "success",});';
    echo'<script>';
        header('location:gereprod.php');

    ?>