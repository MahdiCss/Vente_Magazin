        <div class="row">
            <div class="col-md-12">
                <div class="well well-lg offer-box text-" style="background-color: #99e6ff; text-align: center;">


                   Offre De Jour : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;Un Remise Exceptionnelle pour ces Produit             
              
                </div>
                <?php
                 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
            $sql='SELECT * FROM `produit` WHERE `categorie` like "Ordinateurs%"';
            $result = mysqli_query($con, $sql);
            $numbres = mysqli_num_rows($result);

                ?>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">

                        <ul>
                           
                      <?php
                    /* 
                    Random 1
                    function randomindex($min, $max, $quantity) {
                        $numbers = range($min, $max);
                        shuffle($numbers);
                        return array_slice($numbers, 0, $quantity);
                    }
                    $random= randomindex(4,1, $numbres);  
                    echo $random[0].$random[1].$random[2].$random[3]; */
                    $i=0;
                    while($row = mysqli_fetch_array($result)) 
                     {
                      $res[$i]=$row[0];
                      $i++;
                    }
                    if($GLOBALS['numbres']>=4)
                    {
                      $rand_keys = array_rand($res, 4);
                      shuffle($rand_keys);
                      shuffle($rand_keys);
                     $sql1='SELECT nomprod ,imageprod from produit where idprod ='.$res[$rand_keys[0]].' or idprod ='.$res[$rand_keys[1]].' or idprod ='.$res[$rand_keys[2]].' or idprod ='.$res[$rand_keys[3]];
                      $result = mysqli_query($con, $sql1);
                      while($row = mysqli_fetch_array($result)) 
                     {
                    ?>     
                      <li><a href="#">
                                <img src="<?php echo $row[1] ?>" alt="img01"><h4><?php echo $row[0] ?></h4>
                            </a></li>
                    <?php
                     }
                 }
                 else
                 {
                    echo"pas de produit disponible";
                 }
                  ?>  
                        </ul>

                             <?php
                 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
            $sql='SELECT * FROM `produit` WHERE `categorie` like "Stockage%"';
            $result = mysqli_query($con, $sql);
            $numbres = mysqli_num_rows($result);

                ?>
                  

                        <ul>


                                                <?php
       
                    $i=0;
                    while($row = mysqli_fetch_array($result)) 
                     {
                      $res[$i]=$row[0];
                      $i++;
                    }
                    if($GLOBALS['numbres']>=4)
                    {
                      $random_keys = array_rand($res, 4);
                      shuffle($random_keys);
                     $sql='SELECT nomprod ,imageprod from produit where idprod ='.$res[$random_keys[0]].' or idprod ='.$res[$random_keys[1]].' or idprod ='.$res[$random_keys[2]].' or idprod ='.$res[$random_keys[3]];
                      $result = mysqli_query($con, $sql);
                        $result = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_array($result)) 
                     {
                    ?>     
                      <li><a href="#">
                                <img src="<?php echo $row[1] ?>" alt="img01"><h4><?php echo $row[0] ?></h4>
                            </a></li>
                    <?php
                     }
                 }
                 else
                 {
                    echo"pas de produit disponible";
                 }
                  ?>  

                        </ul>


            <?php
                 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
            $sql='SELECT * FROM `produit` WHERE `categorie` like "Telephonie"';
            $result = mysqli_query($con, $sql);
            $numbres = mysqli_num_rows($result);

                ?>

                        <ul>
                   <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) 
                     {
                      $res[$i]=$row[0];
                      $i++;
                    }
                    if($GLOBALS['numbres']>=4)
                    {
                      $rando_keys = array_rand($res, 4);
                      shuffle($rando_keys);
                     $sql='SELECT nomprod ,imageprod from produit where idprod ='.$res[$rando_keys[0]].' or idprod ='.$res[$rando_keys[1]].' or idprod ='.$res[$rando_keys[2]].' or idprod ='.$res[$rando_keys[3]];
                      $result = mysqli_query($con, $sql);
                        $result = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_array($result)) 
                     {
                    ?>     
                      <li><a href="#">
                                <img src="<?php echo $row[1] ?>" alt="img01"><h4><?php echo $row[0] ?></h4>
                            </a></li>
                    <?php
                     }
                 }
                 else
                 {
                    echo"pas de produit disponible";
                 }
                  ?>  


                           
                        </ul>


 <?php
                 $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
            $sql='SELECT * FROM `produit` WHERE `categorie` like "Accessories"';
            $result = mysqli_query($con, $sql);
            $numbres = mysqli_num_rows($result);

                ?>

                        <ul>

                                  <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) 
                     {
                      $res[$i]=$row[0];
                      $i++;
                    }
                    if($GLOBALS['numbres']>=4)
                    {
                      $rand_keys = array_rand($res, 4);
                      shuffle($rand_keys);
                      shuffle($rand_keys);
                     $sql='SELECT nomprod ,imageprod from produit where idprod ='.$res[$rand_keys[0]].' or idprod ='.$res[$rand_keys[1]].' or idprod ='.$res[$rand_keys[2]].' or idprod ='.$res[$rand_keys[3]];
                      $result = mysqli_query($con, $sql);
                        $result = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_array($result)) 
                     {
                    ?>     
                      <li><a href="#">
                                <img src="<?php echo $row[1] ?>" alt="img01"><h4><?php echo $row[0] ?></h4>
                            </a></li>
                    <?php
                     }
                 }
                 else
                 {
                    echo"pas de produit disponible";
                 }
                  ?>  

                        </ul>
                        <nav>
                            <a href="#">pc gamer</a>
                            <a href="#">Stockage</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Accessoire</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>

        </div>
        <!-- /.row -->