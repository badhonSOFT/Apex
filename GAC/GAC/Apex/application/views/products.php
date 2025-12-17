<?php include 'header.php'; ?>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">All Products</h1>
        </div>
    </div>
    
    <?php if (!empty($products)): ?>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="card-title"><?= htmlspecialchars($product['name']) ?></h6>
                            <p class="text-primary fw-bold">৳ <?= number_format($product['price'], 0) ?></p>
                            <a href="/websites/GAC/Apex/product/<?= $product['id'] ?>" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-12 text-center">
                <p class="lead">No products available.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>