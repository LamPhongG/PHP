<?php
include_once '17_connectDB.php';

//lay gia tri cu cua student tu form dua len
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    // mo ket noi
    $cn = connect();
    // truy van du lieu
    $query = "DELETE FROM tbStudent WHERE stuID = $id";
    // thuc thi truy van
    $result = mysqli_query($cn, $query);
    disconnect($cn);
    // chuyen ve trang index
    header("Location: 18_student_index.php");
    exit();
}



?>
