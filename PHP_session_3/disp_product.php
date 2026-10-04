<?php
include 'db.php';

$sql = $conn -> query("select * from products ");

?>

<table>
    <tr>

        <th>id</th>
        <th>name</th>
        <th>category</th>
        <th>price</th>
        <th>quantity</th>
        <th>supplier</th>
    </tr>

    <?php
    while ($row = $sql->fetch_assoc()) {
        ?>
        
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['supplier_name'] ?></td>
        </tr>
        
<?php } ?>
</table>