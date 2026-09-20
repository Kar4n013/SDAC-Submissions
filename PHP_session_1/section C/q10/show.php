<?php
include("db.php");
$results = $conn->query("select * from employees");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    
    <table border="1" cellpadding = "20">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>

        <?php
        while ($row = $results -> fetch_assoc()) {
        ?>
    <tr>
        <td><?php echo "$row[emp_name]" ?></td>
        <td><?php echo "$row[email]" ?></td>
        <td><?php echo "$row[phone]" ?></td>
        <td><?php echo "$row[department]" ?></td>
        <td><?php echo "$row[salary]" ?></td>
        
    </tr>
        <?php } ?>
    </table>

    <button type="button" class="edit">Edit</button>
    <button type="button" class="delete">Delete</button>

</body>
</html>