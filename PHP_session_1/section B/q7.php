<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job application</title>
</head>
<body>
    <form action="" method="POST">  
    name: 
    <input type="text" name="name" id=""> <br>
    email: 
    <input type="email" name="email" id=""> <br>
    Qualifications: 
        <select name="qual" id="">
            <option value="">10th</option>
            <option value="">12th</option>
            <option value="">diploma</option>
            <option value="">degree</option>
        </select> <br>
    Gender: 
    male <input type="radio" name="gender" id="">
    female<input type="radio" name="gender" id="">
    others<input type="radio" name="gender" id="">
    <br>
    skills:   <br>
    english speaking <input type="checkbox" name="skill" id="">
    coding <input type="checkbox" name="skill" id="">
    sales <input type="checkbox" name="skill" id="">
    <br>
    experience: 
    <select name="exp" id="">
        <option >fresher</option>
        <option >1 year</option>
        <option >2 year</option>
    </select> <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $qualification = $_POST['qual'];
    $gender = $_POST['gender'];
    $skills = $_POST['skill'];
    $experience = $_POST['exp'];
    
    echo 'name is '.$name.'email is '.$email.'qualification is '.$qualification.'gender is'.$gender.'skills are '.$skills.'experience: '.$experience.'';
    
}

?>