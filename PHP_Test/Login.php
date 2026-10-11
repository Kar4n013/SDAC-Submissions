<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pass = $_POST['pass'];
    $sql = $conn -> prepare('
        select password from users where username = ?
    ');

    $sql -> bind_param('s',$_POST['user']);
    $sql -> execute();
    $sql -> bind_result($password);
    $sql -> fetch();

    if (password_verify($pass,$password)) {
        $_SESSION['user'] = $_POST['user'];
        header('Location:Library_Dashboard.php');
    }else {
        echo '<script>alert("Wrong Credentials!!")</script>';
    }

    }
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Login</title>
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

                <h2>Login</h2>


            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="user"
                    id="user"
                    placeholder=""
                />
                <label for="user">UserName</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="password"
                    class="form-control"
                    name="pass"
                    id="pass"
                    placeholder=""
                />
                <label for="pass">Password</label>
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
