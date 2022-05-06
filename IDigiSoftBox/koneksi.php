<?php 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bc203_db";

        // Create connection & check connection
        $db = new mysqli($servername, $username, $password, $dbname);
        if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
        } else {
                //echo "Connection Successfully";
        }

        mysqli_select_db($db, $dbname );
?>