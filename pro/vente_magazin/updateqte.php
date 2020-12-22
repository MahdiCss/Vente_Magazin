<?php
     session_start();

if(!empty($_POST))  
 { 
 	$output = ''; $total=0;$quantite=0;

 	 if(!empty($_SESSION["shopping_cart"]))
         { $count = count($_SESSION["shopping_cart"]);
         	  foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
           	if($values["item_id"]==$_POST["produit_id"])
           	{
           		$quantite=$values["item_quantity"]+1;
           	 if($quantite>$values["item_stock"])
              {
                $quantite=$values["item_stock"];
              }
           	$item_array = array(
            'item_id'           =>  $values["item_id"],
            'item_name'         =>  $values["item_name"],
            'item_price'        =>  $values["item_price"],
            'items_image'       =>  $values["items_image"],
            'item_quantity'     => $quantite,
            'item_stock'     =>  $values["item_stock"]
            );
                //unset($_SESSION["shopping_cart"][$keys]);
               // array_replace($_SESSION["shopping_cart"][$keys],$item_array);
           		$_SESSION["shopping_cart"][$keys] = $item_array;
           	}
           }
         }

 	 if(!empty($_SESSION["shopping_cart"]))
         {
         $output.=' <table id="cart_table" class="table table-bordered">
              <thead>
                <tr style="background-color: #e3ecf9">
                  <th style="text-align: center">Produit</th>
                  <th style="text-align: center" >nom</th>
                  <th style="text-align: center" >Quantité</th>
                  <th style="text-align: center" >Prix unitaire</th>
                  <th style="text-align: center" >Remise</th>
                  <th style="text-align: center" >Tax</th>
                  <th style="text-align: center" >Prix</th>
                  <th style="text-align: center" >action</th>
                </tr>
              </thead>
              <tbody>';
         foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
           	  $total =$total+ ($values["item_quantity"]*$values["item_price"]);
           	  $img=$values["items_image"];
              $qte=$values["item_quantity"];
              $nom=$values["item_name"];
              $stk=$values["item_stock"];
              $id=$values["item_id"];
              $prix=$values["item_price"];
           	$output.='
           	 <tr>
                  <td> <img width="60" src="'.$img.'" alt=""/></td>
                  <td style="text-align: center; padding-top: 25px;">'.$nom.' </td>
                  <td style="text-align: center; padding-top: 25px;" class="">  <input disabled type="text" 
                  style="width: 50px; text-align: center;" class="span1 " value="'.$qte.'">
                   <button type="button" id="'.$id.'" class="btn btn-primary btn-xs edit_data">
			      <span class="fa fa-plus"></span>
			    </button>
			     <button type="button" id="'.$id.'" class="btn btn-danger btn-xs edit_moin">
			      <span class="fa fa-minus"></span></td>
			    </button></p></td>
                  <td style="text-align: center; padding-top: 25px;">'.$prix.' dt</td>
                  <td style="text-align: center; padding-top: 25px;">--</td>
                  <td style="text-align: center; padding-top: 25px;">18%</td>
                  <td style="text-align: center; padding-top: 25px;">'.$qte*$prix.' dt</td>
                   <td style="text-align: center; padding-top: 15px;"><a class="btn btn-danger" href="cart.php?action=delete&id='.$id.'"><i class="fa fa-trash"></i></a></td>
                </tr>'
                ;
           }
           $output.='<tr>
                  <td colspan="6" style="text-align:right;">Sous-total: </td>
                  <td>'.$total.' dt</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Expédition et traitement </td>
                  <td> gratuit</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:</td>
                  <td> '.$total.' dt</td>
                </tr>
                </tbody>
            </table>';

 
 echo $output;  

}
}
?>