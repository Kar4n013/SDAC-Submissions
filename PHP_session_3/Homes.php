<?php
include 'db.php';
$sql = $conn -> query("select * from products ");


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
        <title>dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!-- #region -->
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
             <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
             >
                <div class="container">
                 <h2>hello <?php echo $_SESSION['name']; ?></h2>

                 
              

                  <form class="d-flex my-2 my-lg-0" action="">
                          
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Download PDF
                            </button>
                        </form>
                   
                    
                        <form class="d-flex my-2 my-lg-0" action="Logout.php">
                          
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
             </nav>
             
        </header>
        <main class="text-center m-5" >

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        
        <th  scope="col" >id</th>
        <th  scope="col" >name</th>
        <th  scope="col" >category</th>
        <th  scope="col" >price</th>
        <th  scope="col" >quantity</th>
        <th  scope="col" >supplier</th>
                    </tr>
                    <?php
    while ($row = $sql->fetch_assoc()) {
        ?>

        
                </thead>
                <tbody>
                  <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['supplier_name'] ?></td>
        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
</table>


    
            <div class="formbox ">
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
