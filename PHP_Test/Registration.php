<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
    $sql = $conn -> prepare('
        insert into users (full_name,email,mobile,username,password) values (?,?,?,?,?)
    ');

    $sql -> bind_param('ssiss',$_POST['fullname'],$_POST['email'],$_POST['mobile'],$_POST['user'],$pass);
    if ($sql->execute()) {
        header('Location:Login.php');
    }else {
        echo '<script>alert("Email already exists!!")</script>';
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
      
        <main>
            <div
                class="container col-5 my-3 p-3 text-center"
            >
                <form action="" method="post">

                <h2>Register</h2>

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    id="fullname"
                    placeholder=""
                />
                <label for="fullname">Full Name</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="email"
                />
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input
                    type="number"
                    class="form-control"
                    name="mobile"
                    id="mobile"
                    placeholder=""
                />
                <label for="mobile">Mobile</label>
            </div>

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
