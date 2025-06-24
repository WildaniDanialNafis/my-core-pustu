 function debounce(func, wait) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }

    const sidebarSearchInput = document.getElementById('sidebarSearch');

    const performSidebarSearch = function () {
        const keyword = this.value.toLowerCase().trim();
        const menuItems = document.querySelectorAll('.sidebar-menu .menu-item');
        const menuTitles = document.querySelectorAll('.sidebar-menu .menu-title');

        const restoreOriginalText = (element) => {
            if (element.dataset.original) {
                element.innerHTML = element.dataset.original;
                delete element.dataset.original;
            }
        };

        const highlightMatches = (element, keyword) => {
            if (!element.dataset.original) {
                element.dataset.original = element.innerHTML;
            }

            const fragment = document.createDocumentFragment();
            const walker = document.createTreeWalker(
                element,
                NodeFilter.SHOW_TEXT | NodeFilter.SHOW_ELEMENT,
                {
                    acceptNode: function (node) {
                        if (node.nodeType === Node.ELEMENT_NODE && node.tagName === 'BR') {
                            return NodeFilter.FILTER_ACCEPT;
                        }
                        if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
                            return NodeFilter.FILTER_ACCEPT;
                        }
                        return NodeFilter.FILTER_SKIP;
                    }
                }
            );

            let node;
            while (node = walker.nextNode()) {
                if (node.nodeType === Node.ELEMENT_NODE && node.tagName === 'BR') {
                    fragment.appendChild(node.cloneNode());
                } else if (node.nodeType === Node.TEXT_NODE) {
                    const text = node.nodeValue;
                    if (keyword && text.toLowerCase().includes(keyword)) {
                        const regex = new RegExp(`(${keyword.replace(/[-/\\^$*+?.()|[\]{}]/g, '\\$&')})`, 'gi');
                        const span = document.createElement('span');
                        span.innerHTML = text.replace(regex, '<mark class="highlight">$1</mark>');
                        fragment.appendChild(span);
                    } else {
                        fragment.appendChild(document.createTextNode(text));
                    }
                }
            }

            element.innerHTML = '';
            element.appendChild(fragment);
        };

        menuItems.forEach(item => {
            const menuTextEl = item.querySelector('.menu-text');
            const menuText = menuTextEl?.textContent.toLowerCase() || '';
            let match = menuText.includes(keyword);

            if (menuTextEl) {
                keyword ? highlightMatches(menuTextEl, keyword) : restoreOriginalText(menuTextEl);
            }

            const submenu = item.querySelector('.submenu');
            let submenuMatch = false;

            if (submenu) {
                const submenuItems = submenu.querySelectorAll('li a');
                submenuItems.forEach(sub => {
                    const subTextEl = sub;
                    const subText = subTextEl.textContent.toLowerCase();
                    const isVisible = subText.includes(keyword);

                    keyword ? highlightMatches(subTextEl, keyword) : restoreOriginalText(subTextEl);

                    sub.parentElement.style.display = isVisible ? '' : 'none';
                    if (isVisible) submenuMatch = true;
                });

                submenu.style.display = submenuMatch ? '' : (!keyword ? '' : 'none');
                item.classList.toggle('open', submenuMatch);
            }

            // FIXED: Perbaikan bug saat input kosong
            if (!keyword) {
                item.style.display = '';
                item.classList.remove('open');
                if (submenu) submenu.style.display = '';
            } else if (!match && !submenuMatch) {
                item.style.display = 'none';
                item.classList.remove('open');
                if (submenu) submenu.style.display = 'none';
            } else {
                item.style.display = '';
            }
        });

        menuTitles.forEach(title => {
            let next = title.nextElementSibling;
            let hasVisible = false;

            while (next && !next.classList.contains('menu-title')) {
                if (next.classList.contains('menu-item') && next.style.display !== 'none') {
                    hasVisible = true;
                    break;
                }
                next = next.nextElementSibling;
            }

            title.style.display = hasVisible ? '' : 'none';
        });
    };

    sidebarSearchInput.addEventListener('input', debounce(performSidebarSearch, 250));