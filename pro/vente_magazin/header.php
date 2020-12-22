
  <?php
     session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BOUAZIZ SHOP</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="admin/js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .fadein img{
        opacity:1;
        transition: 1s ease;
        }

        .fadein img:hover{
        opacity:0.5;
        transition: 1s ease;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>Bouaziz</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                  
                    <?php 
                    if(!isset($_SESSION['client'])){
                        ?>
                     <li><a href="#" class="btn pb-modalreglog-submit" data-toggle="modal" data-target="#myModal" >Login</a></li>
                     <li><a href="#" class="btn  pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2" >Signup</a></li>
                    <?php 
                    }
                    else
                    {
                    ?>
                      <li><a href="profile.php" >Bonjour: <?php echo $_SESSION['client']?> </a></li>
                     <li><a href="logout.php"  >logout</a></li>
                    <?php
                     }
                    ?>

                     <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge"></span></a>
                    <div class="dropdown-menu" style="width:400px; border-radius: 0px 0px 10px 10px;">
                   <?php
                      /*  if(isset($_POST["add_to_cart"]))
                            {*/
                        ?>
                            <table class="table table-condensed" >
                              <col width="120">
                              <col width="200">
                              <col width="120">
                              <col width="120">
                              <col width="120">
                              <col width="120">
                            <thead>
                              <tr >
                                <th style="text-align: center;" >id</th>
                                <th style="text-align: center;">nom</th>
                                <th style="text-align: center;" >image</th>
                                <th style="text-align: center;">prix</th>
                                <th style="text-align: center;">qte</th>
                                <th style="text-align: center;">action</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <?php
                                if(!empty($_SESSION["shopping_cart"]))
                                {
                                    /*$total = 0;*/
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                                    {
                                        $img=$values["items_image"];
                                ?>
                              <tr>                       
                                <td style="text-align: center; padding-top: 20px;"><?php echo $values["item_id"];  ?></td>
                                <td style="text-align: center; padding-top: 20px;" ><?php echo $values["item_name"];  ?></td>
                                <td style="text-align: center;"> <img src="<?php echo"$img";?>" style="width: 50px; height:50px;object-fit: cover;" alt="" /></td>
                               <td style="text-align: center; padding-top: 20px;"><?php echo $values["item_price"]; ?></td>
                                <td style="text-align: center; padding-top: 20px;"><?php echo $values["item_quantity"]; ?></td>
                                <td style="text-align: center; padding-top: 15px;"><a class="btn btn-danger" href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><i class="fa fa-trash"></i></a></td>
                              </tr>
                              <?php
                                    }
                                }
                                ?>
                            </tbody>
                          </table>
                                <p style="text-align: right; padding-right :5px;" ><a href="index.php" class="btn btn-info" role="button">Continuer mes achats</a>
                                 <a href="cart.php" class="btn btn-warning"role="button">commander</a></p>                         
                     <?php
                        if(empty($_SESSION["shopping_cart"]))
                        echo '<p style="text-align: center;">la carte est vide<p>';
                    ?>

                    </div>
                </li>
            <!-- Modale Login -->

                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Login form</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="email" name="mail" class="form-control" id="email" placeholder="Email" required="true" >
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="password" class="form-control" name="pws" id="pws" placeholder="Password" required="true">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                            <button type="submit" id="sublog" class="btn btn-primary">Sign up</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Login -->
            <!-- Modale sign up -->
                 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm-6" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Registration form</h4>
                        </div>
                        <div class="modal-body">
                            <form class="pb-modalreglog-form-reg" method="post" action="Signup.php">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group" >
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control" id="veremail" name="mail" placeholder="Email" required="true">                       
                                    </div>
                                    <span id="availability"></span>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Nom</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" id="inputConfirmPws" name="nom"  placeholder="nom" required="true">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="confirmpassword">Prénom</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" id="inputConfirmPws" name="prenom" placeholder="Prénom" required="true">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="confirmpassword">Télephone</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                        <input type="text" class="form-control" id="inputConfirmPws" name="phon" placeholder="Télephone" required="true">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="confirmpassword">Cin</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" id="inputConfirmPws" name="cin" placeholder="Cin" required="true">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="confirmpassword">Adresse</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                                        <input type="text" class="form-control" id="inputConfirmPws" name="adr" placeholder="Adresse" required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control"  name="pwd"  id="inputPws" placeholder="Password" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="ch" name="chs" required="true">
                                    I agree with <a href="#">terms and conditions.</a>
                                </div>
                                 <button type="submit" id="subsign" class="btn btn-primary">Sign up</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                         
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modale sign up -->

                </ul>
                  <form class="navbar-form navbar-center" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <script>  
 $(document).ready(function(){  
   $('#veremail').blur(function(){

     var email = $(this).val();

     $.ajax({
      url:'checkmail.php',
      method:"POST",
      data:{user_email:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">email non disponible</span>');
        $('#subsign').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">email disponible</span>');
        $('#subsign').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>