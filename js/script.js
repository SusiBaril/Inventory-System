const link = document.querySelectorAll('.myLink');
link.forEach(link => {

    const linkHref = link.getAttribute('href');

    let currentPath = window.location.pathname;

    if(currentPath === "/"){
        currentPath = "/index.html";
    }

    if(linkHref === currentPath) {
        link.classList.add('active');
    }
})