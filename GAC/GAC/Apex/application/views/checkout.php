<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Apex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="checkout-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1 class="checkout-title">Secure Checkout</h1>
                    <div class="checkout-steps">
                        <div class="step active">
                            <span class="step-number">1</span>
                            <span class="step-text">Shipping</span>
                        </div>
                        <div class="step-line"></div>
                        <div class="step">
                            <span class="step-number">2</span>
                            <span class="step-text">Payment</span>
                        </div>
                        <div class="step-line"></div>
                        <div class="step">
                            <span class="step-number">3</span>
                            <span class="step-text">Review</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-form">
                        <div class="form-section">
                            <h3>Shipping Information</h3>
                            <form id="checkoutForm" onsubmit="submitOrder(event)">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">First Name *</label>
                                        <input type="text" class="form-control" name="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" name="lastName" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address *</label>
                                    <input type="text" class="form-control" name="address" placeholder="Street address" required>
                                </div>

                            </form>
                        </div>
                        
                        <div class="form-section">
                            <h3>Payment Method</h3>
                            <div class="payment-methods">
                                <div class="payment-option">
                                    <input type="radio" id="card" name="payment" value="card" checked>
                                    <label for="card" class="payment-label">
                                        <div class="payment-icon">💳</div>
                                        <div>
                                            <div class="payment-title">Credit/Debit Card</div>
                                            <div class="payment-desc">Visa, MasterCard, American Express</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="payment-option">
                                    <input type="radio" id="bkash" name="payment" value="bkash">
                                    <label for="bkash" class="payment-label">
                                        <div class="payment-icon">📱</div>
                                        <div>
                                            <div class="payment-title">bKash</div>
                                            <div class="payment-desc">Pay with bKash mobile wallet</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="payment-option">
                                    <input type="radio" id="cod" name="payment" value="cod">
                                    <label for="cod" class="payment-label">
                                        <div class="payment-icon">💰</div>
                                        <div>
                                            <div class="payment-title">Cash on Delivery</div>
                                            <div class="payment-desc">Pay when you receive your order</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            
                            <div id="cardDetails" class="card-details">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label">Card Number</label>
                                        <input type="text" name="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">CVV</label>
                                        <input type="text" name="cvv" class="form-control" placeholder="123" maxlength="3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="order-summary">
                        <h3>Order Summary</h3>
                        <div id="checkoutItems" class="checkout-items">
                            <!-- Items will be loaded here -->
                        </div>
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span id="subtotal">৳0</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping:</span>
                            <span id="shipping">৳100</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total:</span>
                            <span id="total">৳0</span>
                        </div>
                        <button class="place-order-btn" onclick="placeOrder()">
                            <span>Place Order</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
body { font-family: 'Inter', sans-serif; background: #f8fafc; }
.checkout-container { min-height: 100vh; padding-top: 100px; }
.checkout-title { font-size: 2.5rem; font-weight: 700; color: #1e293b; margin-bottom: 2rem; }

.checkout-steps { display: flex; align-items: center; justify-content: center; margin-bottom: 3rem; }
.step { display: flex; flex-direction: column; align-items: center; }
.step-number { width: 40px; height: 40px; border-radius: 50%; background: #e2e8f0; color: #64748b; display: flex; align-items: center; justify-content: center; font-weight: 600; margin-bottom: 8px; }
.step.active .step-number { background: #3b82f6; color: white; }
.step-text { font-size: 0.9rem; color: #64748b; }
.step.active .step-text { color: #1e293b; font-weight: 500; }
.step-line { width: 80px; height: 2px; background: #e2e8f0; margin: 0 1rem; }

.checkout-form { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-bottom: 2rem; }
.form-section { margin-bottom: 2.5rem; }
.form-section h3 { font-size: 1.25rem; font-weight: 600; color: #1e293b; margin-bottom: 1.5rem; padding-bottom: 0.5rem; border-bottom: 2px solid #f1f5f9; }

.form-label { font-weight: 500; color: #374151; margin-bottom: 0.5rem; }
.form-control, .form-select { border: 2px solid #e5e7eb; border-radius: 10px; padding: 12px 16px; transition: all 0.3s; }
.form-control:focus, .form-select:focus { border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59,130,246,0.1); }

.payment-methods { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2rem; }
.payment-option { position: relative; }
.payment-option input[type="radio"] { position: absolute; opacity: 0; }
.payment-label { display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 2px solid #e5e7eb; border-radius: 12px; cursor: pointer; transition: all 0.3s; }
.payment-option input[type="radio"]:checked + .payment-label { border-color: #3b82f6; background: #f0f9ff; }
.payment-icon { font-size: 1.5rem; }
.payment-title { font-weight: 600; color: #1e293b; }
.payment-desc { font-size: 0.85rem; color: #64748b; }

.card-details { background: #f8fafc; padding: 1.5rem; border-radius: 12px; border: 1px solid #e2e8f0; }

.order-summary { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); position: sticky; top: 120px; }
.order-summary h3 { font-size: 1.25rem; font-weight: 600; color: #1e293b; margin-bottom: 1.5rem; }

.checkout-items { margin-bottom: 1.5rem; }
.checkout-item { display: flex; justify-content: space-between; align-items: center; padding: 1rem 0; border-bottom: 1px solid #f1f5f9; }
.item-info { flex: 1; }
.item-name { font-weight: 500; color: #1e293b; }
.item-details { font-size: 0.85rem; color: #64748b; }
.item-price { font-weight: 600; color: #3b82f6; }

.summary-row { display: flex; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #f1f5f9; }
.summary-row.total { border-bottom: none; font-size: 1.1rem; font-weight: 700; color: #1e293b; padding-top: 1rem; border-top: 2px solid #e2e8f0; }

.place-order-btn { width: 100%; display: flex; align-items: center; justify-content: center; gap: 12px; padding: 16px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; border: none; border-radius: 12px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; margin-top: 1.5rem; }
.place-order-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(59,130,246,0.4); }

@media (max-width: 768px) {
    .checkout-title { font-size: 2rem; }
    .checkout-steps { flex-direction: column; gap: 1rem; }
    .step-line { display: none; }
    .checkout-form, .order-summary { padding: 1.5rem; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    loadCheckoutItems();
    
    // Payment method toggle
    document.querySelectorAll('input[name="payment"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const cardDetails = document.getElementById('cardDetails');
            cardDetails.style.display = this.value === 'card' ? 'block' : 'none';
        });
    });
});

function loadCheckoutItems() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const checkoutItems = document.getElementById('checkoutItems');
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');
    
    if (cart.length === 0) {
        checkoutItems.innerHTML = '<p class="text-center text-muted">No items in cart</p>';
        return;
    }
    
    let subtotal = 0;
    checkoutItems.innerHTML = cart.map(item => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        return `
            <div class="checkout-item">
                <div class="item-info">
                    <div class="item-name">${item.name}</div>
                    <div class="item-details">Qty: ${item.quantity} × ৳${item.price}</div>
                </div>
                <div class="item-price">৳${itemTotal}</div>
            </div>
        `;
    }).join('');
    
    const shipping = 100;
    const total = subtotal + shipping;
    
    subtotalEl.textContent = `৳${subtotal}`;
    totalEl.textContent = `৳${total}`;
}

function placeOrder() {
    document.getElementById('checkoutForm').requestSubmit();
}

function submitOrder(event) {
    event.preventDefault();
    
    const form = document.getElementById('checkoutForm');
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    
    // Get selected payment method
    const paymentMethod = document.querySelector('input[name="payment"]:checked')?.value;
    if (!paymentMethod) {
        Swal.fire({
            title: 'Payment Method Required',
            text: 'Please select a payment method',
            icon: 'warning',
            confirmButtonColor: '#f59e0b'
        });
        return;
    }
    
    const formData = new FormData(form);
    formData.append('payment', paymentMethod);
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    formData.append('cartData', JSON.stringify(cart));
    
    const submitBtn = document.querySelector('.place-order-btn');
    submitBtn.innerHTML = '<span>Processing...</span>';
    submitBtn.disabled = true;
    
    fetch('/websites/GAC/Apex/checkout/submit', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Order Placed Successfully!',
                text: `Your order number is: ${data.orderNumber}`,
                icon: 'success',
                confirmButtonText: 'Continue Shopping',
                confirmButtonColor: '#3b82f6'
            }).then(() => {
                localStorage.removeItem('cart');
                window.location.href = '/websites/GAC/Apex/';
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: data.message,
                icon: 'error',
                confirmButtonColor: '#ef4444'
            });
            submitBtn.innerHTML = '<span>Place Order</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
            submitBtn.disabled = false;
        }
    })
    .catch(error => {
        Swal.fire({
            title: 'Error!',
            text: 'Error placing order. Please try again.',
            icon: 'error',
            confirmButtonColor: '#ef4444'
        });
        submitBtn.innerHTML = '<span>Place Order</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
        submitBtn.disabled = false;
    });
}
</script>

<?php include 'footer.php'; ?>
</body>
</html>