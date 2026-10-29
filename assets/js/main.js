document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.menu-toggle');
    const header = document.querySelector('header');
    const closeMenu = () => {
        header.classList.remove('mobile-menu-open');
        button.setAttribute('aria-expanded', 'false');
    };
    if (button && header) {
        button.addEventListener('click', () => {
            const open = header.classList.toggle('mobile-menu-open');
            button.setAttribute('aria-expanded', String(open));
        });
        document.querySelectorAll('#navigation a').forEach(link => link.addEventListener('click', closeMenu));
        document.addEventListener('keydown', event => {
            if (event.key === 'Escape' && header.classList.contains('mobile-menu-open')) {
                closeMenu();
                button.focus();
            }
        });
        window.matchMedia('(min-width: 761px)').addEventListener('change', event => {
            if (event.matches) closeMenu();
        });
    }
});
