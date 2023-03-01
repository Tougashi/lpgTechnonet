// Toggle Active Side
const navbarNav = document.querySelector
('.navbar-nav');

// Active Click
document.querySelector('#menu').
onclick = () => {
    navbarNav.classList.toggle('active');
};

// Close Click
const menu = document.querySelector
('#menu')
document.addEventListener('click', function(e){
    if (!menu.contains(e.target) && !navbarNav.contains(e.target)){
    navbarNav.classList.remove('active');
    }
});
