const url = window.location.href;
const items = ['project', 'contact', 'articles', 'login', 'register'];

items.forEach(item => {
    if (url.includes(item)) {
        document.querySelectorAll('.nav-link').forEach(navlink => {
            navlink.classList.remove('active');
        });
        document.getElementById(item).classList.add('active');
    }
});
