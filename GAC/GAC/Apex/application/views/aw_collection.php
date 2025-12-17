<?php include 'header.php'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    
    body { font-family: 'Poppins', sans-serif; }
    
    .hero-section { 
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
        color: white; 
        padding: 100px 0; 
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }
    
    .hero-content { position: relative; z-index: 2; }
    .hero-title { font-size: 4rem; font-weight: 800; margin-bottom: 1.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
    .hero-subtitle { font-size: 1.4rem; opacity: 0.95; margin-bottom: 3rem; font-weight: 300; }
    
    .stats-card { 
        background: rgba(255,255,255,0.15); 
        border-radius: 20px; 
        padding: 2.5rem 1.5rem; 
        backdrop-filter: blur(15px); 
        border: 1px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
    }
    
    .stats-card:hover { transform: translateY(-5px); background: rgba(255,255,255,0.2); }
    
    .category-card { 
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
        border: none; 
        border-radius: 20px; 
        overflow: hidden;
        background: white;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .category-card:hover { 
        transform: translateY(-15px) scale(1.02); 
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }
    
    .category-icon { 
        font-size: 5rem; 
        margin-bottom: 1.5rem;
        background: linear-gradient(45deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .product-card { 
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
        border: none; 
        border-radius: 20px; 
        overflow: hidden;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        position: relative;
    }
    
    .product-card:hover { 
        transform: translateY(-10px) scale(1.03); 
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    
    .product-image { 
        height: 280px; 
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .product-card:hover .product-image { transform: scale(1.1); }
    
    .badge-new { 
        background: linear-gradient(45deg, #ff6b6b, #ee5a24); 
        border-radius: 20px;
        padding: 8px 16px;
        font-weight: 600;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }
    
    .cta-section { 
        background: linear-gradient(135deg, #2c3e50, #34495e); 
        color: white; 
        border-radius: 25px;
        position: relative;
        overflow: hidden;
    }
    
    .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: shimmer 3s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .btn-custom { 
        background: linear-gradient(45deg, #007bff, #0056b3); 
        border: none; 
        border-radius: 30px; 
        padding: 15px 35px; 
        font-weight: 600;
        font-size: 1rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .btn-custom::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    
    .btn-custom:hover::before { left: 100%; }
    .btn-custom:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(0,123,255,0.4); }
    
    .section-title { 
        font-size: 3rem; 
        font-weight: 800; 
        background: linear-gradient(45deg, #2c3e50, #667eea);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 4rem;
        position: relative;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        border-radius: 2px;
    }
    
    .fade-in { animation: fadeInUp 0.8s ease-out; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .price-tag {
        background: linear-gradient(45deg, #28a745, #20c997);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1.1rem;
        display: inline-block;
        margin: 10px 0;
    }
    
    .rating-stars {
        color: #ffc107;
        font-size: 1.2rem;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    
    .category-card .card-body {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }
    
    .hero-buttons .btn {
        margin: 0 10px;
        min-width: 180px;
    }
    
    @media (max-width: 768px) {
        .hero-title { font-size: 2.5rem; }
        .section-title { font-size: 2rem; }
        .category-icon { font-size: 3.5rem; }
    }
</style>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="hero-title fade-in">AW Collection 2024</h1>
                    <p class="hero-subtitle fade-in">Discover our exclusive Autumn/Winter collection featuring premium quality footwear and accessories crafted for the modern lifestyle. Step into elegance with our curated selection of contemporary designs.</p>
                    <div class="hero-buttons fade-in">
                        <a href="#products" class="btn btn-light btn-lg btn-custom">Explore Collection</a>
                        <a href="/websites/GAC/Apex/products" class="btn btn-outline-light btn-lg">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card text-center fade-in">
                        <h2 class="fw-bold mb-2">50+</h2>
                        <p class="mb-0 fw-medium">New Designs</p>
                        <small class="opacity-75">Latest Trends</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card text-center fade-in">
                        <h2 class="fw-bold mb-2">Premium</h2>
                        <p class="mb-0 fw-medium">Materials</p>
                        <small class="opacity-75">Quality Assured</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card text-center fade-in">
                        <h2 class="fw-bold mb-2">Comfort</h2>
                        <p class="mb-0 fw-medium">Guaranteed</p>
                        <small class="opacity-75">All Day Wear</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card text-center fade-in">
                        <h2 class="fw-bold mb-2">Trendy</h2>
                        <p class="mb-0 fw-medium">Styles</p>
                        <small class="opacity-75">Fashion Forward</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Shop by Category</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card category-card h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon">👞</div>
                            <h4 class="fw-bold mb-3 text-dark">Formal Shoes</h4>
                            <p class="text-muted mb-4 lh-lg">Professional footwear for business and formal occasions. Crafted with premium leather and superior comfort for the modern professional.</p>
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill">Premium Leather</span>
                                <span class="badge bg-success rounded-pill">Comfort Fit</span>
                            </div>
                            <a href="/websites/GAC/Apex/products" class="btn btn-primary btn-custom">Explore Formal</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card category-card h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon">👟</div>
                            <h4 class="fw-bold mb-3 text-dark">Casual Wear</h4>
                            <p class="text-muted mb-4 lh-lg">Comfortable everyday footwear for all occasions. Perfect blend of style and functionality for your active lifestyle.</p>
                            <div class="mb-3">
                                <span class="badge bg-info rounded-pill">All-Day Comfort</span>
                                <span class="badge bg-warning rounded-pill">Versatile</span>
                            </div>
                            <a href="/websites/GAC/Apex/products" class="btn btn-primary btn-custom">Shop Casual</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card category-card h-100">
                        <div class="card-body text-center p-5">
                            <div class="category-icon">🥾</div>
                            <h4 class="fw-bold mb-3 text-dark">Winter Boots</h4>
                            <p class="text-muted mb-4 lh-lg">Warm and stylish boots for the cold season. Weather-resistant and fashion-forward designs to keep you comfortable.</p>
                            <div class="mb-3">
                                <span class="badge bg-danger rounded-pill">Waterproof</span>
                                <span class="badge bg-secondary rounded-pill">Insulated</span>
                            </div>
                            <a href="/websites/GAC/Apex/products" class="btn btn-primary btn-custom">View Boots</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <?php if (!empty($products)): ?>
    <section id="products" class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title text-center">Featured Products</h2>
            <div class="row">
                <?php 
                $productImages = [
                    'formal-oxford.jpg' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=350&fit=crop',
                    'casual-loafer.jpg' => 'https://images.unsplash.com/photo-1582897085656-c636d006a246?w=400&h=350&fit=crop',
                    'women-heel.jpg' => 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=400&h=350&fit=crop',
                    'running-sneaker.jpg' => 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=400&h=350&fit=crop',
                    'ballet-flats.jpg' => 'https://images.unsplash.com/photo-1535043934128-cf0b28d52f95?w=400&h=350&fit=crop',
                    'kids-sneaker.jpg' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=350&fit=crop',
                    'winter-boot.jpg' => 'https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?w=400&h=350&fit=crop',
                    'ankle-boot.jpg' => 'https://images.unsplash.com/photo-1608256246200-53e635b5b65f?w=400&h=350&fit=crop',
                    'slide-sandal.jpg' => 'https://images.unsplash.com/photo-1603808033192-082d6919d3e1?w=400&h=350&fit=crop',
                    'comfort-pump.jpg' => 'https://images.unsplash.com/photo-1596702962347-cbb7c4c2e0b7?w=400&h=350&fit=crop',
                    'dress-shoe.jpg' => 'https://images.unsplash.com/photo-1614252369475-531eba835eb1?w=400&h=350&fit=crop',
                    'wedge-sandal.jpg' => 'https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?w=400&h=350&fit=crop'
                ];
                
                foreach (array_slice($products, 0, 12) as $product): 
                    $imageUrl = isset($productImages[$product['image']]) ? $productImages[$product['image']] : 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=350&fit=crop';
                ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100 shadow-sm">
                        <div class="position-relative">
                            <img src="<?= $imageUrl ?>" class="card-img-top product-image" alt="<?= htmlspecialchars($product['name']) ?>">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge badge-new px-3 py-2">AW 2024</span>
                            </div>
                            <?php if ($product['price'] > 3000): ?>
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-warning text-dark px-2 py-1">Premium</span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title fw-bold mb-3 text-dark"><?= htmlspecialchars($product['name']) ?></h5>
                            <p class="text-muted small mb-2"><?= htmlspecialchars(substr($product['description'], 0, 60)) ?>...</p>
                            <div class="price-tag mb-3">৳ <?= number_format($product['price'], 0) ?></div>
                            <div class="mb-3">
                                <span class="rating-stars">★★★★★</span>
                                <small class="text-muted ms-2 fw-medium">(4.<?= rand(6,9) ?>) • <?= rand(50,200) ?> reviews</small>
                            </div>
                            <div class="mb-3">
                                <small class="text-success fw-medium">✓ Free Shipping</small>
                                <small class="text-info fw-medium ms-3">✓ Easy Returns</small>
                            </div>
                            <a href="/websites/GAC/Apex/product/<?= $product['id'] ?>" class="btn btn-primary btn-custom w-100">View Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="cta-section p-5 text-center">
                <h2 class="fw-bold mb-3">Don't Miss Out on Our AW Collection!</h2>
                <p class="fs-5 mb-4 opacity-75">Get exclusive access to new arrivals, special offers, and limited edition pieces from our premium Autumn/Winter collection</p>
                <a href="/websites/GAC/Apex/products" class="btn btn-light btn-lg btn-custom me-3">Shop Full Collection</a>
                <a href="/websites/GAC/Apex/contact" class="btn btn-outline-light btn-lg">Get Notified</a>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>