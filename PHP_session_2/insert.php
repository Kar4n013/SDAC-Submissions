<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    


$product = $_POST['product'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$brand = $_POST['brand'];
$desc = $_POST['desc'];

$sql = $conn -> prepare(
    "insert into products (product_name,category,price,quantity,brand,description) values (?,?,?,?,?,?)"
);


$sql->bind_param('ssiiss',$product,$category,$price,$quantity,$brand,$desc);


if ($sql -> execute()) {
    echo '<script>alert("Inserted!!")</script>';
}else{
    echo '<script>alert("Wrong!!")</script>';
}

}
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Insert Product</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <h2>Insert Product</h2>

        <form action="" method="post">

        <div class="mb-3">
            <label for="product" class="form-label">Product name</label>
            <input
                type="text"
                class="form-control"
                name="product"
                id="product"
                aria-describedby="helpId"
                placeholder="product"
            />
        
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input
                type="text"
                class="form-control"
                name="category"
                id="category"
                aria-describedby="helpId"
                placeholder="category"
            />
           
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="number"
                class="form-control"
                name="price"
                id="price"
                aria-describedby=""
                placeholder="price"
            />
           
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input
                type="number"
                class="form-control"
                name="quantity"
                id="quantity"
                aria-describedby=""
                placeholder="quantity"
            />
           
        </div>
        
        <div class="mb-3">
            <label for="brand" class="form-label">brand</label>
            <input
                type="text"
                class="form-control"
                name="brand"
                id="brand"
                aria-describedby=""
                placeholder="brand"
            />
            
        </div>
        
        <div class="mb-3">
            <label for="desc" class="form-label">Description

            </label>
            <input
                type="text"
                class="form-control"
                name="desc"     
                id="desc"
                aria-describedby="helpId"
                placeholder=""
            />
           
        </div>
        
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
        </form>
        
        

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
