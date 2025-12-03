const link = document.querySelectorAll('.myLink');
link.forEach(link => {

    const linkHref = link.getAttribute('href');

    let currentPath = window.location.pathname;

    if (currentPath === "/") {
        currentPath = "/index.html";
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