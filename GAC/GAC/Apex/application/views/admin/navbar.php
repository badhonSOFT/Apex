<nav class="admin-navbar">
    <div class="navbar-left">
        <div class="logo">
            <i class="fas fa-mountain"></i>
            <span>APEX Admin</span>
        </div>
        
        <nav class="main-nav">
            <a href="/websites/GAC/Apex/admin" class="<?= ($active_page ?? 'dashboard') == 'dashboard' ? 'active' : '' ?>"><i class="fas fa-chart-line"></i> Dashboard</a>
            <a href="/websites/GAC/Apex/admin/products" class="<?= ($active_page ?? '') == 'products' ? 'active' : '' ?>"><i class="fas fa-box"></i> Products</a>
            <a href="/websites/GAC/Apex/admin/orders" class="<?= ($active_page ?? '') == 'orders' ? 'active' : '' ?>"><i class="fas fa-shopping-cart"></i> Orders</a>
            <a href="/websites/GAC/Apex/admin/users" class="<?= ($active_page ?? '') == 'users' ? 'active' : '' ?>"><i class="fas fa-users"></i> Users</a>
            <a href="/websites/GAC/Apex/admin/messages" class="<?= ($active_page ?? '') == 'messages' ? 'active' : '' ?>"><i class="fas fa-envelope"></i> Messages</a>
            <a href="/websites/GAC/Apex/admin/reports" class="<?= ($active_page ?? '') == 'reports' ? 'active' : '' ?>"><i class="fas fa-chart-bar"></i> Reports</a>
        </nav>
    </div>
    
    <div class="navbar-right">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search...">
        </div>
        
        <div class="navbar-actions">
            <button class="action-btn" title="Notifications">
                <i class="fas fa-bell"></i>
                <span class="badge">3</span>
            </button>
            
            <button class="action-btn" title="Messages">
                <i class="fas fa-envelope"></i>
                <span class="badge">5</span>
            </button>
            
            <div class="user-dropdown">
                <button class="user-btn" onclick="toggleUserMenu()">
                    <img src="https://via.placeholder.com/32" alt="Admin">
                    <span>Admin User</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu" id="userMenu">
                    <a href="#"><i class="fas fa-user"></i> Profile</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="/websites/GAC/Apex/admin/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
.admin-navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 70px;
    background: white;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 2rem;
    z-index: 50;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.navbar-left {
    display: flex;
    align-items: center;
    gap: 3rem;
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.2rem;
    font-weight: 700;
    color: #1e293b;
}

.logo i {
    font-size: 1.5rem;
    color: #667eea;
}

.main-nav {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.main-nav a {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    color: #64748b;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.main-nav a:hover {
    background: #f1f5f9;
    color: #1e293b;
}

.main-nav a.active {
    background: #667eea;
    color: white;
}

.main-nav a i {
    font-size: 0.9rem;
}

.sidebar-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 1.2rem;
    color: #64748b;
    cursor: pointer;
    padding: 8px;
    border-radius: 6px;
}

.sidebar-toggle:hover {
    background: #f1f5f9;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #64748b;
    font-size: 0.9rem;
}

.breadcrumb-item.active {
    color: #1e293b;
    font-weight: 500;
}

.breadcrumb i {
    font-size: 0.7rem;
}

.navbar-right {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-box i {
    position: absolute;
    left: 12px;
    color: #9ca3af;
    font-size: 0.9rem;
}

.search-box input {
    width: 300px;
    padding: 8px 12px 8px 36px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    background: #f8fafc;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.search-box input:focus {
    outline: none;
    border-color: #667eea;
    background: white;
    box-shadow: 0 0 0 3px rgba(102,126,234,0.1);
}

.navbar-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.action-btn {
    position: relative;
    background: none;
    border: none;
    padding: 10px;
    border-radius: 8px;
    color: #64748b;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 1.1rem;
}

.action-btn:hover {
    background: #f1f5f9;
    color: #1e293b;
}

.badge {
    position: absolute;
    top: 6px;
    right: 6px;
    background: #ef4444;
    color: white;
    font-size: 0.7rem;
    padding: 2px 6px;
    border-radius: 10px;
    min-width: 18px;
    text-align: center;
}

.user-dropdown {
    position: relative;
}

.user-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    background: none;
    border: none;
    padding: 6px 12px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
}

.user-btn:hover {
    background: #f1f5f9;
}

.user-btn img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
}

.user-btn span {
    font-weight: 500;
    color: #1e293b;
}

.user-btn i {
    color: #9ca3af;
    font-size: 0.8rem;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    min-width: 180px;
    padding: 8px 0;
    display: none;
    z-index: 100;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 16px;
    color: #374151;
    text-decoration: none;
    transition: all 0.3s;
}

.dropdown-menu a:hover {
    background: #f8fafc;
}

.dropdown-divider {
    height: 1px;
    background: #e2e8f0;
    margin: 8px 0;
}

@media (max-width: 768px) {
    .admin-navbar {
        padding: 0 1rem;
    }
    
    .navbar-left {
        gap: 1rem;
    }
    
    .main-nav {
        display: none;
    }
    
    .search-box {
        display: none;
    }
}

@media (max-width: 480px) {
    .navbar-actions {
        gap: 0.5rem;
    }
    
    .user-btn span {
        display: none;
    }
}
</style>

<script>
function toggleUserMenu() {
    const menu = document.getElementById('userMenu');
    menu.classList.toggle('show');
}

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const navbar = document.querySelector('.admin-navbar');
    const mainContent = document.querySelector('.main-content');
    
    sidebar.classList.toggle('collapsed');
    navbar.classList.toggle('sidebar-collapsed');
    mainContent.classList.toggle('sidebar-collapsed');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.user-dropdown')) {
        document.getElementById('userMenu').classList.remove('show');
    }
});
</script>