<?php include 'header.php'; ?>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">Find a Store</h1>
                <p class="lead text-muted">Locate your nearest Apex Store and visit us for the best shopping experience</p>
            </div>
        </div>
    </div>

    <!-- Store Locator -->
    <div class="row mb-5">
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="mb-4">🔍 Store Locator</h4>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Enter your location</label>
                            <input type="text" class="form-control" placeholder="City, State or ZIP code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Search radius</label>
                            <select class="form-select">
                                <option>Within 5 miles</option>
                                <option>Within 10 miles</option>
                                <option>Within 25 miles</option>
                                <option>Within 50 miles</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Find Stores</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="mb-4">📍 Quick Locations</h4>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary text-start">📍 Dhaka - Gulshan</button>
                        <button class="btn btn-outline-primary text-start">📍 Dhaka - Dhanmondi</button>
                        <button class="btn btn-outline-primary text-start">📍 Chittagong - GEC</button>
                        <button class="btn btn-outline-primary text-start">📍 Sylhet - Zindabazar</button>
                        <button class="btn btn-outline-primary text-start">📍 Rajshahi - Saheb Bazar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Stores -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-center mb-4">Our Store Locations</h3>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Gulshan</h5>
                        <span class="badge bg-success">Open</span>
                    </div>
                    <p class="text-muted mb-2">📍 Road 11, Block C, Gulshan-1, Dhaka 1212</p>
                    <p class="text-muted mb-2">📞 +880 1700-000001</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 10:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Dhanmondi</h5>
                        <span class="badge bg-success">Open</span>
                    </div>
                    <p class="text-muted mb-2">📍 Road 2, Dhanmondi R/A, Dhaka 1205</p>
                    <p class="text-muted mb-2">📞 +880 1700-000002</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 10:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Chittagong</h5>
                        <span class="badge bg-success">Open</span>
                    </div>
                    <p class="text-muted mb-2">📍 GEC Circle, Chittagong 4000</p>
                    <p class="text-muted mb-2">📞 +880 1700-000003</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 9:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Sylhet</h5>
                        <span class="badge bg-warning text-dark">Closes Soon</span>
                    </div>
                    <p class="text-muted mb-2">📍 Zindabazar, Sylhet 3100</p>
                    <p class="text-muted mb-2">📞 +880 1700-000004</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 9:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Rajshahi</h5>
                        <span class="badge bg-success">Open</span>
                    </div>
                    <p class="text-muted mb-2">📍 Saheb Bazar, Rajshahi 6000</p>
                    <p class="text-muted mb-2">📞 +880 1700-000005</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 9:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm store-card">
                <div class="card-body p-4">
                    <div class="store-header mb-3">
                        <h5 class="fw-bold">🏢 Apex Khulna</h5>
                        <span class="badge bg-success">Open</span>
                    </div>
                    <p class="text-muted mb-2">📍 Royal More, Khulna 9000</p>
                    <p class="text-muted mb-2">📞 +880 1700-000006</p>
                    <p class="text-muted mb-3">🕒 10:00 AM - 9:00 PM</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Get Directions</button>
                        <button class="btn btn-outline-primary btn-sm">Call Store</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Store Services -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-center mb-4">Store Services</h3>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center p-3">
                <div class="service-icon mb-3">👟</div>
                <h6>Try Before Buy</h6>
                <p class="text-muted small">Test comfort and fit in-store</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center p-3">
                <div class="service-icon mb-3">🎁</div>
                <h6>Gift Wrapping</h6>
                <p class="text-muted small">Free gift wrapping service</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center p-3">
                <div class="service-icon mb-3">🔄</div>
                <h6>Easy Returns</h6>
                <p class="text-muted small">30-day return policy</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="text-center p-3">
                <div class="service-icon mb-3">👨‍💼</div>
                <h6>Expert Advice</h6>
                <p class="text-muted small">Professional fitting assistance</p>
            </div>
        </div>
    </div>
</div>

<style>
.store-card {
    transition: transform 0.3s ease;
}
.store-card:hover {
    transform: translateY(-5px);
}
.store-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.service-icon {
    font-size: 3rem;
}
</style>

<?php include 'footer.php'; ?>