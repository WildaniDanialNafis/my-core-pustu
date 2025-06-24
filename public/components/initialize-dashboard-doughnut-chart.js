async function initializeDashboardDoughnutChart(labels, datas) {
    try {
        const trafficCanvas = document.getElementById('trafficChart');
        if (!trafficCanvas) {
            console.warn('Elemen doughnut chart tidak ditemukan.');
            return;
        }

        if (!Array.isArray(labels) || !Array.isArray(datas) || labels.length === 0 || datas.length === 0) {
            console.warn('Data grafik doughnut kosong atau tidak valid.');
            return;
        }

        const ctx = trafficCanvas.getContext('2d');
        const total = datas.reduce((sum, val) => sum + val, 0);

        const colors = [
            'rgba(59, 130, 246, 0.8)',   // Biru - Laki-laki
            'rgba(239, 68, 68, 0.8)',    // Merah - Perempuan
            'rgba(168, 85, 247, 0.8)',   // Ungu - Tidak diketahui
            'rgba(16, 185, 129, 0.8)',
            'rgba(245, 158, 11, 0.8)',
            'rgba(34, 197, 94, 0.8)',
            'rgba(251, 191, 36, 0.8)',
            'rgba(2, 132, 199, 0.8)'
        ];

        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels,
                datasets: [{
                    data: datas,
                    backgroundColor: labels.map((_, i) => colors[i % colors.length]),
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#fff',
                        bodyColor: '#eee',
                        borderColor: 'rgba(255, 255, 255, 0.2)',
                        borderWidth: 1,
                        padding: 10,
                        callbacks: {
                            label: context => {
                                const value = context.parsed;
                                const percent = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                return `👶 ${context.label}: ${value} bayi (${percent}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Render custom legend
        const legendContainer = document.querySelector('.traffic-legend');
        if (legendContainer) {
            legendContainer.innerHTML = labels.map((label, i) => {
                const value = datas[i];
                const percent = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                const color = colors[i % colors.length];
                return `
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color rounded-circle" style="width: 12px; height: 12px; background: ${color};"></div>
                        <small class="ms-2">${label} - ${percent}%</small>
                    </div>
                `;
            }).join('');
        }

    } catch (error) {
        console.error('Gagal memuat doughnut chart:', error);
    }
}