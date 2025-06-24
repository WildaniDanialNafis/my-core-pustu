async function initializeDoughnutChart(data) {
    const trafficCanvas = document.getElementById('trafficChart');

    if (!trafficCanvas || !data) {
        console.warn('Elemen doughnut chart tidak ditemukan atau data kosong.');
        return;
    }

    const trafficCtx = trafficCanvas.getContext('2d');

    new Chart(trafficCtx, {
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
}
