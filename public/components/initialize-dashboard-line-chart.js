async function initializeDashboardLineChart(labels, datas) {
    try {
        const canvas = document.getElementById('revenueChart');
        if (!canvas) {
            console.warn('Elemen canvas chart tidak ditemukan.');
            return;
        }

        if (!Array.isArray(labels) || !Array.isArray(datas) || labels.length === 0 || datas.length === 0) {
            console.warn('Data grafik line kosong atau tidak valid.');
            return;
        }

        const ctx = canvas.getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels,
                datasets: [{
                    label: 'Kunjungan Pemeriksaan Ibu Hamil',
                    data: datas,
                    backgroundColor: 'rgba(236, 72, 153, 0.1)',
                    borderColor: 'rgba(236, 72, 153, 1)',
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
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#fff',
                        bodyColor: '#f0f0f0',
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        titleFont: { weight: 'bold' },
                        bodyFont: { size: 13 },
                        padding: 10,
                        callbacks: {
                            title: context => `Tanggal: ${context[0].label}`,
                            label: context => `👩‍⚕️ ${context.dataset.label}: ${context.parsed.y.toLocaleString('id-ID')} kunjungan`
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Kunjungan'
                        },
                        grid: {
                            drawBorder: false,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        },
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

    } catch (error) {
        console.error('Gagal memuat line chart:', error);
    }
}
