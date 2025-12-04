const link = document.querySelectorAll('.myLink');
link.forEach(link => {

    const linkHref = link.getAttribute('href');

    let currentPath = window.location.pathname;

    if (currentPath === "/") {
        currentPath = "/index.php";
    }

    if (linkHref === currentPath) {
        link.classList.add('active');
    }
})

const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ],
        datasets: [{
            label: '# of Incomes',
            data: [12000, 19000, 3000, 5000, 2000, 3000],
            borderWidth: 2,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


const ctx1 = document.getElementById('myChart1');

new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: [
            'Red',
            'Blue',
            'Yellow'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const priceInput = document.getElementById('priceInput');

priceInput.addEventListener('blur', function(e) {
    // Remove all non-digit characters except dot
    let value = this.value.replace(/[^0-9.]/g, '');

    // Parse as float and format
    if (value) {
        value = parseFloat(value).toLocaleString('en-PH', {
            style: 'currency',
            currency: 'PHP',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    this.value = value;
});


