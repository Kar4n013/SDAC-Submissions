<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);

    $query = $conn -> prepare("insert into users (name,email,phone,city,password) values (?,?,?,?,?)");

    $query -> bind_param('ssiss',$name,$email,$phone,$city,$pass);

    if ($query->execute()) {
        header("Location:Login.php");
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
                <h2>Registration</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">product name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        aria-describedby="helpId"
                        placeholder="name"
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        aria-describedby="helpId"
                        placeholder="email"
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">phone</label>
                    <input
                        type="number"
                        class="form-control"
                        name="phone"
                        id="phone"
                        aria-describedby="helpId"
                        placeholder="phone"
                    />
                    
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        id="city"
                        aria-describedby="helpId"
                        placeholder="city"
                    />
                   
                </div>
                
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="pass"
                        id="pass"
                        aria-describedby="helpId"
                        placeholder="password"
                    />
                    
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
