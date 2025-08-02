<?php

    session_start();
    //kiem tra xem session co luu chua?
    if(isset($_SESSION['username']))
    {
        //get gia tri cua session
        $uname = $_SESSION['username'];
        $pass = $_SESSION['password'];
        echo "<br>UserName is $uname";
        echo "<br>Password is $pass <br>";

        //thay doi session
        $_SESSION['username'] = 'user';
        $_SESSION['password'] = 456;
        echo "Session is changed <br>";
        //get gia tri cua session sau khi thay doi
        $uname = $_SESSION['username'];
        $pass = $_SESSION['password'];
        echo "<br>New UserName is $uname";
        echo "<br>New Password is $pass <br>";
    }
    else {
        echo "Session is not set <br>";
    }

    



?>