<?php
        $to = "cqlphong1106@gmail.com";
        $subject = "This is subject";
        $msg = "<h1>This is simple text message in PHP using HTML.</h1>";
        $header = "From: lamphong0110@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to, $subject, $msg, $header);
        if( $retval == true )
        {
            echo "Message successfully sent. . .";
        }
        else
        {
            echo "Message could not be sent . . .";
        }
?>
