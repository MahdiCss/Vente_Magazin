<?php
Session_start();
Session_destroy();
Session_start();
header('location:index.php');


?>