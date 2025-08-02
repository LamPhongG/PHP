<?php
    include '17_connectDB.php';
    // mo ket noi
    $cn = connect();
    // truy van du lieu
    $query = "SELECT * FROM tbStudent";
    // thuc thi truy van
    $result = mysqli_query($cn, $query);

    if($result == false) {
        die ("not found data");
    }

    //khai bao 1 mang rong de chua du lieu trich xuat
    $data = [];
    // doc tung dong tu bang ket qua 
    while($row = mysqli_fetch_assoc($result)) {
        
        // dua tung dong vao mang
        $data[] = $row;
    }
    //dong ket noi
    disconnect($cn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudent index</title>
</head>
<body>
    <h1><a href="19_student_create.php">ADD New Student</a></h1>
    <h1>Student List</h1>
    <table border="1">
        <thead>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student DOB</th>
            <th>Student Action</th>
        </thead>
        <tbody>
            <?php foreach($data as $item) { ?>
            <tr>
                <td><?php echo $item['stuID'] ?></td>
                <td><?php echo $item['tsuName'] ?></td>
                <td><?php echo $item['stuGender'] ?></td>
                <td><?php echo $item['stuDOB'] ?></td>
                <td>
                    <a href="20_student_edit.php?id=<?php echo $item['stuID'] ?>">EDIT</a>
                    <a href="21_student_delete.php?id=<?php echo $item['stuID']?>"
                    onclick="return confirm('are you sure to delete?')">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>