
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
            await loadPageContent(href); // pakai fungsi terpadu
        });

        window.onpopstate = async function () {
            const href = window.location.pathname;
            await loadPageContent(href); // saat back/forward
        };
    }

    async function loadPageContent(href) {
        const path = normalizePath(href);
        setActiveSidebarItemFromURL(path);

        try {
            const response = await fetch(href, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) throw new Error('Gagal mengambil konten');

            const html = await response.text();
            const container = document.querySelector('.main-content');
            if (!container) {
                console.error('.main-content tidak ditemukan.');
                return;
            }

            container.innerHTML = html;
            await initializePageSpecificComponents(href);

        } catch (err) {
            console.error('Fetch error:', err);
            const container = document.querySelector('.main-content');
            if (container) {
                container.innerHTML = '<p>Gagal memuat konten.</p>';
            }
        }
    }

async function initializePageSpecificComponents(href) {
    const path = normalizePath(href).replace(/^\//, '');
    const functionName = 'initialize' + path
        .split('-')
        .map(part => part.charAt(0).toUpperCase() + part.slice(1))
        .join('') + 'Components';

    const tableName = path.replace(/-/g, '_');

    if (typeof window[functionName] === 'function') {
        await window[functionName](); // ✅ tunggu sampai selesai
    } else {
        console.warn(`Fungsi ${functionName} tidak ditemukan. Menjalankan loadTableContent sebagai fallback.`);
        if (typeof window.loadTableContent === 'function') {
            await window.loadTableContent(tableName); // ✅ tunggu sampai selesai
        } else {
            console.error('loadTableContent tidak ditemukan.');
        }
    }
}

    // Jalankan saat halaman pertama kali dimuat
    document.addEventListener('DOMContentLoaded', async () => {
        setupSidebarNavigationOnly();

        const currentPath = window.location.pathname;
        await loadPageContent(currentPath);
    });
