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

    $('.sidebar-menu a[href^="/"]').on('click', async function (e) {
        const href = $(this).attr('href');
        if (!href || href === '#') return;

        e.preventDefault();
        window.history.pushState({}, '', href);
        await loadPageContent(href);
    });

    window.onpopstate = async () => {
        await loadPageContent(window.location.pathname);
    };
}

async function loadPageContent(href) {
    const path = normalizePath(href);
    setActiveSidebarItemFromURL(path);
    showLoadingOverlay();

    try {
        const response = await fetch(href, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        });

        if (!response.ok) throw new Error('Gagal mengambil konten');

        const html = await response.text();
        const container = document.querySelector('.main-content');
        if (!container) return;

        container.innerHTML = html;

        if (typeof AOS !== 'undefined') {
            AOS.init({ once: true });
        }

        await initializePageSpecificComponents(href);
    } catch (err) {
        console.error('Fetch error:', err);
        const container = document.querySelector('.main-content');
        if (container) {
            container.innerHTML = '<p>Gagal memuat konten.</p>';
        }
    } finally {
        hideLoadingOverlay();
    }
}

async function initializePageSpecificComponents(href) {
    const path = normalizePath(href).replace(/^\//, '');

    if (path.startsWith('grafik/')) {
        const fnName = convertGrafikUrlToFunctionName(path);
        const grafikFn = window[fnName];

        if (typeof loadGrafikCoba === 'function') {
            await loadGrafikCoba(href);
        } else {
            console.warn(`Fungsi ${fnName} tidak ditemukan untuk grafik.`);
        }

        // if (typeof grafikFn === 'function') {
        //     await grafikFn(path);
        // } else {
        //     console.warn(`Fungsi ${fnName} tidak ditemukan untuk grafik.`);
        // }

        return;
    }

    const functionName = 'initialize' + path
        .split('-')
        .map(part => part.charAt(0).toUpperCase() + part.slice(1))
        .join('') + 'Components';

    const tableName = path.replace(/-/g, '_');

    console.info(functionName);

    if (typeof window[functionName] === 'function') {
        await window[functionName](path);
    } else if (typeof window.loadTableContent === 'function') {
        await window.loadTableContent(tableName);
    } else {
        console.warn('loadTableContent tidak ditemukan.');
    }
}

function showLoadingOverlay() {
    const overlay = document.getElementById('loadingOverlay');
    if (!overlay) return;

    overlay.style.display = 'flex';
    requestAnimationFrame(() => {
        overlay.classList.add('active');
    });
}

function hideLoadingOverlay() {
    const overlay = document.getElementById('loadingOverlay');
    if (!overlay) return;

    overlay.classList.remove('active');
    setTimeout(() => {
        overlay.style.display = 'none';
    }, 300);
}

function convertGrafikUrlToFunctionName(url) {
    const path = url.replace(/^\/+|\/+$/g, '');
    const parts = path.split('/');

    if (parts[0] !== 'grafik' || !parts[1]) return null;

    const base = parts[1];
    const camelCase = base
        .split('-')
        .map(part => part.charAt(0).toUpperCase() + part.slice(1))
        .join('');

    return 'load' + camelCase;
}

document.addEventListener('DOMContentLoaded', async () => {
    setupSidebarNavigationOnly();
    await loadPageContent(window.location.pathname);
});
