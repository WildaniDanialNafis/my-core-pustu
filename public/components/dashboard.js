// async function initializeDashboardComponents() {
//     AOS.init({ once: true });

//     $('#ordersTable').DataTable({
//         responsive: true,
//         dom: '<"top"f>rt<"bottom"lip><"clear">',
//         pageLength: 5,
//         lengthMenu: [5, 10, 25, 50],
//         language: {
//             search: "_INPUT_",
//             searchPlaceholder: "Search orders...",
//         }
//     });

//     const revenueCtx = document.getElementById('revenueChart').getContext('2d');
//     const revenueChart = new Chart(revenueCtx, {
//         type: 'line',
//         data: {
//             labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
//             datasets: [{
//                 label: 'Revenue',
//                 data: [12000, 19000, 15000, 22000, 24560, 18000, 21000],
//                 backgroundColor: 'rgba(99, 102, 241, 0.1)',
//                 borderColor: 'rgba(99, 102, 241, 1)',
//                 borderWidth: 2,
//                 tension: 0.4,
//                 fill: true,
//                 pointBackgroundColor: '#fff',
//                 pointBorderWidth: 2,
//                 pointRadius: 4,
//                 pointHoverRadius: 6
//             }]
//         },
//         options: {
//             responsive: true,
//             maintainAspectRatio: false,
//             plugins: {
//                 legend: { display: false },
//                 tooltip: {
//                     mode: 'index',
//                     intersect: false
//                 }
//             },
//             scales: {
//                 y: {
//                     beginAtZero: true,
//                     grid: {
//                         drawBorder: false,
//                         color: 'rgba(0, 0, 0, 0.05)'
//                     },
//                     ticks: {
//                         callback: function(value) {
//                             return '$' + value.toLocaleString();
//                         }
//                     }
//                 },
//                 x: {
//                     grid: {
//                         display: false
//                     }
//                 }
//             },
//             interaction: {
//                 mode: 'nearest',
//                 axis: 'x',
//                 intersect: false
//             }
//         }
//     });

//     const trafficCtx = document.getElementById('trafficChart').getContext('2d');
//     const trafficChart = new Chart(trafficCtx, {
//         type: 'doughnut',
//         data: {
//             labels: ['Direct', 'Organic', 'Referral', 'Social'],
//             datasets: [{
//                 data: [45, 30, 15, 10],
//                 backgroundColor: [
//                     'rgba(99, 102, 241, 0.8)',
//                     'rgba(16, 185, 129, 0.8)',
//                     'rgba(245, 158, 11, 0.8)',
//                     'rgba(239, 68, 68, 0.8)'
//                 ],
//                 borderWidth: 0,
//                 hoverOffset: 10
//             }]
//         },
//         options: {
//             responsive: true,
//             maintainAspectRatio: false,
//             cutout: '70%',
//             plugins: {
//                 legend: { display: false }
//             }
//         }
//     });

//     const chartHoverInfo = document.getElementById('chartHoverInfo');
//     document.getElementById('revenueChart').addEventListener('mousemove', function(evt) {
//         const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', { intersect: false }, true);
//         if (points.length) {
//             const point = points[0];
//             const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
//             const label = revenueChart.data.labels[point.index];
//             chartHoverInfo.classList.add('visible');
//             chartHoverInfo.textContent = `${label}: $${value.toLocaleString()}`;
//             chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
//             chartHoverInfo.style.top = `${evt.offsetY}px`;
//         } else {
//             chartHoverInfo.classList.remove('visible');
//         }
//     });

//     document.getElementById('revenueChart').addEventListener('mouseout', function() {
//         chartHoverInfo.classList.remove('visible');
//     });

//     $(window).scroll(function() {
//         if ($(this).scrollTop() > 10) $('.header').addClass('scrolled');
//         else $('.header').removeClass('scrolled');
//     });

//     $('#searchInput').on('input', function() {
//         const searchTerm = $(this).val().toLowerCase();
//         if (searchTerm.length > 2) console.log('Searching for:', searchTerm);
//     });

//     $('#notificationBtn').click(function() {
//         alert('Notifications would appear here');
//     });

//     $('#userBtn').click(function() {
//         alert('User menu would appear here');
//     });
// }


let dataGrafikDashboard = null;

async function getCsrfToken() {
    return document.querySelector('meta[name="csrf-token"]')?.content || '';
}

async function initializeDashboardComponents(url) {
    const csrfToken = await getCsrfToken();

    try {
        const response = await fetch(url +'/data', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            }
        });

        if (!response.ok) throw new Error('Gagal fetch ke '+ url +'/data');

        const data = await response.json();
        dataGrafikDashboard = data;

        console.log(data.ibuHamilAktif);

        // Pastikan elemen dengan id "ibu-hamil-aktif" ada di HTML
        document.getElementById('ibu-hamil-aktif').innerHTML = data.ibuHamilAktif;
        document.getElementById('balita-aktif').innerHTML = data.balitaAktif;
        document.getElementById('persalinan-bulan-ini').innerHTML = data.persalinanBulanIni;
        document.getElementById('risk-terpantau').innerHTML = data.riskTerpantau;

        await initializeDashboardLineChart(data.lineLabels, data.lineData);
        await initializeDashboardDoughnutChart(data.doughnutLabels, data.doughnutData);
    } catch (error) {
        console.error('Error:', error);
    }
}

// function initializeChartsDashboard(data) {
//     const revenueCanvas = document.getElementById('revenueChart');
//     const trafficCanvas = document.getElementById('trafficChart');
//     const chartHoverInfo = document.getElementById('chartHoverInfo');

//     if (!revenueCanvas || !trafficCanvas || !data) {
//         console.warn('Elemen chart tidak ditemukan atau data kosong.');
//         return;
//     }

//     const revenueCtx = revenueCanvas.getContext('2d');
//     const revenueChart = new Chart(revenueCtx, {
//         type: 'line',
//         data: {
//             labels: data.labels,
//             datasets: [{
//                 label: 'Berat Badan (kg)',
//                 data: data.data,
//                 backgroundColor: 'rgba(59, 130, 246, 0.1)',
//                 borderColor: 'rgba(59, 130, 246, 1)',
//                 borderWidth: 2,
//                 tension: 0.4,
//                 fill: true,
//                 pointBackgroundColor: '#fff',
//                 pointBorderWidth: 2,
//                 pointRadius: 4,
//                 pointHoverRadius: 6
//             }]
//         },
//         options: {
//             responsive: true,
//             maintainAspectRatio: false,
//             plugins: {
//                 legend: { display: true },
//                 tooltip: {
//                     mode: 'index',
//                     intersect: false,
//                     callbacks: {
//                         label: context => `BB: ${context.parsed.y} kg`
//                     }
//                 }
//             },
//             scales: {
//                 y: {
//                     beginAtZero: true,
//                     title: { display: true, text: 'kg' },
//                     grid: { drawBorder: false, color: 'rgba(0, 0, 0, 0.05)' }
//                 },
//                 x: {
//                     title: { display: true, text: 'Usia (bulan)' },
//                     grid: { display: false }
//                 }
//             },
//             interaction: {
//                 mode: 'nearest',
//                 axis: 'x',
//                 intersect: false
//             }
//         }
//     });

//     const trafficCtx = trafficCanvas.getContext('2d');
//     const trafficChart = new Chart(trafficCtx, {
//         type: 'doughnut',
//         data: {
//             labels: data.labels,
//             datasets: [{
//                 data: data.data,
//                 backgroundColor: data.labels.map((_, i) => {
//                     const colors = [
//                         'rgba(59, 130, 246, 0.8)',
//                         'rgba(16, 185, 129, 0.8)',
//                         'rgba(245, 158, 11, 0.8)',
//                         'rgba(239, 68, 68, 0.8)',
//                         'rgba(34, 197, 94, 0.8)',
//                         'rgba(168, 85, 247, 0.8)',
//                         'rgba(251, 191, 36, 0.8)',
//                         'rgba(2, 132, 199, 0.8)'
//                     ];
//                     return colors[i % colors.length];
//                 }),
//                 borderWidth: 0,
//                 hoverOffset: 10
//             }]
//         },
//         options: {
//             responsive: true,
//             maintainAspectRatio: false,
//             cutout: '70%',
//             plugins: {
//                 legend: {
//                     display: true,
//                     position: 'bottom',
//                     labels: {
//                         color: '#333',
//                         padding: 15,
//                         boxWidth: 12
//                     }
//                 },
//                 tooltip: {
//                     callbacks: {
//                         label: context => `${context.label}: ${context.parsed} kg`
//                     }
//                 }
//             }
//         }
//     });

//     revenueCanvas.addEventListener('mousemove', evt => {
//         const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', { intersect: false }, true);
//         if (points.length && chartHoverInfo) {
//             const point = points[0];
//             const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
//             const label = revenueChart.data.labels[point.index];
//             chartHoverInfo.classList.add('visible');
//             chartHoverInfo.textContent = `${label}: ${value.toLocaleString()} kg`;
//             chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
//             chartHoverInfo.style.top = `${evt.offsetY}px`;
//         } else if (chartHoverInfo) {
//             chartHoverInfo.classList.remove('visible');
//         }
//     });

//     revenueCanvas.addEventListener('mouseout', () => {
//         if (chartHoverInfo) chartHoverInfo.classList.remove('visible');
//     });
// }
