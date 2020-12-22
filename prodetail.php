<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<body style="background-color: white;">
<?php
include "header.php"
?>
<?php
  $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
 if(isset($_GET["id"]))
 	$produit=$_GET["id"];
  $sql="SELECT * FROM `produit` WHERE idprod = $produit";
  $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_array($result)) 
                {


?>
 <div class="col-md-12">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active" href="index.php" >Electronics</li>
                        <li class="active"><?php echo"$row[5]"?></li>
                        <li class="active"><?php echo"$row[1]"?></li>
                    </ol>
                </div>
            </div>
<div class="single">
		<div class="container">
			<div class="col-md-4 single-right">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="<?php echo"$row[4]"?>">
							<div class="thumb-image"> <img src="<?php echo"$row[4]"?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right">
				<h3><?php echo"$row[1]" ?></h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="description">
					<h5><i>Description</i></h5>
					<p><?php echo"$row[6]"?> </p>
				</div>
				
				<div class="simpleCart_shelfItem">
					<p style="color: red;"><i class="item_price"> <?php echo"$row[2]"." dt"?> </i></p>
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1"> 
						<input type="hidden" name="w3ls_item" value="Smart Phone"> 
						<input type="hidden" name="amount" value="450.00">   
						<button type="submit" class="w3ls-cart">Ajout a la cart</button>
						<button type="button" class="w3ls-cart" onclick="window.open('index.php','_self');">Retourner</button>
					</form>
				</div> 
			</div>
</body>
<?php
}

?>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

<footer>
<div class="end-box " style="   position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: gray;
    color: white;
    text-align: center;" >
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; boulbeba bouaziz | &nbsp; 24x7 support | &nbsp; Email us: boulbebazz@yahoo.fr
    </div></footer>