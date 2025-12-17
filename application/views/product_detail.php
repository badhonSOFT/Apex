<?php include 'header.php'; ?>

<div class="container my-4">
    <?php if ($product): ?>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=500&h=400&fit=crop" 
                             class="w-100 rounded" alt="<?= htmlspecialchars($product['name']) ?>" 
                             style="height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="product-details">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/websites/GAC/Apex/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/websites/GAC/Apex/products">Products</a></li>
                            <li class="breadcrumb-item active"><?= htmlspecialchars($product['name']) ?></li>
                        </ol>
                    </nav>
                    
                    <h1 class="h2 mb-3"><?= htmlspecialchars($product['name']) ?></h1>
                    <p class="price h3 text-primary fw-bold mb-3">৳ <?= number_format($product['price'], 0) ?></p>
                    
                    <div class="mb-3">
                        <small class="text-warning">★★★★★</small>
                        <small class="text-muted">(4.8 out of 5)</small>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Description</h5>
                        <p><?= htmlspecialchars($product['description'] ?? 'Premium quality footwear designed for comfort and style.') ?></p>
                    </div>
                    
                    <div class="mb-4">
                        <h6>Available Sizes</h6>
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-outline-secondary btn-sm">6</button>
                            <button class="btn btn-outline-secondary btn-sm">7</button>
                            <button class="btn btn-outline-secondary btn-sm">8</button>
                            <button class="btn btn-outline-secondary btn-sm">9</button>
                            <button class="btn btn-outline-secondary btn-sm">10</button>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex">
                        <button class="btn btn-primary btn-lg flex-fill">Add to Cart</button>
                        <button class="btn btn-outline-primary btn-lg">Wishlist</button>
                    </div>
                    
                    <div class="mt-4">
                        <a href="/websites/GAC/Apex/products" class="btn btn-link">← Back to Products</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-muted">Product Not Found</h1>
                <p class="lead">The product you're looking for doesn't exist.</p>
                <a href="/websites/GAC/Apex/products" class="btn btn-primary">Browse All Products</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<style>
@media (max-width: 768px) {
    .product-details h1 { font-size: 1.5rem; }
    .price { font-size: 1.5rem !important; }
    .d-md-flex { flex-direction: column !important; }
    .btn-lg { padding: 0.75rem 1rem; }
}
</style>

<?php include 'footer.php'; ?>