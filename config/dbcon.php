
<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "system";

    //Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    //Check database connection

    if(!$con)
    {
        die("Connection Failed: ". mysqli_connect_error());
    }

    /*
    $host = "sql105.epizy.com";
    $username = "epiz_31925108";
    $password = "Fxy3S62itGja2g";
    $database = "epiz_31925108_ecom";

    //Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    //Check database connection

    if(!$con)
    {
        die("Connection Failed: ". mysqli_connect_error());
    }
    */

?>

