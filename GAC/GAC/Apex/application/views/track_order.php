<?php include 'header.php'; ?>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">📦 Track Your Order</h1>
                <p class="lead text-muted">Enter your order details below to track your shipment status</p>
            </div>
        </div>
    </div>

    <!-- Order Tracking Form -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h4 class="text-center mb-4">🔍 Enter Order Information</h4>
                    <form id="trackingForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Order Number *</label>
                                <input type="text" class="form-control" id="orderNumber" placeholder="e.g., APX-2024-001234" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Track Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sample Order Status (Hidden by default) -->
    <div class="row mb-5" id="orderStatus" style="display: none;">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-8">
                            <h4 class="mb-1">Order #APX-2024-001234</h4>
                            <p class="text-muted mb-0">Placed on December 15, 2024</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <span class="badge bg-success fs-6 px-3 py-2">Out for Delivery</span>
                        </div>
                    </div>
                    
                    <!-- Order Items -->
                    <div class="order-items mb-4">
                        <h6 class="fw-bold mb-3">Order Items</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="product-img me-3">
                                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=80&h=80&fit=crop" class="rounded" alt="Product">
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Venturini Men's Oxford</h6>
                                        <p class="text-muted small mb-0">Size: 42 | Qty: 1</p>
                                        <p class="fw-bold mb-0">৳ 2,990</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="product-img me-3">
                                        <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=80&h=80&fit=crop" class="rounded" alt="Product">
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Sprint Running Shoes</h6>
                                        <p class="text-muted small mb-0">Size: 41 | Qty: 1</p>
                                        <p class="fw-bold mb-0">৳ 1,990</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tracking Timeline -->
                    <div class="tracking-timeline">
                        <h6 class="fw-bold mb-4">📍 Tracking Timeline</h6>
                        <div class="timeline">
                            <div class="timeline-item completed">
                                <div class="timeline-marker">✅</div>
                                <div class="timeline-content">
                                    <h6 class="mb-1">Order Confirmed</h6>
                                    <p class="text-muted small mb-1">Your order has been confirmed and is being prepared</p>
                                    <small class="text-muted">Dec 15, 2024 - 10:30 AM</small>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="timeline-marker">📦</div>
                                <div class="timeline-content">
                                    <h6 class="mb-1">Order Packed</h6>
                                    <p class="text-muted small mb-1">Your items have been packed and ready for shipment</p>
                                    <small class="text-muted">Dec 15, 2024 - 2:15 PM</small>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="timeline-marker">🚛</div>
                                <div class="timeline-content">
                                    <h6 class="mb-1">In Transit</h6>
                                    <p class="text-muted small mb-1">Package is on the way to your delivery address</p>
                                    <small class="text-muted">Dec 16, 2024 - 9:00 AM</small>
                                </div>
                            </div>
                            <div class="timeline-item active">
                                <div class="timeline-marker">🚚</div>
                                <div class="timeline-content">
                                    <h6 class="mb-1">Out for Delivery</h6>
                                    <p class="text-muted small mb-1">Your package is out for delivery and will arrive today</p>
                                    <small class="text-muted">Dec 17, 2024 - 8:30 AM</small>
                                </div>
                            </div>
                            <div class="timeline-item pending">
                                <div class="timeline-marker">🏠</div>
                                <div class="timeline-content">
                                    <h6 class="mb-1">Delivered</h6>
                                    <p class="text-muted small mb-1">Package will be delivered to your address</p>
                                    <small class="text-muted">Expected: Dec 17, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Information -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h6 class="fw-bold">📍 Delivery Address</h6>
                            <p class="mb-0">John Doe<br>
                            House 123, Road 5<br>
                            Dhanmondi, Dhaka 1205<br>
                            Phone: +880 1700-123456</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold">💰 Order Summary</h6>
                            <p class="mb-1">Subtotal: ৳ 4,980</p>
                            <p class="mb-1">Shipping: Free</p>
                            <p class="fw-bold mb-0">Total: ৳ 4,980</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Track Options -->
    <div class="row mb-5">
        <div class="col-12">
            <h4 class="text-center mb-4">🚀 Quick Actions</h4>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm h-100 quick-action">
                <div class="card-body text-center p-4">
                    <div class="action-icon mb-3">📱</div>
                    <h6>SMS Tracking</h6>
                    <p class="text-muted small">Get updates via SMS</p>
                    <button class="btn btn-outline-primary btn-sm">Enable SMS</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm h-100 quick-action">
                <div class="card-body text-center p-4">
                    <div class="action-icon mb-3">📧</div>
                    <h6>Email Updates</h6>
                    <p class="text-muted small">Receive email notifications</p>
                    <button class="btn btn-outline-primary btn-sm">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm h-100 quick-action">
                <div class="card-body text-center p-4">
                    <div class="action-icon mb-3">📞</div>
                    <h6>Call Support</h6>
                    <p class="text-muted small">Speak with our team</p>
                    <button class="btn btn-outline-primary btn-sm">Call Now</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm h-100 quick-action">
                <div class="card-body text-center p-4">
                    <div class="action-icon mb-3">🔄</div>
                    <h6>Return/Exchange</h6>
                    <p class="text-muted small">Start return process</p>
                    <button class="btn btn-outline-primary btn-sm">Start Return</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.quick-action {
    transition: transform 0.3s ease;
}
.quick-action:hover {
    transform: translateY(-5px);
}
.action-icon {
    font-size: 2.5rem;
}
.timeline {
    position: relative;
    padding-left: 2rem;
}
.timeline::before {
    content: '';
    position: absolute;
    left: 1rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}
.timeline-item {
    position: relative;
    margin-bottom: 2rem;
}
.timeline-marker {
    position: absolute;
    left: -2.5rem;
    width: 2rem;
    height: 2rem;
    background: white;
    border: 3px solid #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
}
.timeline-item.completed .timeline-marker {
    border-color: #28a745;
    background: #28a745;
    color: white;
}
.timeline-item.active .timeline-marker {
    border-color: #007bff;
    background: #007bff;
    color: white;
    animation: pulse 2s infinite;
}
.timeline-item.pending .timeline-marker {
    border-color: #6c757d;
    color: #6c757d;
}
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(0, 123, 255, 0); }
    100% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0); }
}
.product-img img {
    width: 60px;
    height: 60px;
    object-fit: cover;
}
</style>

<script>
document.getElementById('trackingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('orderStatus').style.display = 'block';
    document.getElementById('orderStatus').scrollIntoView({ behavior: 'smooth' });
});
</script>

<?php include 'footer.php'; ?>