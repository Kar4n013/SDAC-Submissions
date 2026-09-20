<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method handling</title>
</head>
<body>

    <form action="" method="POST">
    Name: 
    <input type="text" name="name" id=""> <br>
    Age:
    <input type="number" name="age" id=""> <br>
    Gender: 
    <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];

echo" name is ". $name ."<br> age is ". $age ."<br> Gender is ". $gender;
}
?>