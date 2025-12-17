<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports & Analytics - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>Reports & Analytics</h1>
                <div class="date-range">
                    <input type="date" id="startDate" value="2024-01-01">
                    <span>to</span>
                    <input type="date" id="endDate" value="2024-01-31">
                    <button class="btn-primary">Generate Report</button>
                </div>
            </header>

            <!-- Key Metrics -->
            <div class="metrics-grid">
                <div class="metric-card">
                    <div class="metric-header">
                        <h3>Total Revenue</h3>
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="metric-value">$45,280</div>
                    <div class="metric-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +18.5% from last month
                    </div>
                </div>
                <div class="metric-card">
                    <div class="metric-header">
                        <h3>Orders</h3>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="metric-value">1,247</div>
                    <div class="metric-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +12.3% from last month
                    </div>
                </div>
                <div class="metric-card">
                    <div class="metric-header">
                        <h3>Avg Order Value</h3>
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="metric-value">$36.32</div>
                    <div class="metric-change negative">
                        <i class="fas fa-arrow-down"></i>
                        -2.1% from last month
                    </div>
                </div>
                <div class="metric-card">
                    <div class="metric-header">
                        <h3>Conversion Rate</h3>
                        <i class="fas fa-percentage"></i>
                    </div>
                    <div class="metric-value">3.24%</div>
                    <div class="metric-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +0.8% from last month
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-grid">
                <div class="chart-container">
                    <div class="chart-header">
                        <h3>Sales Trend</h3>
                        <select class="chart-filter">
                            <option>Last 30 Days</option>
                            <option>Last 3 Months</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                    <div class="chart-placeholder">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="chart-header">
                        <h3>Top Categories</h3>
                    </div>
                    <div class="chart-placeholder">
                        <canvas id="categoryChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Tables Section -->
            <div class="tables-grid">
                <div class="table-container">
                    <h3>Top Products</h3>
                    <table class="report-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Sales</th>
                                <th>Revenue</th>
                                <th>Growth</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Premium T-Shirt</td>
                                <td>245</td>
                                <td>$7,350</td>
                                <td class="positive">+15%</td>
                            </tr>
                            <tr>
                                <td>Designer Jeans</td>
                                <td>189</td>
                                <td>$16,999</td>
                                <td class="positive">+8%</td>
                            </tr>
                            <tr>
                                <td>Kids Sneakers</td>
                                <td>156</td>
                                <td>$7,174</td>
                                <td class="negative">-3%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-container">
                    <h3>Customer Insights</h3>
                    <div class="insights-list">
                        <div class="insight-item">
                            <div class="insight-label">New Customers</div>
                            <div class="insight-value">342</div>
                            <div class="insight-change positive">+23%</div>
                        </div>
                        <div class="insight-item">
                            <div class="insight-label">Returning Customers</div>
                            <div class="insight-value">1,205</div>
                            <div class="insight-change positive">+12%</div>
                        </div>
                        <div class="insight-item">
                            <div class="insight-label">Customer Lifetime Value</div>
                            <div class="insight-value">$156.80</div>
                            <div class="insight-change positive">+8%</div>
                        </div>
                        <div class="insight-item">
                            <div class="insight-label">Churn Rate</div>
                            <div class="insight-value">2.3%</div>
                            <div class="insight-change negative">+0.5%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Export Section -->
            <div class="export-section">
                <h3>Export Reports</h3>
                <div class="export-buttons">
                    <button class="btn-export" onclick="exportReport('pdf')">
                        <i class="fas fa-file-pdf"></i> Export PDF
                    </button>
                    <button class="btn-export" onclick="exportReport('excel')">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </button>
                    <button class="btn-export" onclick="exportReport('csv')">
                        <i class="fas fa-file-csv"></i> Export CSV
                    </button>
                </div>
            </div>
        </main>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }

.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.page-header h1 { font-size: 2rem; color: #1e293b; }
.date-range { display: flex; align-items: center; gap: 1rem; }
.date-range input { padding: 8px 12px; border: 1px solid #e2e8f0; border-radius: 6px; }
.btn-primary { background: #667eea; color: white; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; }

.metrics-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
.metric-card { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.metric-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
.metric-header h3 { color: #64748b; font-size: 0.9rem; font-weight: 500; }
.metric-header i { color: #667eea; font-size: 1.2rem; }
.metric-value { font-size: 2rem; font-weight: 700; color: #1e293b; margin-bottom: 0.5rem; }
.metric-change { font-size: 0.85rem; display: flex; align-items: center; gap: 4px; }
.metric-change.positive { color: #16a34a; }
.metric-change.negative { color: #dc2626; }

.charts-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem; }
.chart-container { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.chart-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
.chart-header h3 { color: #1e293b; }
.chart-filter { padding: 6px 12px; border: 1px solid #e2e8f0; border-radius: 6px; background: white; }
.chart-placeholder { height: 300px; background: #f8fafc; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b; }

.tables-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem; }
.table-container { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.table-container h3 { margin-bottom: 1rem; color: #1e293b; }
.report-table { width: 100%; border-collapse: collapse; }
.report-table th, .report-table td { padding: 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
.report-table th { background: #f8fafc; font-weight: 600; color: #374151; }
.positive { color: #16a34a; font-weight: 500; }
.negative { color: #dc2626; font-weight: 500; }

.insights-list { display: flex; flex-direction: column; gap: 1rem; }
.insight-item { display: flex; justify-content: between; align-items: center; padding: 12px 0; border-bottom: 1px solid #f1f5f9; }
.insight-label { flex: 1; color: #64748b; }
.insight-value { font-weight: 600; color: #1e293b; margin-right: 1rem; }
.insight-change { font-size: 0.85rem; }

.export-section { background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.export-section h3 { margin-bottom: 1rem; color: #1e293b; }
.export-buttons { display: flex; gap: 1rem; }
.btn-export { display: flex; align-items: center; gap: 8px; padding: 10px 20px; border: 1px solid #e2e8f0; background: white; border-radius: 8px; cursor: pointer; transition: all 0.3s; }
.btn-export:hover { background: #f8fafc; border-color: #667eea; }

@media (max-width: 768px) {
    .page-header { flex-direction: column; gap: 1rem; align-items: stretch; }
    .date-range { justify-content: center; }
    .metrics-grid { grid-template-columns: repeat(2, 1fr); }
    .charts-grid, .tables-grid { grid-template-columns: 1fr; }
    .export-buttons { flex-direction: column; }
}
</style>

<script>
function exportReport(format) {
    alert('Exporting report as ' + format.toUpperCase());
}

document.addEventListener('DOMContentLoaded', function() {
    // Chart placeholders
    const salesChart = document.getElementById('salesChart');
    const categoryChart = document.getElementById('categoryChart');
    
    if (salesChart) {
        salesChart.innerHTML = '<div style="text-align: center; color: #64748b;">Sales Trend Chart<br><small>Integrate with Chart.js</small></div>';
    }
    
    if (categoryChart) {
        categoryChart.innerHTML = '<div style="text-align: center; color: #64748b;">Category Distribution<br><small>Pie/Donut Chart</small></div>';
    }
});
</script>
</body>
</html>