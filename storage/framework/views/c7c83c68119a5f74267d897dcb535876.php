    <!-- Custom Script -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            once: true
        });

        // Sidebar Submenu Toggle
        $(document).ready(function() {
            $('.menu-item.has-submenu > a').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('open');
                $(this).find('.menu-arrow').toggleClass('rotate-180');
            });

            // Initialize DataTable
            $('#ordersTable').DataTable({
                responsive: true,
                dom: '<"top"f>rt<"bottom"lip><"clear">',
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search orders...",
                }
            });

            // Revenue Chart
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000, 19000, 15000, 22000, 24560, 18000, 21000],
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
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    interaction: {
                        mode: 'nearest',
                        axis: 'x',
                        intersect: false
                    }
                }
            });

            // Traffic Chart
            const trafficCtx = document.getElementById('trafficChart').getContext('2d');
            const trafficChart = new Chart(trafficCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Direct', 'Organic', 'Referral', 'Social'],
                    datasets: [{
                        data: [45, 30, 15, 10],
                        backgroundColor: [
                            'rgba(99, 102, 241, 0.8)',
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(245, 158, 11, 0.8)',
                            'rgba(239, 68, 68, 0.8)'
                        ],
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
                            display: false
                        }
                    }
                }
            });

            // Chart hover info
            const chartHoverInfo = document.getElementById('chartHoverInfo');
            document.getElementById('revenueChart').addEventListener('mousemove', function(evt) {
                const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', {
                    intersect: false
                }, true);
                if (points.length) {
                    const point = points[0];
                    const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
                    const label = revenueChart.data.labels[point.index];

                    chartHoverInfo.classList.add('visible');
                    chartHoverInfo.textContent = `${label}: $${value.toLocaleString()}`;
                    chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
                    chartHoverInfo.style.top = `${evt.offsetY}px`;
                } else {
                    chartHoverInfo.classList.remove('visible');
                }
            });

            document.getElementById('revenueChart').addEventListener('mouseout', function() {
                chartHoverInfo.classList.remove('visible');
            });

            // Header scroll effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('.header').addClass('scrolled');
                } else {
                    $('.header').removeClass('scrolled');
                }
            });

            // Search functionality
            $('#searchInput').on('input', function() {
                const searchTerm = $(this).val().toLowerCase();
                if (searchTerm.length > 2) {
                    // Implement search logic here
                    console.log('Searching for:', searchTerm);
                }
            });

            // Notification dropdown
            $('#notificationBtn').click(function() {
                // Implement notification dropdown
                alert('Notifications would appear here');
            });

            // User profile dropdown
            $('#userBtn').click(function() {
                // Implement user dropdown
                alert('User menu would appear here');
            });
        });
    </script><?php /**PATH /var/www/my-core-pustu/resources/views/partials/script-dashboard.blade.php ENDPATH**/ ?>