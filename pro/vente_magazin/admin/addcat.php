        <?php
        if(isset($_POST["sub"]))
        {
            $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
        // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              mysqli_set_charset($con,"utf8");
              $a1=$_POST["nom"];
            $rq = "INSERT INTO `categorie` (`id`, `nomcat`) VALUES (NULL, '$a1')";
            if (mysqli_query($con, $rq)) {
                /* echo "New record created successfully";
                 echo'<div class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>';*/
                    header('location:categorie.php');

            } 
            else 
            {
                echo "Error: " ."<br>" . mysqli_error($con);
            }

            mysqli_close($con);
            }

        ?>