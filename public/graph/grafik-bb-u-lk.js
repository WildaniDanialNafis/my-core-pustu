let dataGrafikBbULk = null;

function loadGrafikBbULk() {
    const csrfToken = getCsrfToken();

    return fetch('/ajax/data-grafik-bb-u-lk', {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        }
    })
        .then(response => {
            if (!response.ok) throw new Error('Gagal fetch ke /ajax/data-grafik-bb-u-lk');
            return response.json();
        })
        .then(data => {
            dataGrafikBbULk = data;
            return data;
        })
        .then(() => renderGrafikBbULk(csrfToken))
        .catch(error => {
            console.error('Error:', error);
        });
}

function renderGrafikBbULk(csrfToken) {
    const mainContent = document.querySelector('.main-content');
    if (!mainContent) {
        console.error('Element .main-content tidak ditemukan.');
        return;
    }

    fetch('/ajax/grafik-bb-u-lk', {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        }
    })
        .then(response => {
            if (!response.ok) throw new Error('Gagal mengambil konten grafik.');
            return response.text();
        })
        .then(html => {
            mainContent.innerHTML = html;

            if (!dataGrafikBbULk) {
                console.error('Data grafik belum tersedia');
                return;
            }

            initializeChartsBbULk(dataGrafikBbULk);

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
        })
        .catch(error => {
            console.error(error);
            mainContent.innerHTML = `<div class="error">Terjadi kesalahan: ${error.message}</div>`;
        });
}

function initializeChartsBbULk(data) {
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
                label: 'Berat Badan (kg)',
                data: data.data,
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderColor: 'rgba(59, 130, 246, 1)',
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
                        label: context => `BB: ${context.parsed.y} kg`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'kg' },
                    grid: { drawBorder: false, color: 'rgba(0, 0, 0, 0.05)' }
                },
                x: {
                    title: { display: true, text: 'Usia (bulan)' },
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
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(251, 191, 36, 0.8)',
                        'rgba(2, 132, 199, 0.8)'
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
                        label: context => `${context.label}: ${context.parsed} kg`
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
            chartHoverInfo.textContent = `${label}: ${value.toLocaleString()} kg`;
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
