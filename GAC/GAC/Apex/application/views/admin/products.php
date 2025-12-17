<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Apex Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php include __DIR__ . '/navbar.php'; ?>

        <main class="main-content">
            <header class="page-header">
                <h1>Product Management</h1>
                <button class="btn-primary" onclick="openModal('addProductModal')">
                    <i class="fas fa-plus"></i> Add Product
                </button>
            </header>

            <div class="filters-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search products..." id="searchInput">
                </div>
                <select class="filter-select">
                    <option>All Categories</option>
                    <option>Men</option>
                    <option>Women</option>
                    <option>Kids</option>
                </select>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200" alt="Product">
                    <div class="product-info">
                        <h3>Premium T-Shirt</h3>
                        <p class="product-category">Men's Clothing</p>
                        <div class="product-price">$29.99</div>
                        <div class="product-stock">Stock: 45</div>
                        <div class="product-status active">Active</div>
                    </div>
                    <div class="product-actions">
                        <button class="btn-edit" onclick="editProduct(1)"><i class="fas fa-edit"></i></button>
                        <button class="btn-delete" onclick="deleteProduct(1)"><i class="fas fa-trash"></i></button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200" alt="Product">
                    <div class="product-info">
                        <h3>Designer Jeans</h3>
                        <p class="product-category">Women's Clothing</p>
                        <div class="product-price">$89.99</div>
                        <div class="product-stock">Stock: 23</div>
                        <div class="product-status active">Active</div>
                    </div>
                    <div class="product-actions">
                        <button class="btn-edit" onclick="editProduct(2)"><i class="fas fa-edit"></i></button>
                        <button class="btn-delete" onclick="deleteProduct(2)"><i class="fas fa-trash"></i></button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/200x200" alt="Product">
                    <div class="product-info">
                        <h3>Kids Sneakers</h3>
                        <p class="product-category">Kids Footwear</p>
                        <div class="product-price">$45.99</div>
                        <div class="product-stock">Stock: 0</div>
                        <div class="product-status inactive">Out of Stock</div>
                    </div>
                    <div class="product-actions">
                        <button class="btn-edit" onclick="editProduct(3)"><i class="fas fa-edit"></i></button>
                        <button class="btn-delete" onclick="deleteProduct(3)"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Add Product Modal -->
    <div id="addProductModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Product</h2>
                <button class="close-btn" onclick="closeModal('addProductModal')">&times;</button>
            </div>
            <form class="product-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" required>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label>Stock Quantity</label>
                        <input type="number" name="stock" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label>Product Images</label>
                    <input type="file" name="images" multiple accept="image/*">
                </div>
                <div class="form-actions">
                    <button type="button" class="btn-secondary" onclick="closeModal('addProductModal')">Cancel</button>
                    <button type="submit" class="btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f8fafc; }

.admin-container { min-height: 100vh; }
.main-content { padding: 2rem; margin-top: 70px; }
.main-content { flex: 1; padding: 2rem; }

.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
.page-header h1 { font-size: 2rem; color: #1e293b; }
.btn-primary { background: #667eea; color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; font-weight: 500; }

.filters-bar { display: flex; gap: 1rem; margin-bottom: 2rem; align-items: center; }
.search-box { position: relative; flex: 1; max-width: 400px; }
.search-box i { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #64748b; }
.search-box input { width: 100%; padding: 12px 12px 12px 40px; border: 1px solid #e2e8f0; border-radius: 8px; }
.filter-select { padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; background: white; }

.products-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; }
.product-card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: transform 0.3s; }
.product-card:hover { transform: translateY(-2px); }
.product-card img { width: 100%; height: 200px; object-fit: cover; }
.product-info { padding: 1rem; }
.product-info h3 { font-size: 1.1rem; font-weight: 600; margin-bottom: 4px; }
.product-category { color: #64748b; font-size: 0.9rem; margin-bottom: 8px; }
.product-price { font-size: 1.2rem; font-weight: 700; color: #1e293b; margin-bottom: 4px; }
.product-stock { font-size: 0.9rem; color: #64748b; margin-bottom: 8px; }
.product-status { padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; display: inline-block; }
.product-status.active { background: #dcfce7; color: #16a34a; }
.product-status.inactive { background: #fee2e2; color: #dc2626; }

.product-actions { display: flex; gap: 8px; padding: 1rem; border-top: 1px solid #f1f5f9; }
.btn-edit, .btn-delete { padding: 8px 12px; border: none; border-radius: 6px; cursor: pointer; }
.btn-edit { background: #dbeafe; color: #2563eb; }
.btn-delete { background: #fee2e2; color: #dc2626; }

.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; }
.modal-content { background: white; margin: 5% auto; padding: 0; border-radius: 12px; max-width: 600px; max-height: 90vh; overflow-y: auto; }
.modal-header { display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid #e2e8f0; }
.close-btn { background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #64748b; }

.product-form { padding: 1.5rem; }
.form-row { display: flex; gap: 1rem; margin-bottom: 1rem; }
.form-group { flex: 1; }
.form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #374151; }
.form-group input, .form-group select, .form-group textarea { width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 8px; }
.form-actions { display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem; }
.btn-secondary { background: #f1f5f9; color: #64748b; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; }

@media (max-width: 768px) {
    .filters-bar { flex-direction: column; align-items: stretch; }
    .products-grid { grid-template-columns: 1fr; }
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

function editProduct(id) {
    alert('Edit product ' + id);
}

function deleteProduct(id) {
    if (confirm('Are you sure you want to delete this product?')) {
        alert('Delete product ' + id);
    }
}

document.getElementById('searchInput').addEventListener('input', function() {
    // Implement search functionality
    console.log('Search:', this.value);
});
</script>
</body>
</html>