<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>control panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <script src="js/sweetalert.min.js"></script>


    <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 
</head>
<body>
    <?php
     session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}
?>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashbord.php">Gestion Ventes</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo"Bonjour Mr/Mmd ".$_SESSION['login'];?> &nbsp; <a href="Logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="dashbord.php"> <i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li  >
                        <a class="active-menu"  href="form.php"><i class="fa fa-sitemap fa-3x"></i> Gére Les catégorie </a>
                    </li>	
                                                     <li  >
                        <a   href="gereprod.php"><i class="fa fa-edit fa-3x"></i> Gére Les Produit </a>
                    </li> 
                   <li>
                        <a  href="gereclient.php"><i class="fa fa-group fa-3x"></i> Gére Les Client</a>
                    </li>  
                     <li  >
                        <a href="gerecmd.php"><i class="fa fa-group fa-3x"></i> Gére Les Commande </a>
                    </li>                                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Gére Categorie</h2>   
                        <?php 
                        echo"<h5>Bonjour Mr/Mmd ".$_SESSION['login'].", Love to see you back. </h5>";

                        ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        Ajout d'un Categorie
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" name="ajoutprod" method="post" enctype="multipart/form-data" action="addcat.php">
                                        <div class="form-group">
                                            <label>Nom de Categorie :</label>
                                            <input name="nom" class="form-control" required="true" />
                                        </div>
                                        <button type="submit" name="sub" class="btn btn-primary">Ajouter</button>
                                        <button  type="reset" class="btn btn-default  ">Reset</button>

                                    </form>
                                    <br /></div>
                     <!-- End Form Elements -->
                     <!------------------------>
                      
                </div>
                
            </div>
            
                
    </div>

             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
        </div>


        <div class="panel panel-default">
                        <div class="panel-heading">
                             liste des catégorie et sous catégorie
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" >ID</th>
                                            <th style="text-align: center;"  >nom categorie </th>
                                            <th style="text-align: center;" >supprimer</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                <?php
                 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
                if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
               $sql = "SELECT * FROM categorie;";
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_array($result)) 
                {
                   $id=$row[0];
                ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align: center;"><?php echo"$row[0]";?></td>
                                            <td style="text-align: center;"><?php echo"$row[1]";?></td>
                                            <td style="text-align: center;"> <a href="#> "onclick="confirmer(<?php echo $id ?>)" type="button" class=" btn btn-danger">supprimer</a></td>
                                        </tr>
                                       <!-- bootstrap model  -->

                                        
                <?php
              }


                ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<script>
  function confirmer(id)
  {
swal({
  title: "Tu est sure?",
  text: "Vouler vous supprimer cette Categorie ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location="suppcat.php?id="+id;

  } else {
    swal("Suppression Categorie Annuler");
  }
});
}
        </script>

    <!--End Advanced Tables -->
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- les SCRIPTS de data table  -->
     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
