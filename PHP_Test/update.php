<?php
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("location:Login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['book_id'] = $_GET['id'];
    $sql = $conn -> prepare('
    select * from books where id = ?
    ');

    $sql ->bind_param('i',$_SESSION['book_id']);
    $sql -> execute();
    $data = $sql -> get_result() ->fetch_assoc() ;
    
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = $conn -> prepare('
        update books set title = ?,author = ?,category = ?,isbn = ?,price = ? where id = ?
    ');

    $sql -> bind_param('ssiisi',$_POST['title'],$_POST['author'],$_POST['category'],$_POST['isbn'],$_POST['price'],$_SESSION['book_id']);
    if ($sql->execute()) {
        
        header('Location:Library_Dashboard.php');
        exit();
    }

    }
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>UpdateBook</title>
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
      
        <main>
            <div
                class="container col-5 my-3 p-3 text-center"
            >
                <form action="" method="post">

                <h2>Update Book</h2>

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    value="<?= $data['title'] ?>"
                    placeholder=""
                />
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="author"
                    id="author"
                    value="<?= $data['author'] ?>"
                    placeholder=""
                />
                <label for="author">Author</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id="category"
                    value="<?= $data['category'] ?>"
                    placeholder="category"
                />
                <label for="category">Category</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="number"
                    class="form-control"
                    name="isbn"
                    id="isbn"
                    value="<?= $data['isbn'] ?>"
                    placeholder=""
                />
                <label for="isbn">ISBN</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="number"
                    class="form-control"
                    name="price"
                    id="price"
                    value="<?= $data['price'] ?>"
                    placeholder=""
                />
                <label for="price">Price</label>
            </div>

          

            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
                </form>    

            </div>
            
        </main>
       
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
