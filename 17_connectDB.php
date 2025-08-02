<?php
    function connect() {
        $host = "localhost";
        $username = "root";
        $pass = "";
        $database = "2503E1";

        $con = mysqli_connect($host, $username, $pass, $database);   
        if(!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
        return $con;
    }

    function disconnect($cn) {
        mysqli_close($cn);
        //echo "Disconnected successfully";
    }
?>
