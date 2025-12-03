document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth <= 1100) {
        const menuLinks = document.querySelectorAll('.main-menu li.mobile-toggle > a');

        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const parentLi = this.parentElement;

                // Close other open submenus
                document.querySelectorAll('.main-menu li.mobile-toggle.open').forEach(openLi => {
                    if (openLi !== parentLi) {
                        openLi.classList.remove('open');
                    }
                });

                // Toggle clicked submenu
                parentLi.classList.toggle('open');
            });
        });
    }
});
