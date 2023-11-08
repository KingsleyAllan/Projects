<?php

    $servername = "	fdb1028.awardspace.net";
    $username = "4305838_dndb";
    $password = "Callmeanytime125";
    $dbname = "4305838_dndb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

?>