let dataGrafikTbULk = null;

function getCsrfToken() {
    return document.querySelector('meta[name="csrf-token"]')?.content || '';
}

async function loadGrafikTbULk() {
    const csrfToken = getCsrfToken();

    try {
        const response = await fetch('/ajax/data-grafik-tb-u-lk', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            }
        });

        if (!response.ok) throw new Error('Gagal fetch ke /ajax/data-grafik-tb-u-lk');

        const data = await response.json();
        dataGrafikTbULk = data;

        await renderGrafikTbULk(csrfToken);
    } catch (error) {
        console.error('Error:', error);
    }
}

async function renderGrafikTbULk(csrfToken) {
    const mainContent = document.querySelector('.main-content');
    if (!mainContent) {
        console.error('Element .main-content tidak ditemukan.');
        return;
    }

    try {
        const response = await fetch('/ajax/grafik-tb-u-lk', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            }
        });

        if (!response.ok) throw new Error('Gagal mengambil konten grafik.');

        const html = await response.text();
        mainContent.innerHTML = html;

        if (!dataGrafikTbULk) {
            console.error('Data grafik belum tersedia');
            return;
        }

        initializeChartsTbULk(dataGrafikTbULk);

        AOS.init({ once: true });

        const ordersTable = document.getElementById('ordersTable');
        if (ordersTable) {
            $(ordersTable).DataTable({
                responsive: true,
                dom: '<"top"f>rt<"bottom"lip><"clear">',
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search orders...",
                }
            });
        }
    } catch (error) {
        console.error(error);
        mainContent.innerHTML = `<div class="error">Terjadi kesalahan: ${error.message}</div>`;
    }
}

function initializeChartsTbULk(data) {
    const revenueCanvas = document.getElementById('revenueChart');
    const trafficCanvas = document.getElementById('trafficChart');
    const chartHoverInfo = document.getElementById('chartHoverInfo');

    if (!revenueCanvas || !trafficCanvas || !data) {
        console.warn('Elemen chart tidak ditemukan atau data kosong.');
        return;
    }

    const revenueCtx = revenueCanvas.getContext('2d');
    const revenueChart = new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: data.labels,
            datasets: [{
                label: 'Tinggi Badan (cm)',
                data: data.data,
                backgroundColor: 'rgba(99, 102, 241, 0.1)',
                borderColor: 'rgba(99, 102, 241, 1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: true },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: context => `TB: ${context.parsed.y} cm`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'cm' },
                    grid: { drawBorder: false, color: 'rgba(0, 0, 0, 0.05)' }
                },
                x: {
                    title: { display: true, text: 'Usia' },
                    grid: { display: false }
                }
            },
            interaction: {
                mode: 'nearest',
                axis: 'x',
                intersect: false
            }
        }
    });

    const trafficCtx = trafficCanvas.getContext('2d');
    const trafficChart = new Chart(trafficCtx, {
        type: 'doughnut',
        data: {
            labels: data.labels,
            datasets: [{
                data: data.data,
                backgroundColor: data.labels.map((_, i) => {
                    const colors = [
                        'rgba(99, 102, 241, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(251, 191, 36, 0.8)',
                        'rgba(2, 132, 199, 0.8)',
                        'rgba(202, 138, 4, 0.8)'
                    ];
                    return colors[i % colors.length];
                }),
                borderWidth: 0,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        color: '#333',
                        padding: 15,
                        boxWidth: 12
                    }
                },
                tooltip: {
                    callbacks: {
                        label: context => `${context.label}: ${context.parsed} cm`
                    }
                }
            }
        }
    });

    revenueCanvas.addEventListener('mousemove', evt => {
        const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', { intersect: false }, true);
        if (points.length && chartHoverInfo) {
            const point = points[0];
            const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
            const label = revenueChart.data.labels[point.index];
            chartHoverInfo.classList.add('visible');
            chartHoverInfo.textContent = `${label}: ${value.toLocaleString()} cm`;
            chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
            chartHoverInfo.style.top = `${evt.offsetY}px`;
        } else if (chartHoverInfo) {
            chartHoverInfo.classList.remove('visible');
        }
    });

    revenueCanvas.addEventListener('mouseout', () => {
        if (chartHoverInfo) chartHoverInfo.classList.remove('visible');
    });
}
