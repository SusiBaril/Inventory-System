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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="layout">

        <?php echo include 'components/sidebar.php'; ?>

        <section class="inventory">
            <div class="head-section">
                <h1>Orders</h1>

                <div class="search-wrapper">
                    <span class="material-symbols-outlined search-icon">search</span>
                    <input type="search" placeholder="Search here">
                </div>
            </div>
            <div class="content-section">
                <div class="order-parent">

                    <div class="order-pending">
                        <h5>Order Pending: <span style="font-weight: 700;">10</span></h5>
                        <table class="minimal-table">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#ORD-1001</td>
                                    <td>Pending</td>
                                    <td>2025-02-10</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>#ORD-1002</td>
                                    <td>Pending</td>
                                    <td>2025-02-10</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#ORD-1003</td>
                                    <td>Pending</td>
                                    <td>2025-02-11</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>#ORD-1004</td>
                                    <td>Pending</td>
                                    <td>2025-02-11</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>#ORD-1005</td>
                                    <td>Pending</td>
                                    <td>2025-02-12</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>#ORD-1006</td>
                                    <td>Pending</td>
                                    <td>2025-02-12</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>#ORD-1007</td>
                                    <td>Pending</td>
                                    <td>2025-02-13</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>#ORD-1008</td>
                                    <td>Pending</td>
                                    <td>2025-02-13</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>#ORD-1009</td>
                                    <td>Pending</td>
                                    <td>2025-02-14</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>#ORD-1010</td>
                                    <td>Pending</td>
                                    <td>2025-02-14</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-complete">
                        <h5>Order Complete: <span style="font-weight: 700;">10</span> </h5>
                        <table class="minimal-table">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#ORD-0901</td>
                                    <td>Complete</td>
                                    <td>2025-01-28</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>#ORD-0902</td>
                                    <td>Complete</td>
                                    <td>2025-01-28</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#ORD-0903</td>
                                    <td>Complete</td>
                                    <td>2025-01-29</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>#ORD-0904</td>
                                    <td>Complete</td>
                                    <td>2025-01-29</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>#ORD-0905</td>
                                    <td>Complete</td>
                                    <td>2025-01-30</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>#ORD-0906</td>
                                    <td>Complete</td>
                                    <td>2025-01-30</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>#ORD-0907</td>
                                    <td>Complete</td>
                                    <td>2025-01-31</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>#ORD-0908</td>
                                    <td>Complete</td>
                                    <td>2025-01-31</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>#ORD-0909</td>
                                    <td>Complete</td>
                                    <td>2025-02-01</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>#ORD-0910</td>
                                    <td>Complete</td>
                                    <td>2025-02-01</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
        </section>
    </div>


    <script src="js/script.js"></script>
</body>

</html>