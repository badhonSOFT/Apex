<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>Order Management</h1>
                <div class="header-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?= count($orders ?? []) ?></span>
                        <span class="stat-label">Total Orders</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?= count(array_filter($orders ?? [], function($o) { return $o['status'] == 'pending'; })) ?></span>
                        <span class="stat-label">Pending</span>
                    </div>
                </div>
            </header>

            <div class="filters-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search orders..." id="searchInput">
                </div>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                </select>
                <input type="date" class="filter-date">
            </div>

            <div class="orders-table-container">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($orders)): ?>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td><?= htmlspecialchars($order['order_number']) ?></td>
                                    <td>
                                        <div class="customer-info">
                                            <img src="https://via.placeholder.com/32" alt="Customer">
                                            <div>
                                                <div class="customer-name"><?= htmlspecialchars($order['first_name'] . ' ' . $order['last_name']) ?></div>
                                                <div class="customer-email"><?= htmlspecialchars($order['email']) ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= date('M d, Y', strtotime($order['created_at'])) ?></td>
                                    <td><?= $order['item_count'] ?> items</td>
                                    <td>৳<?= number_format($order['total'], 2) ?></td>
                                    <td><span class="status <?= $order['status'] ?>"><?= ucfirst($order['status']) ?></span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-view" onclick="viewOrder('<?= $order['order_number'] ?>', '<?= htmlspecialchars($order['first_name'] . ' ' . $order['last_name']) ?>', '<?= htmlspecialchars($order['email']) ?>', '<?= htmlspecialchars($order['phone']) ?>', '<?= htmlspecialchars($order['address']) ?>', '<?= htmlspecialchars($order['payment_method']) ?>', '<?= $order['total'] ?>', '<?= $order['status'] ?>', '<?= $order['created_at'] ?>')"><i class="fas fa-eye"></i></button>
                                            <button class="btn-edit" onclick="editOrder('<?= $order['order_number'] ?>')"><i class="fas fa-edit"></i></button>
                                            <button class="btn-delete" onclick="deleteOrder(<?= $order['id'] ?>, '<?= $order['order_number'] ?>')"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No orders found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Order Details Modal -->
    <div id="orderModal" class="modal">
        <div class="modal-content large">
            <div class="modal-header">
                <h2>Order Details - #ORD-001</h2>
                <button class="close-btn" onclick="closeModal('orderModal')">&times;</button>
            </div>
            <div class="order-details">
                <div class="order-info-grid">
                    <div class="order-section">
                        <h3>Customer Information</h3>
                        <div class="info-item">
                            <label>Name:</label>
                            <span id="modalCustomerName">John Doe</span>
                        </div>
                        <div class="info-item">
                            <label>Email:</label>
                            <span id="modalCustomerEmail">john@example.com</span>
                        </div>
                        <div class="info-item">
                            <label>Phone:</label>
                            <span id="modalCustomerPhone">+1 234 567 8900</span>
                        </div>
                    </div>
                    <div class="order-section">
                        <h3>Shipping Address</h3>
                        <div class="address" id="modalAddress">
                            123 Main Street<br>
                            New York, NY 10001<br>
                            United States
                        </div>
                    </div>
                    <div class="order-section">
                        <h3>Payment Method</h3>
                        <div id="modalPayment">Credit Card</div>
                    </div>
                    <div class="order-section">
                        <h3>Order Status</h3>
                        <select class="status-select">
                            <option>Pending</option>
                            <option>Processing</option>
                            <option>Shipped</option>
                            <option selected>Delivered</option>
                            <option>Cancelled</option>
                        </select>
                        <button class="btn-update">Update Status</button>
                    </div>
                </div>
                <div class="order-items">
                    <h3>Order Items</h3>
                    <table class="items-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Premium T-Shirt</td>
                                <td>2</td>
                                <td>$29.99</td>
                                <td>$59.98</td>
                            </tr>
                            <tr>
                                <td>Designer Jeans</td>
                                <td>1</td>
                                <td>$65.02</td>
                                <td>$65.02</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><strong>Total:</strong></td>
                                <td><strong>$125.00</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }

.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.page-header h1 { font-size: 2rem; color: #1e293b; }
.header-stats { display: flex; gap: 2rem; }
.stat-item { text-align: center; }
.stat-number { display: block; font-size: 1.5rem; font-weight: 700; color: #1e293b; }
.stat-label { font-size: 0.9rem; color: #64748b; }

.filters-bar { display: flex; gap: 1rem; margin-bottom: 2rem; align-items: center; }
.search-box { position: relative; flex: 1; max-width: 400px; }
.search-box i { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #64748b; }
.search-box input { width: 100%; padding: 12px 12px 12px 40px; border: 1px solid #e2e8f0; border-radius: 8px; }
.filter-select, .filter-date { padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; background: white; }

.orders-table-container { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.orders-table { width: 100%; border-collapse: collapse; }
.orders-table th, .orders-table td { padding: 16px; text-align: left; border-bottom: 1px solid #e2e8f0; }
.orders-table th { background: #f8fafc; font-weight: 600; color: #374151; }

.customer-info { display: flex; align-items: center; gap: 12px; }
.customer-info img { width: 32px; height: 32px; border-radius: 50%; }
.customer-name { font-weight: 500; }
.customer-email { font-size: 0.85rem; color: #64748b; }

.status { padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; }
.status.pending { background: #fef3c7; color: #d97706; }
.status.processing { background: #dbeafe; color: #2563eb; }
.status.delivered { background: #dcfce7; color: #16a34a; }
.status.cancelled { background: #fee2e2; color: #dc2626; }

.action-buttons { display: flex; gap: 8px; }
.btn-view, .btn-edit, .btn-delete { padding: 8px; border: none; border-radius: 6px; cursor: pointer; }
.btn-view { background: #f1f5f9; color: #64748b; }
.btn-edit { background: #dbeafe; color: #2563eb; }
.btn-delete { background: #fee2e2; color: #dc2626; }

.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; }
.modal-content { background: white; margin: 2% auto; padding: 0; border-radius: 12px; max-width: 800px; max-height: 90vh; overflow-y: auto; }
.modal-content.large { max-width: 1000px; }
.modal-header { display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid #e2e8f0; }
.close-btn { background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #64748b; }

.order-details { padding: 1.5rem; }
.order-info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem; }
.order-section h3 { margin-bottom: 1rem; color: #1e293b; }
.info-item { display: flex; margin-bottom: 0.5rem; }
.info-item label { font-weight: 500; width: 80px; color: #64748b; }
.address { line-height: 1.6; color: #374151; }
.status-select { padding: 8px 12px; border: 1px solid #e2e8f0; border-radius: 6px; margin-bottom: 1rem; }
.btn-update { background: #667eea; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; }

.order-items h3 { margin-bottom: 1rem; color: #1e293b; }
.items-table { width: 100%; border-collapse: collapse; }
.items-table th, .items-table td { padding: 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
.items-table th { background: #f8fafc; font-weight: 600; }
.items-table tfoot td { font-weight: 600; background: #f8fafc; }

@media (max-width: 768px) {
    .filters-bar { flex-direction: column; align-items: stretch; }
    .orders-table-container { overflow-x: auto; }
    .order-info-grid { grid-template-columns: 1fr; }
}
</style>

<script>
function viewOrder(orderNumber, customerName, email, phone, address, paymentMethod, total, status, createdAt) {
    document.querySelector('.modal-header h2').textContent = 'Order Details - ' + orderNumber;
    document.getElementById('modalCustomerName').textContent = customerName;
    document.getElementById('modalCustomerEmail').textContent = email;
    document.getElementById('modalCustomerPhone').textContent = phone;
    document.getElementById('modalAddress').textContent = address;
    document.getElementById('modalPayment').textContent = paymentMethod.toUpperCase();
    
    document.getElementById('orderModal').style.display = 'block';
}

function editOrder(orderNumber) {
    window.location.href = '/websites/GAC/Apex/admin/editOrder?orderNumber=' + orderNumber;
}

function deleteOrder(orderId, orderNumber) {
    const rowElement = event.target.closest('tr'); // Store reference before SweetAlert
    
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to delete order ' + orderNumber + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('/websites/GAC/Apex/admin/deleteOrder', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'orderId=' + orderId
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the row immediately
                    rowElement.remove();
                    // Update order count
                    const totalOrders = document.querySelector('.stat-number');
                    totalOrders.textContent = parseInt(totalOrders.textContent) - 1;
                    
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'Order has been deleted successfully.',
                        icon: 'success',
                        confirmButtonColor: '#3b82f6'
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Error deleting order',
                        icon: 'error',
                        confirmButtonColor: '#ef4444'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Error deleting order',
                    icon: 'error',
                    confirmButtonColor: '#ef4444'
                });
            });
        }
    });
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

document.getElementById('searchInput').addEventListener('input', function() {
    console.log('Search orders:', this.value);
});
</script>
</body>
</html>