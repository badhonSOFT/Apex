<!-- Top Utility Bar -->
<div class="utility-bar">
    <div class="container">
        <div class="utility-links">
            <a href="/websites/GAC/Apex/find-store">Find a Store</a>
            <a href="/websites/GAC/Apex/support">Support</a>
            <a href="/websites/GAC/Apex/track-order">Track Your Order</a>
            <a href="/websites/GAC/Apex/corporate">Corporate</a>
            <a href="/websites/GAC/Apex/sign-in">Sign In</a>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg main-nav sticky-top">
    <div class="container">
        <a class="navbar-brand nav-brand" href="/websites/GAC/Apex/">
            <img src="/websites/GAC/Apex/assets/images/logo.png" alt="Apex" style="height: 45px; width: auto;">
        </a>
        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" onclick="if(event.target === this) this.classList.remove('show')">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link nav-menu" href="/websites/GAC/Apex/aw-collection">AW Collection</a></li>
                <li class="nav-item"><a class="nav-link nav-menu" href="/websites/GAC/Apex/women">Women</a></li>
                <li class="nav-item"><a class="nav-link nav-menu" href="/websites/GAC/Apex/men">Men</a></li>
                <li class="nav-item"><a class="nav-link nav-menu" href="/websites/GAC/Apex/kids">Kids</a></li>
                <li class="nav-item"><a class="nav-link nav-menu" href="/websites/GAC/Apex/gift-voucher">Gift Voucher</a></li>
                <li class="nav-item">
                    <button class="cart-btn" onclick="toggleCart()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="m1 1 4 4 2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="cart-count" id="cartCount">0</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Cart Sidebar -->
<div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
        <h3>Shopping Cart</h3>
        <button class="close-cart" onclick="toggleCart()">&times;</button>
    </div>
    <div class="cart-content">
        <div id="cartItems" class="cart-items">
            <!-- Cart items will be added here -->
        </div>
        <div class="cart-empty" id="cartEmpty">
            <i class="fas fa-shopping-cart"></i>
            <p>Your cart is empty</p>
        </div>
    </div>
    <div class="cart-footer">
        <div class="cart-total">
            <strong>Total: ৳<span id="cartTotal">0</span></strong>
        </div>
        <button class="checkout-btn" onclick="checkout()">Checkout</button>
    </div>
</div>
<div id="cartOverlay" class="cart-overlay" onclick="toggleCart()"></div>

<style>
.cart-sidebar {
    position: fixed;
    top: 0;
    right: -400px;
    width: 400px;
    height: 100vh;
    background: white;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1);
    z-index: 9999;
    transition: right 0.3s ease;
    display: flex;
    flex-direction: column;
}
.cart-sidebar.open { right: 0; }
.cart-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}
.cart-overlay.open { opacity: 1; visibility: visible; }
.cart-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.close-cart {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}
.cart-content {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
}
.cart-empty {
    text-align: center;
    color: #666;
    margin-top: 50px;
}
.cart-empty i { font-size: 48px; margin-bottom: 15px; }
.quantity-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
}
.qty-btn {
    background: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    width: 25px;
    height: 25px;
    cursor: pointer;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.qty-btn:hover { background: #0056b3; }
.quantity { font-weight: bold; min-width: 20px; text-align: center; }
.cart-item {
    display: flex;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
}
.cart-item img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 15px;
}
.cart-item-info { flex: 1; }
.cart-item-name { font-weight: 500; margin-bottom: 5px; }
.cart-item-price { color: #007bff; font-weight: bold; }
.cart-item-remove {
    background: #dc3545;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 12px;
}
.cart-footer {
    padding: 20px;
    border-top: 1px solid #eee;
}
.cart-total {
    text-align: center;
    font-size: 18px;
    margin-bottom: 15px;
}
.checkout-btn {
    width: 100%;
    background: #28a745;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}
.checkout-btn:hover { background: #218838; }
@media (max-width: 480px) {
    .cart-sidebar { width: 100%; right: -100%; }
}
</style>

<script>
let cart = [];
let cartTotal = 0;

function toggleCart() {
    const sidebar = document.getElementById('cartSidebar');
    const overlay = document.getElementById('cartOverlay');
    
    sidebar.classList.toggle('open');
    overlay.classList.toggle('open');
}

function addToCart(id, name, price, image = '') {
    const existingItem = cart.find(item => item.id === id);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ id, name, price, quantity: 1, image });
    }
    
    updateCartDisplay();
    updateCartCount();
    
    // Show success message
    showCartMessage(`${name} added to cart!`);
}

function removeFromCart(id) {
    cart = cart.filter(item => item.id !== id);
    updateCartDisplay();
    updateCartCount();
}

function updateCartDisplay() {
    const cartItems = document.getElementById('cartItems');
    const cartEmpty = document.getElementById('cartEmpty');
    const cartTotalEl = document.getElementById('cartTotal');
    
    if (cart.length === 0) {
        cartItems.style.display = 'none';
        cartEmpty.style.display = 'block';
        cartTotal = 0;
    } else {
        cartItems.style.display = 'block';
        cartEmpty.style.display = 'none';
        
        cartItems.innerHTML = cart.map(item => `
            <div class="cart-item">
                <div class="cart-item-info">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-price">৳${item.price} each</div>
                    <div class="quantity-controls">
                        <button class="qty-btn" onclick="decreaseQuantity(${item.id})">-</button>
                        <span class="quantity">${item.quantity}</span>
                        <button class="qty-btn" onclick="increaseQuantity(${item.id})">+</button>
                        <span style="margin-left: 10px; color: #007bff; font-weight: bold;">৳${item.price * item.quantity}</span>
                    </div>
                </div>
                <button class="cart-item-remove" onclick="removeFromCart(${item.id})">×</button>
            </div>
        `).join('');
        
        cartTotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    }
    
    cartTotalEl.textContent = cartTotal;
}

function updateCartCount() {
    const cartCount = document.getElementById('cartCount');
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    cartCount.textContent = totalItems;
}

function showCartMessage(message) {
    // Simple alert for now - can be replaced with toast notification
    const toast = document.createElement('div');
    toast.style.cssText = 'position:fixed;top:20px;right:20px;background:#28a745;color:white;padding:15px 20px;border-radius:8px;z-index:10000;';
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(() => document.body.removeChild(toast), 3000);
}

function increaseQuantity(id) {
    const item = cart.find(item => item.id === id);
    if (item) {
        item.quantity += 1;
        updateCartDisplay();
        updateCartCount();
    }
}

function decreaseQuantity(id) {
    const item = cart.find(item => item.id === id);
    if (item && item.quantity > 1) {
        item.quantity -= 1;
        updateCartDisplay();
        updateCartCount();
    } else if (item && item.quantity === 1) {
        removeFromCart(id);
    }
}

function checkout() {
    if (cart.length === 0) {
        alert('Your cart is empty!');
        return;
    }
    // Save cart to localStorage for checkout page
    localStorage.setItem('cart', JSON.stringify(cart));
    window.location.href = '/websites/GAC/Apex/checkout';
}
</script>

<style>
    .utility-bar { background: #333; color: white; padding: 8px 0; font-size: 12px; }
    .utility-links { text-align: right; }
    .utility-links a { color: white; text-decoration: none; margin-left: 15px; }
    .main-nav { background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 0.5rem 0; }
    .nav-brand { font-size: 2rem; font-weight: bold; color: #007bff !important; text-decoration: none; }
    .nav-menu { color: #333 !important; text-decoration: none; font-weight: 500; margin-right: 15px; transition: color 0.3s; }
    .nav-menu:hover { color: #007bff !important; }
    .navbar-toggler { border: none; padding: 8px; background: none; min-height: 44px; min-width: 44px; display: flex; align-items: center; justify-content: center; }
    .navbar-toggler:focus { box-shadow: 0 0 0 2px rgba(0,123,255,0.25); outline: none; }
    
    .hamburger-menu { display: flex; flex-direction: column; width: 24px; height: 18px; justify-content: space-between; }
    .hamburger-menu span { display: block; height: 3px; width: 100%; background: #333; border-radius: 2px; transition: all 0.3s ease; }
    .navbar-toggler[aria-expanded="true"] .hamburger-menu span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
    .navbar-toggler[aria-expanded="true"] .hamburger-menu span:nth-child(2) { opacity: 0; transform: scale(0); }
    .navbar-toggler[aria-expanded="true"] .hamburger-menu span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }
    
    @media (max-width: 991px) {
        .utility-bar { padding: 6px 0; }
        .utility-links { text-align: center; }
        .utility-links a { margin: 0 8px; font-size: 11px; }
        .navbar { padding: 0.75rem 0; }
        .navbar .container { padding: 0 1rem; }
        .navbar-collapse:not(.show) { display: none !important; }
        .navbar-collapse.show { 
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0,0,0,0.5);
            z-index: 9999;
            display: flex !important;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        .navbar-collapse.show .navbar-nav {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            max-width: 90vw;
            width: 300px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .navbar-nav { width: 100%; }
        .nav-item { margin-bottom: 0.75rem; }
        .nav-menu { 
            display: block;
            padding: 16px 24px;
            margin: 0;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            border: 1px solid transparent;
        }
        .nav-menu:hover, .nav-menu:focus {
            background: #f8f9fa;
            color: #007bff !important;
            border-color: #e9ecef;
            transform: translateY(-1px);
        }
        .nav-menu:active {
            transform: translateY(0);
        }
    }
    
    @media (max-width: 576px) {
        .utility-bar { font-size: 10px; padding: 4px 0; }
        .utility-links a { margin: 0 4px; }
        .navbar { padding: 0.5rem 0; }
        .navbar .container { padding: 0 0.75rem; }
        .navbar-brand { font-size: 1.5rem; }
        .navbar-brand img { height: 28px !important; }
        .navbar-collapse { padding: 1rem; border-radius: 0 0 8px 8px; }
        .nav-menu { font-size: 1rem; padding: 14px 20px; }
        .hamburger-menu { width: 20px; height: 15px; }
        .hamburger-menu span { height: 2px; }
    }
    
    .cart-btn {
        background: none;
        color: #333;
        border: none;
        padding: 10px;
        position: relative;
        cursor: pointer;
        transition: all 0.3s;
        margin-left: 15px;
        border-radius: 8px;
    }
    .cart-btn:hover { background: #f8f9fa; color: #007bff; transform: translateY(-1px); }
    .cart-btn svg { width: 24px; height: 24px; }
    .cart-count {
        position: absolute;
        top: -8px;
        right: -8px;
        background: #dc3545;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    @media (max-width: 375px) {
        .utility-bar { display: none; }
        .navbar-brand { font-size: 1.25rem; }
        .navbar-brand img { height: 24px !important; }
        .nav-menu { font-size: 0.95rem; padding: 12px 16px; }
        .cart-btn { margin-left: 10px; padding: 8px 12px; }
    }
</style>