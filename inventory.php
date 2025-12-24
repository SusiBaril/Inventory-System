<?php
require 'database/database.php';

$db = new Database();
$message = "";
$alertClass = "";

$categories = $db->getCategories();


if (isset($_POST['add_category'])) {
    $categoryName = trim($_POST['category_name']);

    try {
        $db->addCategory($categoryName);
        $message = "Category added successfully!";
        $alertClass = "alert-success";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Duplicate entry
            $message = "Category already exists!";
            $alertClass = "alert-warning";
        } else {
            $message = "Error adding category.";
            $alertClass = "alert-danger";
        }
    }
}

if (isset($_POST['add_product'])) {

    $category_id = $_POST['category_id'];
    $product_name = $_POST['product_name'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];

    try {
        $db->insertProduct($category_id, $product_name, $product_stock, $product_price);
        $message = "Product added successfully!";
        $alertClass = "alert-success";
    } catch (PDOException $e) {
        $message = "Error adding product.";
        $alertClass = "alert-danger";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;700&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <div class="layout">

        <?php echo include 'components/sidebar.php'; ?>

        <section class="inventory">
            <div class="head-section">
                <h1>Inventory</h1>

                <div class="search-wrapper">
                    <span class="material-symbols-outlined search-icon">search</span>
                    <input type="search" placeholder="Search here">
                </div>
            </div>
            <div class="content-section">
                <div class="inventory-parent">
                    <div class="inventory-table">
                        <div class="inventory-heading">
                            <h5>Inventory</h5>
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Add Category
                            </button>
                        </div>
                        <div class="accordion" id="inventoryAccordion">

                            <?php foreach ($categories as $category): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?= $category['category_id'] ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?= $category['category_id'] ?>" aria-expanded="false"
                                            aria-controls="collapse<?= $category['category_id'] ?>">

                                            <?= htmlspecialchars($category['category_name']) ?>
                                        </button>
                                    </h2>

                                    <div id="collapse<?= $category['category_id'] ?>" class="accordion-collapse collapse"
                                        aria-labelledby="heading<?= $category['category_id'] ?>"
                                        data-bs-parent="#inventoryAccordion">

                                        <div class="accordion-body">
                                            <div class="inventory-heading">
                                                <h5>Inventory</h5>
                                                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                                    data-bs-target="#add-item">
                                                    Add Item
                                                </button>
                                            </div>

                                            <table class="minimal-table">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product</th>
                                                    <th>Stock</th>
                                                    <th>Price</th>
                                                </tr>
                                                <tr>
                                                    <?php ?>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <?php ?>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="inventory-analytics">
                        <h5>Stock Analytics</h5>
                        <div class="stock-analytics">
                            <canvas id="myChart1" width="150" height="150"></canvas>
                            <table class="minimal-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Stock</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bag</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Hat</td>
                                    <td>12</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Category Name:</h5>
                    <input type="text" name="category_name" class="form-control" placeholder="Enter category name"
                        required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="add_category" class="btn btn-primary">Add</button>
                </div>
                <?php if (!empty($message)): ?>
                    <div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
                        <?php echo $message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <div class="modal fade" id="add-item" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Product Name:</h5>
                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                    <h5>Product Stock:</h5>
                    <input type="number" name="product_stock" class="form-control" placeholder="Enter Product Stock">
                    <h5>Product Price:</h5>
                    <input type="text" name="product_price" id="priceInput" class="form-control"
                        placeholder="Enter Product Price">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="add_product" class="btn btn-success"
                        data-bs-dismiss="modal">Add</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js"></script>

    <script>
        const priceInput = document.getElementById('priceInput');
        priceInput.addEventListener('blur', function () {
            // Just ensure it's a valid number with 2 decimals
            if (this.value) {
                this.value = parseFloat(this.value).toFixed(2);
            }
        });

    </script>

</body>

</html>