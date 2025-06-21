function normalizePath(path) {
    return path.replace(/\/+$/, '').toLowerCase();
}

function setActiveSidebarItemFromURL(pathname = window.location.pathname) {
    const normalizedPath = normalizePath(pathname);
    $('.sidebar-menu a').removeClass('active');
    $('.has-submenu').removeClass('open');
    $('.sidebar-menu a[href]').each(function () {
        const href = $(this).attr('href');
        if (!href || href === '#') return;
        const linkPath = normalizePath(href);
        if (linkPath === normalizedPath) {
            $(this).addClass('active');
            $(this).closest('.has-submenu').addClass('open');
        }
    });
}

function setupSidebarNavigationOnly() {
    $('.has-submenu > a').on('click', function (e) {
        const href = $(this).attr('href');
        if (!href || href === '#') {
            e.preventDefault();
            e.stopPropagation();
            $(this).parent().toggleClass('open');
            $(this).find('.menu-arrow').toggleClass('rotate-180');
        }
    });

    $('.sidebar-menu a[href^="/"]').on('click', function (e) {
        const href = $(this).attr('href');
        if (!href || href === '#') return;
        e.preventDefault();
        window.history.pushState({}, '', href);
        setActiveSidebarItemFromURL(href);
    });

    window.onpopstate = function () {
        setActiveSidebarItemFromURL(window.location.pathname);
    };
}

$(document).ready(function () {
    setActiveSidebarItemFromURL();
    setupSidebarNavigationOnly();
});
