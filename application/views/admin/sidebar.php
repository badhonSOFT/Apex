<nav class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <i class="fas fa-mountain"></i>
            <span>APEX Admin</span>
        </div>
    </div>
    <ul class="nav-menu">
        <li><a href="/websites/GAC/Apex/admin" class="<?= $active_page == 'dashboard' ? 'active' : '' ?>"><i class="fas fa-chart-line"></i> Dashboard</a></li>
        <li><a href="/websites/GAC/Apex/admin/products" class="<?= $active_page == 'products' ? 'active' : '' ?>"><i class="fas fa-box"></i> Products</a></li>
        <li><a href="/websites/GAC/Apex/admin/orders" class="<?= $active_page == 'orders' ? 'active' : '' ?>"><i class="fas fa-shopping-cart"></i> Orders</a></li>
        <li><a href="/websites/GAC/Apex/admin/users" class="<?= $active_page == 'users' ? 'active' : '' ?>"><i class="fas fa-users"></i> Users</a></li>
        <li><a href="/websites/GAC/Apex/admin/reports" class="<?= $active_page == 'reports' ? 'active' : '' ?>"><i class="fas fa-chart-bar"></i> Reports</a></li>
        <li><a href="/websites/GAC/Apex/admin/settings" class="<?= $active_page == 'settings' ? 'active' : '' ?>"><i class="fas fa-cog"></i> Settings</a></li>
    </ul>
    <div class="sidebar-footer">
        <a href="/websites/GAC/Apex/auth/logout" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</nav>

<style>
.sidebar { width: 260px; background: #1e293b; color: white; display: flex; flex-direction: column; position: fixed; height: 100vh; z-index: 100; }
.sidebar-header { padding: 1.5rem; border-bottom: 1px solid #334155; }
.logo { display: flex; align-items: center; gap: 12px; font-size: 1.2rem; font-weight: 700; }
.logo i { font-size: 1.5rem; color: #667eea; }

.nav-menu { flex: 1; padding: 1rem 0; list-style: none; }
.nav-menu li { margin-bottom: 4px; }
.nav-menu a { display: flex; align-items: center; gap: 12px; padding: 12px 1.5rem; color: #cbd5e1; text-decoration: none; transition: all 0.3s; border-radius: 0 25px 25px 0; margin-right: 1rem; }
.nav-menu a:hover { background: #334155; color: white; }
.nav-menu a.active { background: #667eea; color: white; }

.sidebar-footer { padding: 1rem; border-top: 1px solid #334155; }
.logout-btn { display: flex; align-items: center; gap: 8px; color: #ef4444; text-decoration: none; padding: 8px 1rem; border-radius: 6px; transition: all 0.3s; }
.logout-btn:hover { background: rgba(239, 68, 68, 0.1); }

@media (max-width: 768px) {
    .sidebar { position: relative; width: 100%; height: auto; flex-direction: row; }
    .sidebar-header { padding: 1rem; }
    .nav-menu { display: flex; overflow-x: auto; padding: 0 1rem; }
    .nav-menu li { flex-shrink: 0; margin-bottom: 0; margin-right: 8px; }
    .nav-menu a { border-radius: 8px; margin-right: 0; white-space: nowrap; }
    .sidebar-footer { padding: 1rem; }
}
</style>