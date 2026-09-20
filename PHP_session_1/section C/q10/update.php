<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name" id="" placeholder="name"><br><br>

    <input type="number" name="salary" id="" placeholder="salary"><br><br>

    <button type="submit">Submit</button>
   </form>
</body>
</html>

<?php
include ("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    $salary = $_POST['salary'];

    $sql = $conn -> prepare("update employees set salary = ? where emp_name = ?");
    $sql -> bind_param("is", $salary, $name);
    
    if ($sql -> execute()) {
        echo "Updated!!";
    }

}


?>