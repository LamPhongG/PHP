
<?php
    if(isset($_POST['btnLogin'])) {
        //get gia tri cua cac field tu form dua len
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        //kiem tra xem co remember hay ko
        if(isset($_POST['remember']))
        {
            //luu cookie
            setcookie("userName", $uname, time() + 120);
        }

        if($uname == "admin" && $pass =="123") {
            echo "welcome Admin";
        }
        else {
            echo "Welcome User";
        }
    }
?>
?>





<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <h1>Login</h1>
    <form action="13_cookie.php" method="post">
        <div>
            Username: <input type="text" name="username"
            value="<?php if(isset($_COOKIE['userName'])) 
                echo $_COOKIE['userName']; ?>"
                >

        </div>
        <div>
            Password: <input type="text" name="password">

        </div>
        <div>
            Remember: <input type="checkbox" name="remember">
        </div>
        <div>
            <input type="submit" value="Login" name="btnLogin">
        </div>
    </form>


</body>
</html>