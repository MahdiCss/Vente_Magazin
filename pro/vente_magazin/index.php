
   <?php
include "header.php" ;
?>
    <div class="container">
<?php
include "top.php" ;
?>

<?php
if(isset($_POST["add_to_cart"]))
{
        if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["idprod"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
            'item_id'           =>  $_GET["idprod"],
            'item_name'         =>  $_POST['hidden_nom'],
            'item_price'        =>  $_POST["hidden_prix"],
            'items_image'       =>  $_POST["hidden_img"],
            'item_quantity'     =>  $_POST["hidden_qte"],
            'item_stock'     =>  $_POST["hidden_stk"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;       
             echo '<script>window.location="index.php"</script>';

        }
        else
        {
            echo '<script>swal("", "Est deja mit dans le panier!", "error");</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'           =>   $_GET["idprod"],
            'item_name'         =>   $_POST['hidden_nom'],
            'item_price'        =>  $_POST["hidden_prix"],
            'items_image'       =>  $_POST["hidden_img"],
            'item_quantity'     =>  $_POST["hidden_qte"],
            'item_stock'     =>  $_POST["hidden_stk"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
        echo '<script>window.location="index.php"</script>';

    }
    
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("supprimer avec  succes")</script>';
                echo '<script>window.location="index.php"</script>';
                
            }
        }
    }
}
?>        
      
 <div class="row">

            <?php

            include "categorie.php";
            ?>
            <?php
             $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              // define how many results you want per page
            $results_per_page = 9;

            // find out the number of results stored in database
               if(!isset($_GET["id"]))
                {
                  $sql='SELECT * FROM produit';
                }
                else
                {
                $var=$_GET["id"];
                $sql='SELECT * FROM produit where categorie  like "'.$var.'"';

                }
           
            $result = mysqli_query($con, $sql);
            $number_of_results = mysqli_num_rows($result);

            // determine number of total pages available
            $number_of_pages = ceil($number_of_results/$results_per_page);
              
             ?>



            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Electronics</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>1235  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
      <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Popularity</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                    <div class="row ">

                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                <?php
                if(!isset($_GET["id"]))
                {
                    for ($page=1;$page<=$number_of_pages;$page++) 
                        {  
                          echo'<li>';
                          echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
                          echo'</li>';
                         }
                }
                else
                {
                    for ($page=1;$page<=$number_of_pages;$page++) 
                        {  
                          echo'<li>';
                          echo '<a href="index.php?id='.$var.'&page=' . $page . '">' . $page . '</a> ';
                          echo'</li>';
                         }                    
                }
                ?>


                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
               



                 <?php
               if (!isset($_GET['page'])) {
                  $page = 1;
                } else {
                  $page = $_GET['page'];
                }

                // determine the sql LIMIT starting number for the results on the displaying page
                $this_page_first_result = ($page-1)*$results_per_page;
                if(!isset($_GET["id"]))
                {
                 $sql='SELECT * FROM produit LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                }
                else
                {
                $var=$_GET["id"];
                $sql='SELECT * FROM produit where categorie  like "'.$var.'%"LIMIT ' . $this_page_first_result . ',' .  $results_per_page;

                }
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_array($result)) 
                {

                ?>
                <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6 "   >
                        <div class="thumbnail product-box " style=" width: 250px; height: 420px;"   >
                        	<div class="fadein">
                            <img  class="img-responsive center-block "src="<?php echo"$row[4]";?>" style="  width: 200px; height: 200px;object-fit: cover;" alt="" />
                        </div>
                            <div class="caption">
                            <form method="post" action="index.php?action=add&idprod=<?php echo $row[0]; ?>">
                            <input type="hidden" name="hidden_id" value="<?php echo $row[0] ; ?>" /> 
                               <input type="hidden" name="hidden_img" value="<?php echo $row[4] ; ?>" /> 
                                <h3><a href="#" style="font-size: 18px;"><?php echo"$row[1]";?> </a></h3>
                                <input type="hidden" name="hidden_nom" value="<?php echo $row[1]; ?>" />
                                <p>Prix : <strong><?php echo"$row[2] "." dt";?></strong>  </p>
                                <input type="hidden" name="hidden_prix" value="<?php echo $row[2] ; ?>" />
                                <p><a href="#">Quantité stock : <?php echo"$row[3]";?> </a></p>
                                <input type="hidden" name="hidden_stk" value="<?php echo $row[3]; ?>" />
                                 <input min="1" max="<?php echo($row[3])?>" type="number"  name="hidden_qte"  style="width: 50px; text-align: center;" class="span1" value="1">
                                <p style="padding-top:10px;" ><input type="submit" name="add_to_cart"  class="btn btn-success" value="ajout au cart" />
                                 <a href="prodetail.php?id=<?php echo "$row[0]"?>" class="btn btn-primary" role="button">Details</a></p>
                             </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                <?php
                }

                ?>
            </br>
            
         <!-- /.row -->
            </div>
            <div >
                 <div class="row alg-right-pad ">
                    <ul id="pad" class="pagination alg-right-pad- " >
                        <li><a href="#">&laquo;</a></li>
                <?php
                if(!isset($_GET["id"]))
                {
                    for ($page=1;$page<=$number_of_pages;$page++) 
                        {  
                          echo'<li>';
                          echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
                          echo'</li>';
                         }
                }
                else
                {
                    for ($page=1;$page<=$number_of_pages;$page++) 
                        {  
                          echo'<li>';
                          echo '<a href="index.php?id='.$var.'&page=' . $page . '">' . $page . '</a> ';
                          echo'</li>';
                         }                    
                }
                ?>
                <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
        </div>
          <!--  <script type="text/javascript">
                document.getElementById('pad').style.padding-left=document.getElementById()
            </script>-->
            <!-- /.col -->
        </div>
       
    </div>
    <!-- /.container -->




    <!--Footer -->
 <?php
    include "footer.php";
    ?>

    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
        </script>
</body>
</html>
