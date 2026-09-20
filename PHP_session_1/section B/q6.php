<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get method form </title>
</head>
<body>
    <form action="" method="get">
        <input type="email" name="email" id="" placeholder="email"> <br>
        <input type="password" name="password" id="" placeholder="password"> <br>
        are you subscribed: 
        yes <input type="radio" name="status" id=""> <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $name = $_GET['email'];
    $passsword = $_GET['password'];
    $subscribed = $_GET['status'];

    if (empty($subscribed)) {
       echo 'thankyou for signing up '.$name. 'you are not subscribed';
       }
       else{
           echo 'thankyou for signing up '.$name. 'you are subscribed';
       }
    
}


?>