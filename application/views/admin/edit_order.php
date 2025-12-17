<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>Edit Order - <?= htmlspecialchars($order['order_number'] ?? '') ?></h1>
                <a href="/websites/GAC/Apex/admin/orders" class="btn-back">
                    <i class="fas fa-arrow-left"></i> Back to Orders
                </a>
            </header>

            <?php if (isset($order)): ?>
            <div class="edit-form-container">
                <form id="editOrderForm" onsubmit="updateOrder(event)">
                    <input type="hidden" name="orderId" value="<?= $order['id'] ?>">
                    
                    <div class="form-section">
                        <h3>Customer Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstName" value="<?= htmlspecialchars($order['first_name']) ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="<?= htmlspecialchars($order['last_name']) ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= htmlspecialchars($order['email']) ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?= htmlspecialchars($order['phone']) ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" rows="3" required><?= htmlspecialchars($order['address']) ?></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Order Details</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Payment Method</label>
                                <select name="paymentMethod" required>
                                    <option value="card" <?= $order['payment_method'] == 'card' ? 'selected' : '' ?>>Credit/Debit Card</option>
                                    <option value="bkash" <?= $order['payment_method'] == 'bkash' ? 'selected' : '' ?>>bKash</option>
                                    <option value="cod" <?= $order['payment_method'] == 'cod' ? 'selected' : '' ?>>Cash on Delivery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Order Status</label>
                                <select name="status" required>
                                    <option value="pending" <?= $order['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="processing" <?= $order['status'] == 'processing' ? 'selected' : '' ?>>Processing</option>
                                    <option value="shipped" <?= $order['status'] == 'shipped' ? 'selected' : '' ?>>Shipped</option>
                                    <option value="delivered" <?= $order['status'] == 'delivered' ? 'selected' : '' ?>>Delivered</option>
                                    <option value="cancelled" <?= $order['status'] == 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Subtotal</label>
                                <input type="number" name="subtotal" step="0.01" value="<?= $order['subtotal'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Shipping</label>
                                <input type="number" name="shipping" step="0.01" value="<?= $order['shipping'] ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-cancel" onclick="window.history.back()">Cancel</button>
                        <button type="submit" class="btn-save">Save Changes</button>
                    </div>
                </form>
            </div>
            <?php else: ?>
            <div class="error-message">
                <h3>Order not found</h3>
                <p>The requested order could not be found.</p>
                <a href="/websites/GAC/Apex/admin/orders" class="btn-back">Back to Orders</a>
            </div>
            <?php endif; ?>
        </main>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }

.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.page-header h1 { font-size: 2rem; color: #1e293b; }
.btn-back { display: flex; align-items: center; gap: 8px; background: #f1f5f9; color: #64748b; padding: 10px 20px; border-radius: 8px; text-decoration: none; transition: all 0.3s; }
.btn-back:hover { background: #e2e8f0; color: #1e293b; }

.edit-form-container { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
.form-section { margin-bottom: 2rem; }
.form-section h3 { font-size: 1.25rem; font-weight: 600; color: #1e293b; margin-bottom: 1.5rem; padding-bottom: 0.5rem; border-bottom: 2px solid #f1f5f9; }

.form-row { display: flex; gap: 1rem; margin-bottom: 1rem; }
.form-group { flex: 1; }
.form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #374151; }
.form-group input, .form-group select, .form-group textarea { width: 100%; padding: 12px; border: 2px solid #e5e7eb; border-radius: 8px; transition: all 0.3s; }
.form-group input:focus, .form-group select:focus, .form-group textarea:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59,130,246,0.1); }

.form-actions { display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e2e8f0; }
.btn-cancel { background: #f1f5f9; color: #64748b; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; }
.btn-save { background: #3b82f6; color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; }
.btn-cancel:hover { background: #e2e8f0; }
.btn-save:hover { background: #2563eb; }

.error-message { text-align: center; padding: 3rem; }
.error-message h3 { color: #dc2626; margin-bottom: 1rem; }
.error-message p { color: #64748b; margin-bottom: 2rem; }

@media (max-width: 768px) {
    .form-row { flex-direction: column; }
    .form-actions { flex-direction: column; }
}
</style>

<script>
function updateOrder(event) {
    event.preventDefault();
    
    const form = document.getElementById('editOrderForm');
    const formData = new FormData(form);
    
    const submitBtn = document.querySelector('.btn-save');
    submitBtn.textContent = 'Saving...';
    submitBtn.disabled = true;
    
    fetch('/websites/GAC/Apex/admin/updateOrder', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Success!',
                text: 'Order updated successfully!',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3b82f6'
            }).then(() => {
                window.location.href = '/websites/GAC/Apex/admin/orders';
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: data.message,
                icon: 'error',
                confirmButtonColor: '#ef4444'
            });
            submitBtn.textContent = 'Save Changes';
            submitBtn.disabled = false;
        }
    })
    .catch(error => {
        Swal.fire({
            title: 'Error!',
            text: 'Error updating order',
            icon: 'error',
            confirmButtonColor: '#ef4444'
        });
        submitBtn.textContent = 'Save Changes';
        submitBtn.disabled = false;
    });
}
</script>
</body>
</html>