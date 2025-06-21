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

async function loadPage(url, pushState = false) {
    if (pushState) window.history.pushState({}, '', url);
    const normalizedUrl = normalizePath(url);

    switch (normalizedUrl) {
        case '/dashboard':
            await loadDashboardContent(); break;
        case '/grafik-bb-u-lk':
            await loadGrafikBbULk(); break;
        case '/grafik-tb-u-lk':
            await loadGrafikTbULk(); break;
        case '/grafik-bb-tb-lk':
            await loadGrafikBbTbLk(); break;
        case '/grafik-lingkar-lk':
            await loadGrafikLingkarLk(); break;
        case '/grafik-bb-u-pr':
            await loadGrafikBbUPr(); break;
        case '/grafik-tb-u-pr':
            await loadGrafikTbUPr(); break;
        case '/grafik-bb-tb-pr':
            await loadGrafikBbTbPr(); break;
        case '/grafik-lingkar-pr':
            await loadGrafikLingkarPr(); break;
        case '/grafik-imt-lk':
            await loadGrafikImtLk(); break;
        case '/grafik-imt-pr':
            await loadGrafikImtPr(); break;
        default:
            const match = normalizedUrl.match(/^\/([a-zA-Z0-9\-]+)$/);
            if (match) {
                const tableSlug = match[1];
                const table = tableSlug.replace(/-/g, '_');
                await loadTableContent(table);
            }
    }

    setActiveSidebarItemFromURL(url);
}

$(document).ready(function () {
    setActiveSidebarItemFromURL();

    $('.has-submenu > a').on('click', function (e) {
        const href = $(this).attr('href');
        if (!href || href === '#') {
            e.preventDefault();
            e.stopPropagation();
            $(this).parent().toggleClass('open');
            $(this).find('.menu-arrow').toggleClass('rotate-180');
        }
    });

    $('.sidebar-menu a[href^="/"]').on('click', async function (e) {
        const href = $(this).attr('href');
        if (!href || href === '#') return;
        e.preventDefault();
        await loadPage(href, true);
    });

    window.onpopstate = async function () {
        await loadPage(window.location.pathname, false);
    };

    // Initial page load
    (async () => {
        await loadPage(window.location.pathname, false);
    })();
});
