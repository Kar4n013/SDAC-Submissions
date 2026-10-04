<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $supplier = $_SESSION['name'];

    $query = $conn -> prepare("insert into products (product_name,category,price,quantity,supplier_name) values (?,?,?,?,?)");

    $query -> bind_param('ssiss',$name,$category,$price,$quantity,$supplier);

    if ($query->execute()) {
       echo ' <script>
       alert("Inserted");
       </script> ';
    }

}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Registration</title>
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
            
            <div class="formbox text-align: centre">
                <form action="" method="post">
                <h2>Insert</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        aria-describedby="helpId"
                        placeholder="product name"
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input
                        type="category"
                        class="form-control"
                        name="category"
                        id="category"
                        aria-describedby="helpId"
                        placeholder="category"
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input
                        type="number"
                        class="form-control"
                        name="price"
                        id="price"
                        aria-describedby="helpId"
                        placeholder="price"
                    />
                    
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">quantity</label>
                    <input
                        type="number"
                        class="form-control"
                        name="quantity"
                        id="quantity"
                        aria-describedby="helpId"
                        placeholder="quantity"
                    />
                   
                </div>
                
             
                
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>

              
                
                



                
            </form>

              <form action="disp_product.php" method="get">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        View Products
                    </button>
                    
                </form>
        </div>
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
