<?php
include 'db.php';

$data = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $id = $_GET['id'];

    $result = $conn->prepare(
        "SELECT * FROM products WHERE product_id = ?"
    );

    $result->bind_param('i', $id);
    $result->execute();

    $data = $result->get_result()->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $product = $_POST['product'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $desc = $_POST['desc'];

    $sql = $conn->prepare(
        "UPDATE products 
         SET productname = ?, price = ?, category = ?, quantity = ?, 
             brand = ?, description = ? 
         WHERE product_id = ?"
    );

    $sql->bind_param(
        'sisissi',
        $product,
        $price,
        $category,
        $quantity,
        $brand,
        $desc,
        $id
    );

    $sql->execute();

    echo "Product updated successfully!";
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Update Product</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

<main class="container mt-4">

    <h2>Update Product</h2>

    <!-- GET FORM -->
    <form action="" method="get">

        <div class="mb-3">

            <label for="id" class="form-label">
                Product ID
            </label>

            <input
                type="number"
                class="form-control"
                name="id"
                id="id"
                placeholder="Product ID"
                required
            >

        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Fetch Product
        </button>

    </form>


    <?php if ($data): ?>

    <hr>

    <!-- UPDATE FORM -->
    <form action="" method="post">

        <!-- Product ID hidden -->
        <input
            type="hidden"
            name="id"
            value="<?php echo $data['product_id']; ?>"
        >

        <div class="mb-3">

            <label for="product" class="form-label">
                Product name
            </label>

            <input
                type="text"
                class="form-control"
                name="product"
                id="product"
                value="<?php echo htmlspecialchars($data['productname']); ?>"
                required
            >

        </div>


        <div class="mb-3">

            <label for="category" class="form-label">
                Category
            </label>

            <input
                type="text"
                class="form-control"
                name="category"
                id="category"
                value="<?php echo htmlspecialchars($data['category']); ?>"
                required
            >

        </div>


        <div class="mb-3">

            <label for="price" class="form-label">
                Price
            </label>

            <input
                type="number"
                class="form-control"
                name="price"
                id="price"
                value="<?php echo $data['price']; ?>"
                required
            >

        </div>


        <div class="mb-3">

            <label for="quantity" class="form-label">
                Quantity
            </label>

            <input
                type="number"
                class="form-control"
                name="quantity"
                id="quantity"
                value="<?php echo $data['quantity']; ?>"
                required
            >

        </div>


        <div class="mb-3">

            <label for="brand" class="form-label">
                Brand
            </label>

            <input
                type="text"
                class="form-control"
                name="brand"
                id="brand"
                value="<?php echo htmlspecialchars($data['brand']); ?>"
                required
            >

        </div>


        <div class="mb-3">

            <label for="desc" class="form-label">
                Description
            </label>

            <input
                type="text"
                class="form-control"
                name="desc"
                id="desc"
                value="<?php echo htmlspecialchars($data['description']); ?>"
                required
            >

        </div>


        <button
            type="submit"
            class="btn btn-success"
        >
            Update Product
        </button>

    </form>

    <?php endif; ?>

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>