<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>User Management</h1>
                <button class="btn-primary" onclick="openModal('addUserModal')">
                    <i class="fas fa-user-plus"></i> Add User
                </button>
            </header>

            <div class="filters-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search users..." id="searchInput">
                </div>
                <select class="filter-select">
                    <option>All Roles</option>
                    <option>Admin</option>
                    <option>Customer</option>
                </select>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>

            <div class="users-table-container">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined</th>
                            <th>Orders</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://via.placeholder.com/40" alt="User">
                                    <div>
                                        <div class="user-name">John Doe</div>
                                        <div class="user-id">#USR-001</div>
                                    </div>
                                </div>
                            </td>
                            <td>john@example.com</td>
                            <td><span class="role customer">Customer</span></td>
                            <td>2024-01-15</td>
                            <td>12</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-view" onclick="viewUser('USR-001')"><i class="fas fa-eye"></i></button>
                                    <button class="btn-edit" onclick="editUser('USR-001')"><i class="fas fa-edit"></i></button>
                                    <button class="btn-delete" onclick="deleteUser('USR-001')"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://via.placeholder.com/40" alt="User">
                                    <div>
                                        <div class="user-name">Jane Smith</div>
                                        <div class="user-id">#USR-002</div>
                                    </div>
                                </div>
                            </td>
                            <td>jane@example.com</td>
                            <td><span class="role admin">Admin</span></td>
                            <td>2024-01-10</td>
                            <td>0</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-view" onclick="viewUser('USR-002')"><i class="fas fa-eye"></i></button>
                                    <button class="btn-edit" onclick="editUser('USR-002')"><i class="fas fa-edit"></i></button>
                                    <button class="btn-delete" onclick="deleteUser('USR-002')"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://via.placeholder.com/40" alt="User">
                                    <div>
                                        <div class="user-name">Mike Johnson</div>
                                        <div class="user-id">#USR-003</div>
                                    </div>
                                </div>
                            </td>
                            <td>mike@example.com</td>
                            <td><span class="role customer">Customer</span></td>
                            <td>2024-01-08</td>
                            <td>5</td>
                            <td><span class="status inactive">Inactive</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-view" onclick="viewUser('USR-003')"><i class="fas fa-eye"></i></button>
                                    <button class="btn-edit" onclick="editUser('USR-003')"><i class="fas fa-edit"></i></button>
                                    <button class="btn-delete" onclick="deleteUser('USR-003')"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Add User Modal -->
    <div id="addUserModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New User</h2>
                <button class="close-btn" onclick="closeModal('addUserModal')">&times;</button>
            </div>
            <form class="user-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" required>
                            <option value="customer">Customer</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirm" required>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn-secondary" onclick="closeModal('addUserModal')">Cancel</button>
                    <button type="submit" class="btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }

.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.page-header h1 { font-size: 2rem; color: #1e293b; }
.btn-primary { background: #667eea; color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; font-weight: 500; }

.filters-bar { display: flex; gap: 1rem; margin-bottom: 2rem; align-items: center; }
.search-box { position: relative; flex: 1; max-width: 400px; }
.search-box i { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #64748b; }
.search-box input { width: 100%; padding: 12px 12px 12px 40px; border: 1px solid #e2e8f0; border-radius: 8px; }
.filter-select { padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; background: white; }

.users-table-container { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.users-table { width: 100%; border-collapse: collapse; }
.users-table th, .users-table td { padding: 16px; text-align: left; border-bottom: 1px solid #e2e8f0; }
.users-table th { background: #f8fafc; font-weight: 600; color: #374151; }

.user-info { display: flex; align-items: center; gap: 12px; }
.user-info img { width: 40px; height: 40px; border-radius: 50%; }
.user-name { font-weight: 500; }
.user-id { font-size: 0.85rem; color: #64748b; }

.role { padding: 4px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; }
.role.admin { background: #f3e8ff; color: #9333ea; }
.role.customer { background: #dbeafe; color: #2563eb; }

.status { padding: 4px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 500; }
.status.active { background: #dcfce7; color: #16a34a; }
.status.inactive { background: #fee2e2; color: #dc2626; }

.action-buttons { display: flex; gap: 8px; }
.btn-view, .btn-edit, .btn-delete { padding: 8px; border: none; border-radius: 6px; cursor: pointer; }
.btn-view { background: #f1f5f9; color: #64748b; }
.btn-edit { background: #dbeafe; color: #2563eb; }
.btn-delete { background: #fee2e2; color: #dc2626; }

.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; }
.modal-content { background: white; margin: 5% auto; padding: 0; border-radius: 12px; max-width: 600px; max-height: 90vh; overflow-y: auto; }
.modal-header { display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid #e2e8f0; }
.close-btn { background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #64748b; }

.user-form { padding: 1.5rem; }
.form-row { display: flex; gap: 1rem; margin-bottom: 1rem; }
.form-group { flex: 1; }
.form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #374151; }
.form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; }
.form-actions { display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem; }
.btn-secondary { background: #f1f5f9; color: #64748b; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; }

@media (max-width: 768px) {
    .filters-bar { flex-direction: column; align-items: stretch; }
    .users-table-container { overflow-x: auto; }
    .form-row { flex-direction: column; }
}
</style>

<script>
function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function viewUser(userId) {
    alert('View user ' + userId);
}

function editUser(userId) {
    alert('Edit user ' + userId);
}

function deleteUser(userId) {
    if (confirm('Are you sure you want to delete this user?')) {
        alert('Delete user ' + userId);
    }
}

document.getElementById('searchInput').addEventListener('input', function() {
    console.log('Search users:', this.value);
});
</script>
</body>
</html>