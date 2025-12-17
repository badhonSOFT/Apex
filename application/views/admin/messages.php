<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Messages - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>Support Messages</h1>
                <div class="header-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?= count($messages ?? []) ?></span>
                        <span class="stat-label">Total Messages</span>
                    </div>
                </div>
            </header>

            <div class="filters-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search messages..." id="searchInput">
                </div>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>New</option>
                    <option>In Progress</option>
                    <option>Resolved</option>
                    <option>Closed</option>
                </select>
            </div>

            <div class="messages-table-container">
                <table class="messages-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($messages)): ?>
                            <?php foreach ($messages as $msg): ?>
                                <tr>
                                    <td>#<?= $msg['id'] ?></td>
                                    <td>
                                        <div class="customer-info">
                                            <div>
                                                <div class="customer-name"><?= htmlspecialchars($msg['name']) ?></div>
                                                <div class="customer-email"><?= htmlspecialchars($msg['email']) ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= htmlspecialchars($msg['subject']) ?></td>
                                    <td class="message-preview"><?= substr(htmlspecialchars($msg['message']), 0, 50) ?>...</td>
                                    <td><?= date('M d, Y', strtotime($msg['created_at'])) ?></td>
                                    <td><span class="status <?= $msg['status'] ?>"><?= ucfirst($msg['status']) ?></span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-view" onclick="viewMessage(<?= $msg['id'] ?>, '<?= htmlspecialchars($msg['name']) ?>', '<?= htmlspecialchars($msg['email']) ?>', '<?= htmlspecialchars($msg['phone']) ?>', '<?= htmlspecialchars($msg['order_number']) ?>', '<?= htmlspecialchars($msg['subject']) ?>', '<?= htmlspecialchars($msg['message']) ?>', '<?= $msg['status'] ?>', '<?= $msg['created_at'] ?>')"><i class="fas fa-eye"></i></button>
                                            <button class="btn-reply" onclick="replyMessage(<?= $msg['id'] ?>)"><i class="fas fa-reply"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No messages found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Message Details Modal -->
    <div id="messageModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Message Details</h2>
                <button class="close-btn" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="message-details">
                    <div class="detail-row">
                        <div class="detail-group">
                            <label>Customer Name:</label>
                            <span id="modalName"></span>
                        </div>
                        <div class="detail-group">
                            <label>Email:</label>
                            <span id="modalEmail"></span>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-group">
                            <label>Phone:</label>
                            <span id="modalPhone"></span>
                        </div>
                        <div class="detail-group">
                            <label>Order Number:</label>
                            <span id="modalOrder"></span>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-group">
                            <label>Subject:</label>
                            <span id="modalSubject"></span>
                        </div>
                        <div class="detail-group">
                            <label>Date:</label>
                            <span id="modalDate"></span>
                        </div>
                    </div>
                    <div class="detail-full">
                        <label>Message:</label>
                        <div id="modalMessage" class="message-content"></div>
                    </div>
                    <div class="detail-full">
                        <label>Status:</label>
                        <select id="modalStatus" class="status-select">
                            <option value="new">New</option>
                            <option value="in_progress">In Progress</option>
                            <option value="resolved">Resolved</option>
                            <option value="closed">Closed</option>
                        </select>
                        <button class="btn-update" onclick="updateStatus()">Update Status</button>
                    </div>
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
.filter-select { padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; background: white; }

.messages-table-container { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.messages-table { width: 100%; border-collapse: collapse; }
.messages-table th, .messages-table td { padding: 16px; text-align: left; border-bottom: 1px solid #e2e8f0; }
.messages-table th { background: #f8fafc; font-weight: 600; color: #374151; }

.customer-info { display: flex; align-items: center; gap: 12px; }
.customer-name { font-weight: 500; }
.customer-email { font-size: 0.85rem; color: #64748b; }
.message-preview { max-width: 200px; }

.status { padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; }
.status.new { background: #fef3c7; color: #d97706; }
.status.in_progress { background: #dbeafe; color: #2563eb; }
.status.resolved { background: #dcfce7; color: #16a34a; }
.status.closed { background: #f3f4f6; color: #6b7280; }

.action-buttons { display: flex; gap: 8px; }
.btn-view, .btn-reply { padding: 8px; border: none; border-radius: 6px; cursor: pointer; }
.btn-view { background: #f1f5f9; color: #64748b; }
.btn-reply { background: #dcfce7; color: #16a34a; }

.text-center { text-align: center; }

.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; }
.modal-content { background: white; margin: 5% auto; padding: 0; border-radius: 12px; max-width: 700px; max-height: 90vh; overflow-y: auto; }
.modal-header { display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid #e2e8f0; }
.modal-header h2 { color: #1e293b; }
.close-btn { background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #64748b; }
.modal-body { padding: 1.5rem; }

.message-details { display: flex; flex-direction: column; gap: 1.5rem; }
.detail-row { display: flex; gap: 2rem; }
.detail-group { flex: 1; }
.detail-group label { display: block; font-weight: 600; color: #374151; margin-bottom: 0.5rem; }
.detail-group span { color: #64748b; }
.detail-full { width: 100%; }
.detail-full label { display: block; font-weight: 600; color: #374151; margin-bottom: 0.5rem; }
.message-content { background: #f8fafc; padding: 1rem; border-radius: 8px; border: 1px solid #e2e8f0; line-height: 1.6; }
.status-select { padding: 8px 12px; border: 1px solid #e2e8f0; border-radius: 6px; margin-right: 1rem; }
.btn-update { background: #667eea; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; }

@media (max-width: 768px) {
    .filters-bar { flex-direction: column; align-items: stretch; }
    .messages-table-container { overflow-x: auto; }
    .detail-row { flex-direction: column; gap: 1rem; }
    .modal-content { margin: 2% auto; max-width: 95%; }
}
</style>

<script>
let currentMessageId = null;

function viewMessage(id, name, email, phone, orderNumber, subject, message, status, createdAt) {
    currentMessageId = id;
    
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalEmail').textContent = email;
    document.getElementById('modalPhone').textContent = phone || 'N/A';
    document.getElementById('modalOrder').textContent = orderNumber || 'N/A';
    document.getElementById('modalSubject').textContent = subject;
    document.getElementById('modalMessage').textContent = message;
    document.getElementById('modalStatus').value = status;
    
    const date = new Date(createdAt);
    document.getElementById('modalDate').textContent = date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
    
    document.getElementById('messageModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('messageModal').style.display = 'none';
}

function updateStatus() {
    const newStatus = document.getElementById('modalStatus').value;
    alert('Update status to: ' + newStatus + ' for message ID: ' + currentMessageId);
    // Add AJAX call here to update status in database
}

function replyMessage(id) {
    alert('Reply to message ' + id);
}

document.getElementById('searchInput').addEventListener('input', function() {
    console.log('Search messages:', this.value);
});

// Close modal when clicking outside
document.addEventListener('click', function(e) {
    if (e.target.id === 'messageModal') {
        closeModal();
    }
});
</script>
</body>
</html>