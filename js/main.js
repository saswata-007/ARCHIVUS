const navItems = document.querySelector('.nav_items');
const openNavBtn = document.querySelector('#open_nav-btn');
const closeNavbtn = document.querySelector('#close_nav-btn');

// opens nav dropdown
const openNav = () => {
    navItems.computedStyleMap.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavbtn.style.display = 'inline-block';
}

// close nav dropdown
const closeNav = () => {
    navItems.computedStyleMap.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavbtn.style.display = 'none';
}

openNavBtn.addEventListener('Click', openNav);
openNavBtn.addEventListener('Click', closeNav);