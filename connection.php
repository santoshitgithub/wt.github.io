<?php
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname   = "responsiveform3";
    
    $conn = new mysqli($servername, 
            $username,"",$dbname);


    if($conn)
    {
    	//echo "Connection ok";
    }
    else
    {
    	echo "Connection failed";
    }
 ?>