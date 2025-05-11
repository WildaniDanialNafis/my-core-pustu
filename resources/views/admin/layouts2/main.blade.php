<div class="page-header">
    <div class="page-title">
        <h1 class="animate__animated animate__fadeIn">Dashboard Overview</h1>
        <ul class="breadcrumb animate__animated animate__fadeIn animate__delay-1s">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ul>
    </div>

    <div class="page-actions">
        <button class="btn btn-outline-primary animate__animated animate__fadeIn animate__delay-2s">
            <i class="fas fa-download"></i> Export
        </button>
        <button class="btn btn-primary animate__animated animate__fadeIn animate__delay-2s">
            <i class="fas fa-plus"></i> Add New
        </button>
    </div>
</div>

<!-- Stats Cards -->
<div class="stats-grid">
    <div class="stat-card primary fade-in" data-aos="fade-up" data-aos-duration="800">
        <i class="fas fa-wallet stat-icon"></i>
        <div class="stat-value">$24,560</div>
        <div class="stat-title">Total Revenue</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 12.5% from last month
        </div>
    </div>

    <div class="stat-card success fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <i class="fas fa-users stat-icon"></i>
        <div class="stat-value">1,245</div>
        <div class="stat-title">New Users</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 8.3% from last month
        </div>
    </div>

    <div class="stat-card warning fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <i class="fas fa-shopping-cart stat-icon"></i>
        <div class="stat-value">356</div>
        <div class="stat-title">Total Orders</div>
        <div class="stat-change negative">
            <i class="fas fa-arrow-down"></i> 2.1% from last month
        </div>
    </div>

    <div class="stat-card danger fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <i class="fas fa-chart-line stat-icon"></i>
        <div class="stat-value">86.4%</div>
        <div class="stat-title">Conversion Rate</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 3.7% from last month
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row">
    <div class="col-md-8">
        <div class="card" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header">
                <h5 class="card-title">Revenue Overview</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="chartDropdown"
                        data-bs-toggle="dropdown">
                        This Month
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                    <div class="chart-hover-info" id="chartHoverInfo"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="card-header">
                <h5 class="card-title">Traffic Sources</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="trafficChart"></canvas>
                </div>
                <div class="traffic-legend mt-3">
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-primary rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Direct - 45%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-success rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Organic - 30%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-warning rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Referral - 15%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center">
                        <div class="traffic-color bg-danger rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Social - 10%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Orders & Top Products -->
<div class="row mt-4">
    <div class="col-md-8">
        <div class="card" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header">
                <h5 class="card-title">Recent Orders</h5>
                <button class="btn btn-sm btn-outline-primary">View All</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="ordersTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-7841</td>
                                <td>
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                        class="user-avatar-table">
                                    John Smith
                                </td>
                                <td>12 May, 2023</td>
                                <td>$245.50</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-7840</td>
                                <td>
                                    <img src="https://randomuser.me/api/portraits/women/63.jpg"
                                        class="user-avatar-table">
                                    Sarah Johnson
                                </td>
                                <td>11 May, 2023</td>
                                <td>$178.00</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-7839</td>
                                <td>
                                    <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                        class="user-avatar-table">
                                    Michael Brown
                                </td>
                                <td>11 May, 2023</td>
                                <td>$420.75</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-7838</td>
                                <td>
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                        class="user-avatar-table">
                                    Emily Davis
                                </td>
                                <td>10 May, 2023</td>
                                <td>$89.99</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-7837</td>
                                <td>
                                    <img src="https://randomuser.me/api/portraits/men/12.jpg"
                                        class="user-avatar-table">
                                    Robert Wilson
                                </td>
                                <td>9 May, 2023</td>
                                <td>$156.30</td>
                                <td><span class="badge bg-info">Shipped</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="card-header">
                <h5 class="card-title">Top Products</h5>
            </div>
            <div class="card-body">
                <div class="top-products-list">
                    <div class="product-item d-flex mb-3">
                        <div class="product-img me-3">
                            <img src="https://via.placeholder.com/60" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Wireless Headphones</h6>
                            <small class="text-muted">Electronics</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-primary">$129.99</span>
                                <span class="text-muted">1,245 sold</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-item d-flex mb-3">
                        <div class="product-img me-3">
                            <img src="https://via.placeholder.com/60" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Smart Watch</h6>
                            <small class="text-muted">Wearables</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-primary">$199.99</span>
                                <span class="text-muted">876 sold</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-item d-flex mb-3">
                        <div class="product-img me-3">
                            <img src="https://via.placeholder.com/60" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Bluetooth Speaker</h6>
                            <small class="text-muted">Audio</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-primary">$79.99</span>
                                <span class="text-muted">754 sold</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-item d-flex">
                        <div class="product-img me-3">
                            <img src="https://via.placeholder.com/60" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Fitness Tracker</h6>
                            <small class="text-muted">Wearables</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-primary">$59.99</span>
                                <span class="text-muted">632 sold</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
