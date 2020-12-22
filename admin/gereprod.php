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


    <title>Admin Gestion vente</title>  
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
                        <a  href="dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                              <li  >
                        <a   href="categorie.php"><i class="fa fa-sitemap fa-3x"></i> Gére Les catégorie </a>
                    </li> 
                         <li  >
                        <a class="active-menu"  href="gereprod.php"><i class="fa fa-edit fa-3x"></i> Gére Les Produit </a>
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
                     <h2>Gére Produit</h2>   
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
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Gestion des Produit informatique
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Ajout d'un nouveau Produit </h3>


                                    <form role="form" name="ajoutprod" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                        <div class="form-group">
                                            <label>Nom de produit :</label>
                                            <input name="nom" class="form-control" required="true" />
                                        </div>

                                          <div class="form-group">
                                            <label>Prix de produit :</label>
                                            <input name="prix" class="form-control" required="true" pattern="[0-9]+(\.[0-9]{0,2})?%?" title="ce champ accepte que des nombre decimale " />
                                        </div>

                                          <div class="form-group">
                                            <label>Quantité de produit :</label>
                                            <input name="qte" class="form-control" required="true"  pattern="[0-9]{0,6}" title="ce champ accepte que des entier " />
                                        </div>

                                          <div class="form-group">
                                            <label>Selectioner la catégorie du produit :</label>
                                            <select name="gal"class="form-control" required="true"  required="true">
                                              <option value="" disabled selected hidden > choisir la catégorie ...</option>
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
                                                ?>
                                                 <option> <?php echo "$row[1]"?> </option>
                                                <?php
                                                }
                                                mysqli_close($con);
                                                ?>      

                                          </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Description de Produit:</label>
                                            <textarea name="des" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file"  name ="prodimg" id="prodimg" required="true" />
                                        </div>

                                        <button type="submit" name="sub" class="btn btn-primary">Submit Button</button>
                                        <button  type="reset" class="btn btn-default ">Reset Button</button>

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
        <?php
        if(isset($_POST["sub"]))
        {
            $r1=md5(rand(1111,9999)+rand(1111,9999));
            //echo"$r1";
           $image= $_FILES["prodimg"]["name"];
           $target_dir = "C:/wamp/www/pro/bs-digishop-mini/image_produit/".$r1.$image;
           $target_2 = "image_produit/".$r1.$image;
           move_uploaded_file($_FILES["prodimg"]["tmp_name"], $target_dir);

            $con = mysqli_connect("127.0.0.1 ","root","","bdvente");

        // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              mysqli_set_charset($con,"utf8");
              $a1=$_POST["nom"];
              $b1=$_POST['prix'];
              $c1=$_POST['qte'];
              $d1=htmlentities($_POST['des'], ENT_QUOTES);
              $e1=$_POST['gal'];
            $rq = "INSERT INTO produit VALUES (NULL, '$a1', '$b1', '$c1', '$target_2', '$e1' ,'$d1');";
            if (mysqli_query($con, $rq)) {
                /* echo "New record created successfully";*/
                 echo'<div class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>';
            } 
            else 
            {
                echo "Error: " ."<br>" . mysqli_error($con);
            }

            mysqli_close($con);
            }



            
                

            






        

        ?>

        <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" >ID</th>
                                            <th style="text-align: center;"  >nom de produit </th>
                                            <th style="text-align: center;" >Quantité</th>
                                            <th style="text-align: center;" >Prix de Vente</th>
                                            <th style="text-align: center;" >catégorie</th>
                                            <th style="text-align: center;"  >Modifer</th>
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
               $sql = "SELECT idprod,nomprod,quantiteprod,prixprod,categorie from produit ORDER BY idprod;";
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_array($result)) 
                {
                  $id=$row[0];
                ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align: center;"><?php echo"$row[0]";?></td>
                                            <td style="text-align: center;"><?php echo"$row[1]";?></td>
                                            <td style="text-align: center;"><?php echo"$row[2]";?></td>
                                            <td style="text-align: center;"><?php echo"$row[3]";?></td>
                                            <td style="text-align: center;"><?php echo"$row[4]";?></td>
                                            <td style="text-align: center;"> <input type="button" name="edit" value="Edit" id="<?php echo $row[0]; ?>" class="btn btn-info btn-xs edit_data" /> </td>
                                            <td style="text-align: center;"> <a href="#" onclick="confirmer(<?php echo $id?>)" type="button" class="btn-xs btn btn-danger">supprimer</a></td>
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



 <!--Modal insertion -->
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 id="titre" class="modal-title" value"">Modifier Le Produit </h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form" >  
                          <label>Nom de produit:</label>  
                          <input type="text" name="name" id="name" class="form-control  " disabled />  
                          <br />  
                          <label>Prix de produit :</label>  
                          <input type="text" name="prix" id="prix" class="form-control" />  
                          <br />  
                          <label>Quantité Produit :</label>  
                          <input type="text" name="qte" id="qte" class="form-control" />  
                          <br />  
                          <label>Enter Description de Produit :</label>  
                          <textarea name="description" id="description" class="form-control"></textarea>  
                          <br />  
                          <input type="hidden" name="produit_id" id="produit_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
<?php
?>
<!--Modal insertion -->


<!--Script insertion -->


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
    window.location="suprod.php?id="+id;

  } else {
    swal("Suppression Produit Annuler");
  }
});
}
        </script>
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var produit_id = $(this).attr("id");  
           $.ajax({  
                url:"fetchproduit.php",  
                method:"POST",  
                data:{produit_id:produit_id},  
                dataType:"json",  
                success:function(data){  
                     $('#titre').html("Modifier Le Produit :"+data.nomprod);
                     $('#name').val(data.nomprod);  
                     $('#prix').val(data.prixprod);  
                     $('#qte').val(data.quantiteprod); 
                     $('#description').val(data.description); 
                     $('#produit_id').val(data.idprod);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
		  if($('#prix').val() == '')  
           {  
                alert("Svp saisie le Prix a Modifier");  
           }  
           else if($('#qte').val() == '')  
           {  
                alert("Svp saisie Quantité");  
           }  
           else if($('description').val() == '')  
           {  
                alert("Svp saisie la description ");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  

                     }  

                });  
                
           }  
      });  
 
 });  
 </script>
 

<!--Script insertion -->







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
