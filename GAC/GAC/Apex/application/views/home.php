<?php include 'header.php'; ?>

<style>
    .page-header { background: white; border-bottom: 1px solid #eee; }
    .breadcrumb-custom { color: #666; font-size: 14px; }
    .breadcrumb-custom a { color: #007bff; text-decoration: none; }
    .promo-banner { background: linear-gradient(135deg, #ff6b6b, #ee5a24); color: white; border-radius: 10px; position: relative; }
    .promo-text h2 { font-size: 36px; margin-bottom: 10px; }
    .promo-text h3 { font-size: 24px; margin-bottom: 10px; }
    .logo-placeholder { background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 5px; text-align: center; margin-bottom: 10px; }
    .image-placeholder { font-size: 48px; }
    .terms { position: absolute; bottom: 10px; right: 20px; font-size: 12px; }
    .filters-sidebar { background: white; border-radius: 8px; height: fit-content; }
    .filter-section { border-bottom: 1px solid #eee; }
    .style-grid, .sizes-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
    .style-item, .size-box { padding: 8px; border: 1px solid #ddd; text-align: center; border-radius: 4px; cursor: pointer; font-size: 12px; }
    .show-more { color: #007bff; text-decoration: none; font-size: 12px; }
    .product-card { background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: transform 0.3s; }
    .product-card:hover { transform: translateY(-5px); }
    .product-image { width: 100%; height: 150px; object-fit: cover; border-radius: 4px; }
    .price { font-size: 16px; font-weight: bold; color: #007bff; }
    .product-grid.full-width { grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); }
    
    @media (max-width: 768px) {
        .page-header .container { flex-direction: column; align-items: center; gap: 1rem; }
        .breadcrumb-custom { margin-bottom: 0.5rem; }
        .promo-banner { margin: 1rem 0; padding: 2rem 1rem; }
        .promo-banner .row { text-align: center; }
        .promo-text h2 { font-size: 2rem; }
        .promo-text h3 { font-size: 1.5rem; }
        .filters-sidebar { margin-bottom: 2rem; }
        .product-card { margin-bottom: 1rem; }
        .col-md-4 { margin-bottom: 1rem; }
    }
    
    @media (max-width: 576px) {
        .promo-text h2 { font-size: 1.5rem; }
        .promo-text h3 { font-size: 1.2rem; }
        .product-card { padding: 1rem; }
        .product-image { height: 120px; }
        .btn { font-size: 0.8rem; padding: 0.5rem 1rem; }
    }
</style>

    <!-- Page Header Bar -->
    <div class="page-header py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="breadcrumb-custom">
                <a href="/websites/GAC/Apex/">Home</a> / Prime Cart Deal
            </div>
            <div class="d-flex align-items-center gap-3">
                <button id="hideFilters" class="btn btn-outline-secondary btn-sm">☰ Hide Filters</button>
                <h1 class="h5 mb-0">Prime Cart Deal</h1>
                <select class="form-select form-select-sm" style="width: auto;">
                    <option>Sort By: New Arrivals</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Promotional Banner -->
    <div class="container my-4">
        <div class="promo-banner p-4">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="promo-text">
                        <h2>FLAT 15% OFF</h2>
                        <h3>UPTO 500 BDT</h3>
                        <p>Free Shipping on order above 3000 BDT</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="logo-placeholder">PRIME CART</div>
                    <div class="logo-placeholder">EMI</div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="image-placeholder">👟</div>
                        <div class="image-placeholder">👤</div>
                    </div>
                </div>
            </div>
            <div class="terms">*T&C Apply</div>
        </div>
    </div>



    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Filters Sidebar -->
            <aside id="filtersSidebar" class="col-lg-3 mb-4">
                <div class="filters-sidebar p-3">
                    <div class="filter-section pb-3 mb-3">
                        <h5>Style</h5>
                        <div class="style-grid mb-2">
                            <div class="style-item">Backpack</div>
                            <div class="style-item">Ballerina</div>
                            <div class="style-item">Belt</div>
                            <div class="style-item">Block Heel</div>
                        </div>
                        <a href="#" class="show-more">Show more</a>
                    </div>

                    <div class="filter-section pb-3 mb-3">
                        <h5>Sizes</h5>
                        <div class="sizes-grid mb-2">
                            <div class="size-box">21</div>
                            <div class="size-box">22</div>
                            <div class="size-box">23</div>
                            <div class="size-box">24</div>
                            <div class="size-box">25</div>
                            <div class="size-box">26</div>
                        </div>
                        <a href="#" class="show-more">Show more</a>
                    </div>

                    <div class="filter-section pb-3 mb-3">
                        <h5>Color</h5>
                        <div class="mb-2">
                            <div class="mb-1">Beige</div>
                            <div class="mb-1">Black</div>
                            <div class="mb-1">Blue</div>
                            <div class="mb-1">Brown</div>
                        </div>
                        <a href="#" class="show-more">Show more</a>
                    </div>

                    <div class="filter-section pb-3 mb-3">
                        <h5>Brand</h5>
                        <div class="mb-2">
                            <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Sprint</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Apex</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Nino Rossi</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Venturini</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Moochie</label></div>
                        </div>
                        <a href="#" class="show-more">Show more</a>
                    </div>

                    <div class="filter-section pb-3 mb-3">
                        <h5>Gender</h5>
                        <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Men</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Women</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Girl Kids</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"><label class="form-check-label">Boy Kids</label></div>
                    </div>

                    <div class="filter-section">
                        <h5>Shop by price</h5>
                        <input type="range" class="form-range" min="350" max="15000" value="7675">
                        <div class="d-flex justify-content-between small text-muted">
                            <span>৳ 350</span>
                            <span>৳ 15,000</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <main id="productGrid" class="col-lg-9">
                <div class="row g-3">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Sandal">
                            <h6>Venturini Men's Sandal</h6>
                            <p class="price mb-2">৳ 2,990</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(1, 'Venturini Men\'s Sandal', 2990)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Sandal">
                            <h6>Venturini Men's Sandal</h6>
                            <p class="price mb-2">৳ 2,290</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(2, 'Venturini Men\'s Sandal', 2290)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1582897085656-c636d006a246?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Loafer">
                            <h6>Venturini Men's Loafer</h6>
                            <p class="price mb-2">৳ 12,000</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(3, 'Venturini Men\'s Loafer', 12000)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=300&h=200&fit=crop" class="product-image mb-2" alt="Boy's Sandal">
                            <h6>Twinkler Boy's Sandal</h6>
                            <p class="price mb-2">৳ 890</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(4, 'Twinkler Boy\'s Sandal', 890)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1603808033192-082d6919d3e1?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Slide">
                            <h6>Sprint Men's Slide</h6>
                            <p class="price mb-2">৳ 1,990</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(5, 'Sprint Men\'s Slide', 1990)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Sandal">
                            <h6>Sprint Men's Sandal</h6>
                            <p class="price mb-2">৳ 1,690</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(6, 'Sprint Men\'s Sandal', 1690)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=300&h=200&fit=crop" class="product-image mb-2" alt="Men's Slide">
                            <h6>Sprint Men's Slide</h6>
                            <p class="price mb-2">৳ 1,290</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(7, 'Sprint Men\'s Slide', 1290)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=300&h=200&fit=crop" class="product-image mb-2" alt="Women's Sandal">
                            <h6>Nino Rossi Women's Sandal</h6>
                            <p class="price mb-2">৳ 2,290</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(8, 'Nino Rossi Women\'s Sandal', 2290)">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3">
                            <img src="https://images.unsplash.com/photo-1535043934128-cf0b28d52f95?w=300&h=200&fit=crop" class="product-image mb-2" alt="Women's Pumpy">
                            <h6>Dr. Mauch Women's Pumpy</h6>
                            <p class="price mb-2">৳ 1,990</p>
                            <button class="btn btn-primary btn-sm w-100" onclick="addToCart(9, 'Dr. Mauch Women\'s Pumpy', 1990)">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<script>
    document.getElementById('hideFilters').addEventListener('click', function() {
        const sidebar = document.getElementById('filtersSidebar');
        const grid = document.getElementById('productGrid');
        
        if (sidebar.style.display === 'none') {
            sidebar.style.display = 'block';
            grid.className = 'col-lg-9';
            this.textContent = '☰ Hide Filters';
        } else {
            sidebar.style.display = 'none';
            grid.className = 'col-12';
            this.textContent = '☰ Show Filters';
        }
    });
    
    // Cart functionality is now handled in navbar.php
</script>

<?php include 'footer.php'; ?>