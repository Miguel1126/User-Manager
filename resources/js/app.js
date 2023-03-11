import './bootstrap';
import '../sass/app.scss'

const menu_toggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');
const item = document.querySelectorAll('p')
menu_toggle.addEventListener('click', () => {
    menu_toggle.classList.toggle('is-active');
    sidebar.classList.toggle('is-active');
    item.forEach(p => {
    p.classList.toggle('is-active');
    });
});