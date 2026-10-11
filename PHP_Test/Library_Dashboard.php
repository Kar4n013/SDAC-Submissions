<?php
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("location:Login.php");
}

$sql = $conn -> query('
select * from books
');


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Dashboard</title>
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
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-sm navbar-light "
             >
                <div class="container p-3 ">
                    <h3>hello <?php echo $_SESSION['user'] ?> </h3>
                    
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        
                        <form class="d-flex my-2 my-lg-0 mx-2" action="AddBook.php">
                            <button
                                class="btn btn-outline-primary my-2 my-sm-0 p-2"
                                type="submit"
                            >
                                Add Books ➕
                            </button>
                        </form>

                        <form class="d-flex my-2 my-lg-0 mx-2">
                            <button
                                class="btn btn-outline-success my-2 my-sm-0 p-2"
                                type="submit"
                            >
                                Download PDF 📑
                            </button>
                        </form>

                        <form class="d-flex my-2 my-lg-0 mx-2">
                            <button
                                class="btn btn-outline-success my-2 my-sm-0 p-2"
                                type="submit"
                            >
                                Download Excel 📄
                            </button>
                        </form>

                        <form class="d-flex my-2 my-lg-0 mx-2" action = "Logout.php">
                            <button
                                class="btn btn-outline-danger my-2 my-sm-0 p-2"
                                type="submit"
                            >
                                Log Out
                            </button>
                        </form>

                        
                    </div>
                </div>
             </nav>
             
        </header>
        <main>
            <div
                class="container text-center "
            >
                
            <h2>Books</h2>

            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary p-5 "
                >
                    <thead class = "container p-4">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Operations</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while ($row = $sql->fetch_assoc()) {
                        ?>

                        <tr class="">
                            
                            <td> <?= $row['id'] ?> </td>
                            <td> <?= $row['title'] ?> </td>
                            <td> <?= $row['author'] ?> </td>
                            <td> <?= $row['isbn'] ?> </td>
                            <td> <?= $row['category'] ?> </td>
                            <td> <?= $row['price'] ?> </td>

                            <td> <form action="update.php" method="get">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button
                                    type="submit"
                                    class="btn btn-warning my-2"
                                >
                                    Update
                                </button>
                                
                            </form> 

                                <form action="delete.php" method="get" onsubmit="return confirm('Are you sure to delete this book?')">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                >
                                    Delete
                                </button>
                                
                            </form> </td>

                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            

            </div>
            
            
        </main>
        <footer class="bg"></footer>
        
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
