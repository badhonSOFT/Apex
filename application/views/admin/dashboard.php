<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Apex</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <!-- Main Content -->
        <main class="main-content">
            <header class="top-header">
                <h1>Dashboard Overview</h1>
                <div class="header-actions">
                    <button class="btn-primary"><i class="fas fa-plus"></i> Add Product</button>
                    <div class="user-profile">
                        <img src="https://via.placeholder.com/40" alt="Admin">
                        <span>Admin User</span>
                    </div>
                </div>
            </header>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon revenue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-content">
                        <h3>$24,580</h3>
                        <p>Total Revenue</p>
                        <span class="stat-change positive">+12.5%</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon orders">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="stat-content">
                        <h3>1,247</h3>
                        <p>Total Orders</p>
                        <span class="stat-change positive">+8.2%</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon products">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="stat-content">
                        <h3>342</h3>
                        <p>Products</p>
                        <span class="stat-change neutral">+2.1%</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon users">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>8,429</h3>
                        <p>Active Users</p>
                        <span class="stat-change positive">+15.3%</span>
                    </div>
                </div>
            </div>

            <!-- Charts and Tables -->
            <div class="dashboard-grid">
                <div class="chart-card">
                    <h3>Sales Overview</h3>
                    <div class="chart-placeholder">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
                <div class="recent-orders">
                    <h3>Recent Orders</h3>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-001</td>
                                    <td>John Doe</td>
                                    <td>$125.00</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>#ORD-002</td>
                                    <td>Jane Smith</td>
                                    <td>$89.50</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#ORD-003</td>
                                    <td>Mike Johnson</td>
                                    <td>$234.75</td>
                                    <td><span class="status processing">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { display: flex; min-height: 100vh; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }
.top-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.top-header h1 { font-size: 2rem; color: #1e293b; }
.header-actions { display: flex; align-items: center; gap: 1rem; }
.btn-primary { background: #667eea; color: white; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; }
.user-profile { display: flex; align-items: center; gap: 8px; }
.user-profile img { width: 40px; height: 40px; border-radius: 50%; }

.stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
.stat-card { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); display: flex; align-items: center; gap: 1rem; }
.stat-icon { width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
.stat-icon.revenue { background: #dcfce7; color: #16a34a; }
.stat-icon.orders { background: #dbeafe; color: #2563eb; }
.stat-icon.products { background: #fef3c7; color: #d97706; }
.stat-icon.users { background: #f3e8ff; color: #9333ea; }
.stat-content h3 { font-size: 1.8rem; font-weight: 700; color: #1e293b; }
.stat-content p { color: #64748b; margin: 4px 0; }
.stat-change { font-size: 0.85rem; font-weight: 500; }
.stat-change.positive { color: #16a34a; }
.stat-change.neutral { color: #64748b; }

.dashboard-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; }
.chart-card, .recent-orders { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.chart-card h3, .recent-orders h3 { margin-bottom: 1rem; color: #1e293b; }
.chart-placeholder { height: 300px; background: #f1f5f9; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; }

.table-container { overflow-x: auto; }
table { width: 100%; border-collapse: collapse; }
th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
th { font-weight: 600; color: #374151; background: #f8fafc; }
.status { padding: 4px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; }
.status.completed { background: #dcfce7; color: #16a34a; }
.status.pending { background: #fef3c7; color: #d97706; }
.status.processing { background: #dbeafe; color: #2563eb; }

@media (max-width: 768px) {
    .admin-container { flex-direction: column; }
    .sidebar { width: 100%; height: auto; }
    .nav-menu { display: flex; overflow-x: auto; padding: 0; }
    .nav-menu li { flex-shrink: 0; }
    .dashboard-grid { grid-template-columns: 1fr; }
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('salesChart');
    if (ctx) {
        ctx.innerHTML = '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #64748b;">Sales Chart Placeholder<br><small>Integrate with Chart.js or similar</small></div>';
    }
});
</script>
</body>
</html>