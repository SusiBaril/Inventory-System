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
                <h1>Analytics</h1>

                <div class="search-wrapper">
                    <span class="material-symbols-outlined search-icon">search</span>
                    <input type="search" placeholder="Search here">
                </div>
            </div>
            <div class="content-section">
                <div class="analytic-parent">

                    <div class="analytic-sale">
                        <h5>Monthly Revenue</h5>
                        <canvas id="chartRevenue"></canvas>
                    </div>

                    <div class="analytic-trend">
                        <h5>Orders Trend</h5>
                        <canvas id="chartOrders"></canvas>
                    </div>

                    <div class="analytic-selliing">
                        <h5>Top-Selling Products</h5>
                        <canvas id="chartTopProducts"></canvas>
                    </div>

                    <div class="analytic-inventory">
                        <h5>Inventory Distribution</h5>
                        <canvas id="chartInventory"></canvas>
                    </div>

                </div>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', () => {

            // Monthly Revenue - Line Chart
            const ctxRevenue = document.getElementById('chartRevenue');
            if (ctxRevenue) {
                new Chart(ctxRevenue, {
                    type: 'line',
                    data: {
                        labels: [
                            'January', 'February', 'March', 'April', 'May', 'June',
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ],
                        datasets: [{
                            label: 'Revenue (₱)',
                            data: [12000, 19000, 3000, 5000, 2000, 3000, 15000, 10000, 7000, 12000, 15000, 20000],
                            borderColor: 'rgb(75, 192, 192)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 2,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: { beginAtZero: true }
                        }
                    }
                });
            }

            // Orders Trend - Bar Chart
            const ctxOrders = document.getElementById('chartOrders');
            if (ctxOrders) {
                new Chart(ctxOrders, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Orders',
                            data: [30, 50, 20, 40, 25, 35, 45, 60, 50, 55, 70, 65],
                            backgroundColor: 'rgba(54, 162, 235, 0.7)'
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: { beginAtZero: true }
                        }
                    }
                });
            }

            // Top-Selling Products - Pie Chart
            const ctxTopProducts = document.getElementById('chartTopProducts');
            if (ctxTopProducts) {
                new Chart(ctxTopProducts, {
                    type: 'pie',
                    data: {
                        labels: ['Tshirt', 'Jeans', 'Bag', 'Hat', 'Shoes'],
                        datasets: [{
                            label: 'Top Products',
                            data: [20, 15, 10, 12, 8],
                            backgroundColor: [
                                '#FF6384',
                                '#36A2EB',
                                '#FFCE56',
                                '#4BC0C0',
                                '#9966FF'
                            ]
                        }]
                    },
                    options: { responsive: true }
                });
            }

            // Inventory Distribution - Doughnut Chart
            const ctxInventory = document.getElementById('chartInventory');
            if (ctxInventory) {
                new Chart(ctxInventory, {
                    type: 'doughnut',
                    data: {
                        labels: ['Electronics', 'Clothing', 'Accessories'],
                        datasets: [{
                            label: 'Inventory',
                            data: [50, 80, 30],
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                        }]
                    },
                    options: { responsive: true }
                });
            }

        });
    </script>
</body>

</html>