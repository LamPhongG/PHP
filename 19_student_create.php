<?php
include_once '17_connectDB.php';
    if(isset($_POST['btnAdd'])) {

        // mo ket noi
        $cn = connect();
        // get gia tri tu form dua len 
        $name= $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dbo'];


        //viet cau lenh truy van
        $query = "INSERT INTO tbStudent(tsuName, stuGender, stuDOB) VALUES ('$name', '$gender', '$dob')";
        // thuc thi cau lenh truy van
        $result = mysqli_query($cn, $query);
        disconnect($cn);
        // chuyen ve trang index
        header("Location: 18_student_index.php");
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Create</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action="19_student_create.php" method="post">
        <div>
            Name: <input type="text" name="name" required>

        </div>
        <div>
            Gender: <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
        </div>
        <div>
            DOB: <input type="date" name="dbo" required>
        </div>
        <div>
            <input type="submit" value="Add" name="btnAdd">
        </div>
    </form>
</body>
</html>