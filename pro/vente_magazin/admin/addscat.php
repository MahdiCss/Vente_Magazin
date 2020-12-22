        <?php
        if(isset($_POST["sub2"]))
        {
            $con = mysqli_connect("127.0.0.1 ","root","","bdvente");
        // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              mysqli_set_charset($con,"utf8");
              $a1=$_POST["sousgal"];
              $a2=$_POST["nom"];
            $rq = "INSERT INTO `scategorie` (`merecat`, `nomscat`) VALUES ('$a1', '$a2')";
            if (mysqli_query($con, $rq)) {
                /* echo "New record created successfully";
                 echo'<div class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>';*/

            } 
            else 
            {
                echo "Error: " ."<br>" . mysqli_error($con);
            }

            mysqli_close($con);
            }

        ?>