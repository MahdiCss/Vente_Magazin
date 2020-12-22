
<script src="js/jquery.min.js"></script> 

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<?php
include "header.php";
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>
<?php
include "categorie.php"
?>
      <div class="row" style="text-align: center;">
                <div class="col-lg-8 alg-rigth-pad ">
                    <!-- Form Elements -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            PANIER
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
             <table id="cart_table" class="table table-bordered">
              <thead>
                <tr style="background-color: #e3ecf9">
                  <th style="text-align: center">Produit</th>
                  <th style="text-align: center" >nom</th>
                  <th style="text-align: center" >Quantité</th>
                  <th style="text-align: center" >Prix unitaire</th>
                  <th style="text-align: center" >Remise</th>
                  <th style="text-align: center" >Tax</th>
                  <th style="text-align: center" >Prix </th>
                  <th style="text-align: center" >action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $total=0;
                 if(!empty($_SESSION["shopping_cart"]))
                 {
                    
                   foreach($_SESSION["shopping_cart"] as $keys => $values)
                     {
                        $total =$total+ calculerprix($values["item_quantity"],$values["item_price"]);
                    $img=$values["items_image"];
                    $qte=$values["item_quantity"];
                    $stk=$values["item_stock"];
                     ?>
                <tr>
                  <td> <img width="60" src="<?php echo"$img";?>" alt=""/></td>
                  <td style="text-align: center; padding-top: 25px;"><?php echo $values["item_name"]; ?></td>
                  <td style="text-align: center; padding-top: 25px;" class="">  <input disabled type="text" id="<?php echo $values['item_id'] ?>"  style="width: 50px; text-align: center;" class="span1 " value="<?php echo $qte?>" style="padding-top:10px;" >   
                 <button type="button" id="<?php echo $values['item_id'] ?>" class="btn btn-primary btn-xs edit_data">
			      <span class="fa fa-plus"></span>
			    </button>
			     <button type="button" id="<?php echo $values['item_id'] ?>" class="btn btn-danger btn-xs edit_moin">
			      <span class="fa fa-minus"></span>
			    </button></td>
                  <td style="text-align: center; padding-top: 25px;"> <?php echo $values["item_price"]; ?></td>
                  <td style="text-align: center; padding-top: 25px;">--</td>
                  <td style="text-align: center; padding-top: 25px;">18%</td>
                  <td style="text-align: center; padding-top: 25px;"><?php echo calculerprix($values["item_quantity"],$values["item_price"]); ?></td>
                   <td style="text-align: center; padding-top: 15px;"><a class="btn btn-danger" href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php
                }
            }
                ?>
                <tr>
                  <td colspan="6" style="text-align:right;">Sous-total: </td>
                  <td> <?php echo $total ?></td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Expédition et traitement </td>
                  <td> gratuit</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:</td>
                  <td> <?php echo $total ?></td>
                </tr>
                </tbody>
            </table>

                                </div>
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
include "footer.php";
function calculerprix($qte,$prix)
{   
    $tprix=$qte*$prix;
    return $tprix;
}
?>
<script>  
 $(document).ready(function(){  
   $(document).on('click', '.edit_data', function(){  
     var produit_id = $(this).attr("id");  
    /* var Quantite=$(this).attr("value");*/
     $.ajax({
      url:'updateqte.php',
      method:"POST",
      data:{produit_id:produit_id},
      success:function(data)
      {
      $('#cart_table').html(data);  

      }
     })

  });
 });  
 $(document).ready(function(){  
   $(document).on('click', '.edit_moin', function(){  
     var produit_id = $(this).attr("id");  
    /* var Quantite=$(this).attr("value");*/
     $.ajax({
      url:'updatemoin.php',
      method:"POST",
      data:{produit_id:produit_id},
      success:function(data)
      {
      $('#cart_table').html(data);  

      }
     })

  });
 });  
</script>