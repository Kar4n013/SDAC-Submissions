<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name" id="" placeholder="name"><br><br>

    <input type="email" name="email" id="" placeholder="email"><br><br>

    <input type="number" name="phone" id="" placeholder="phone number"> <br> <br>
    
    <input type="department" name="department" id="" placeholder="department"><br><br>

    <input type="number" name="salary" id="" placeholder="salary"><br><br>

    <button type="submit">Submit</button>
   </form>
</body>
</html>

<?php
include ("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = $conn -> prepare("insert into employees values (?,?,?,?,?)");
    $sql -> bind_param("ssiii", $name, $email, $number, $department, $salary);
    
    if ($sql -> execute()) {
        echo "Inserted!!";
    }

}


?>