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
        <nav class="sidebar">
            <div class="logo">
                <h2>Admin Site</h2>
            </div>
            <ul>
                <li><a href="/index.html" class="myLink"><span
                            class="material-symbols-outlined">home</span>Dashboard</a></li>
                <li><a href="/inventorty.html" class="myLink"><span
                            class="material-symbols-outlined">box</span>Inventory</a></li>
                <li><a href="/customers.html" class="myLink"><span
                            class="material-symbols-outlined">people</span>Customers</a></li>
                <li><a href="/order.html" class="myLink"><span
                            class="material-symbols-outlined">assignment</span>Order</a></li>
                <li><a href="/analytics.html" class="myLink"><span
                            class="material-symbols-outlined">analytics</span>Analytics</a></li>
            </ul>
        </nav>

        <section class="inventory">
            <div class="head-section">
                <h1>Customers</h1>

                <div class="search-wrapper">
                    <span class="material-symbols-outlined search-icon">search</span>
                    <input type="search" placeholder="Search here">
                </div>
            </div>
            <div class="content-section">
                <div class="customer-parent">

                    <!-- TOTAL CUSTOMER -->
                    <div class="customer-total">
                        <h5>Total Customer: <span style="font-weight: 700;">10</span></h5>
                        <div class="total-customer-table">
                            <table class="minimal-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                </tr>
                                <tr><td>1</td><td>Juan Dela Cruz</td></tr>
                                <tr><td>2</td><td>Ana Santos</td></tr>
                                <tr><td>3</td><td>Michael Reyes</td></tr>
                                <tr><td>4</td><td>Kate Dizon</td></tr>
                                <tr><td>5</td><td>Mark Villanueva</td></tr>
                                <tr><td>6</td><td>Sarah Bautista</td></tr>
                                <tr><td>7</td><td>Daniel Cruz</td></tr>
                                <tr><td>8</td><td>Rachel Lim</td></tr>
                                <tr><td>9</td><td>Chris Ramirez</td></tr>
                                <tr><td>10</td><td>Ella Pascual</td></tr>
                            </table>
                        </div>
                    </div>
                
                    <!-- NEW CUSTOMERS -->
                    <div class="customer-new">
                        <h5>Total New Customer</h5>
                        <div class="total-customer-table">
                            <table class="minimal-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Date Joined</th>
                                </tr>
                                <tr><td>1</td><td>Robert Cruz</td><td>2025-02-01</td></tr>
                                <tr><td>2</td><td>Jessica Torres</td><td>2025-02-03</td></tr>
                                <tr><td>3</td><td>Paolo Santos</td><td>2025-02-05</td></tr>
                                <tr><td>4</td><td>Liza Mercado</td><td>2025-02-07</td></tr>
                                <tr><td>5</td><td>Carlo Herrera</td><td>2025-02-10</td></tr>
                                <tr><td>6</td><td>Jennie Lopez</td><td>2025-02-12</td></tr>
                                <tr><td>7</td><td>Gabriel Uy</td><td>2025-02-14</td></tr>
                                <tr><td>8</td><td>Nina Robles</td><td>2025-02-17</td></tr>
                                <tr><td>9</td><td>Adrian Silva</td><td>2025-02-18</td></tr>
                                <tr><td>10</td><td>Faith Valdez</td><td>2025-02-20</td></tr>
                            </table>
                        </div>
                    </div>
                
                    <!-- TOP SPENDER -->
                    <div class="customer-spending">
                        <h5>Top Spender Customer</h5>
                        <div class="total-customer-table">
                            <table class="minimal-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Total Spent</th>
                                </tr>
                                <tr><td>1</td><td>Juan Dela Cruz</td><td>₱12,500</td></tr>
                                <tr><td>2</td><td>Ana Santos</td><td>₱8,900</td></tr>
                                <tr><td>3</td><td>Michael Reyes</td><td>₱7,200</td></tr>
                                <tr><td>4</td><td>Kate Dizon</td><td>₱6,750</td></tr>
                                <tr><td>5</td><td>Mark Villanueva</td><td>₱6,200</td></tr>
                                <tr><td>6</td><td>Sarah Bautista</td><td>₱5,900</td></tr>
                                <tr><td>7</td><td>Daniel Cruz</td><td>₱5,300</td></tr>
                                <tr><td>8</td><td>Rachel Lim</td><td>₱5,000</td></tr>
                                <tr><td>9</td><td>Chris Ramirez</td><td>₱4,850</td></tr>
                                <tr><td>10</td><td>Ella Pascual</td><td>₱4,600</td></tr>
                            </table>
                        </div>
                    </div>
                
                    <!-- ACTIVE CUSTOMERS -->
                    <div class="customer-with-order">
                        <h5>Active Customer</h5>
                        <div class="total-customer-table">
                            <table class="minimal-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Orders</th>
                                </tr>
                                <tr><td>1</td><td>Juan Dela Cruz</td><td>5</td></tr>
                                <tr><td>2</td><td>Ana Santos</td><td>3</td></tr>
                                <tr><td>3</td><td>Michael Reyes</td><td>4</td></tr>
                                <tr><td>4</td><td>Kate Dizon</td><td>2</td></tr>
                                <tr><td>5</td><td>Mark Villanueva</td><td>6</td></tr>
                                <tr><td>6</td><td>Sarah Bautista</td><td>3</td></tr>
                                <tr><td>7</td><td>Daniel Cruz</td><td>1</td></tr>
                                <tr><td>8</td><td>Rachel Lim</td><td>2</td></tr>
                                <tr><td>9</td><td>Chris Ramirez</td><td>4</td></tr>
                                <tr><td>10</td><td>Ella Pascual</td><td>2</td></tr>
                            </table>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </section>
    </div>


    <script src="js/script.js"></script>
</body>

</html>