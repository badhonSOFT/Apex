<?php include 'header.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">Customer Support</h1>
                <p class="lead text-muted">We're here to help! Get assistance with your orders, products, and any questions you may have</p>
            </div>
        </div>
    </div>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully. We'll get back to you within 24 hours.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle"></i> 
            <?php if ($_GET['error'] == 'missing_fields'): ?>
                Please fill in all required fields.
            <?php else: ?>
                There was an error sending your message. Please try again.
            <?php endif; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Quick Help Options -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-center mb-4">How can we help you?</h3>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 help-card">
                <div class="card-body text-center p-4">
                    <div class="help-icon mb-3">📦</div>
                    <h5>Order Status</h5>
                    <p class="text-muted">Track your order and delivery status</p>
                    <button class="btn btn-outline-primary">Track Order</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 help-card">
                <div class="card-body text-center p-4">
                    <div class="help-icon mb-3">🔄</div>
                    <h5>Returns & Exchanges</h5>
                    <p class="text-muted">Easy returns within 30 days</p>
                    <button class="btn btn-outline-primary">Start Return</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 help-card">
                <div class="card-body text-center p-4">
                    <div class="help-icon mb-3">👟</div>
                    <h5>Size Guide</h5>
                    <p class="text-muted">Find your perfect fit</p>
                    <button class="btn btn-outline-primary">View Guide</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 help-card">
                <div class="card-body text-center p-4">
                    <div class="help-icon mb-3">💳</div>
                    <h5>Payment Help</h5>
                    <p class="text-muted">Payment methods and billing</p>
                    <button class="btn btn-outline-primary">Get Help</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h4 class="text-center mb-4">📞 Contact Our Support Team</h4>
                    <form action="/websites/GAC/Apex/support/submit" method="POST" onsubmit="submitSupportForm(event)">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Order Number (if applicable)</label>
                                <input type="text" name="order_number" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject *</label>
                            <select name="subject" class="form-select" required>
                                <option value="">Select a topic</option>
                                <option>Order Inquiry</option>
                                <option>Product Question</option>
                                <option>Return/Exchange</option>
                                <option>Payment Issue</option>
                                <option>Size/Fit Question</option>
                                <option>Website Issue</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Please describe your question or issue in detail..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="row mb-5">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="contact-icon mb-3">📞</div>
                    <h5>Phone Support</h5>
                    <p class="text-muted">+880 1700-APEX (2739)</p>
                    <p class="small text-muted">Mon-Fri: 9AM-8PM<br>Sat-Sun: 10AM-6PM</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="contact-icon mb-3">📧</div>
                    <h5>Email Support</h5>
                    <p class="text-muted">support@apexstore.com</p>
                    <p class="small text-muted">Response within 24 hours</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="contact-icon mb-3">💬</div>
                    <h5>Live Chat</h5>
                    <p class="text-muted">Chat with our team</p>
                    <button class="btn btn-success">Start Chat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mb-5">❓ Frequently Asked Questions</h3>
        </div>
        <div class="col-lg-10 mx-auto">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            🚚 How long does shipping take?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2"><strong>Standard Shipping:</strong> 3-5 business days (Free on orders over ৳2,000)</p>
                            <p class="mb-2"><strong>Express Shipping:</strong> 1-2 business days (৳200 fee)</p>
                            <p class="mb-0"><strong>Same Day Delivery:</strong> Available in Dhaka for orders placed before 2 PM (৳500 fee)</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            🔄 What is your return policy?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2">We offer <strong>30-day returns</strong> for unworn items in original packaging.</p>
                            <p class="mb-2"><strong>Requirements:</strong> Original receipt, unworn condition, original box</p>
                            <p class="mb-2"><strong>Process:</strong> Free returns via our stores or ৳100 pickup fee for home collection</p>
                            <p class="mb-0"><strong>Refund:</strong> 3-5 business days after we receive your return</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            🌍 Do you offer international shipping?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2">Currently we ship <strong>within Bangladesh only</strong> to the following areas:</p>
                            <p class="mb-2">✅ Dhaka, Chittagong, Sylhet, Rajshahi, Khulna, Barisal, Rangpur, Mymensingh</p>
                            <p class="mb-0">🚀 <strong>International shipping</strong> to India, Pakistan, and Middle East coming soon in 2024!</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            👟 How do I find my size?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2"><strong>Online:</strong> Use our detailed size guide with foot measurement instructions</p>
                            <p class="mb-2"><strong>In-Store:</strong> Visit any Apex store for professional fitting assistance</p>
                            <p class="mb-2"><strong>Size Exchange:</strong> Free size exchange within 7 days if the fit isn't right</p>
                            <p class="mb-0"><strong>Tip:</strong> Measure your feet in the evening when they're slightly larger</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            💳 What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2"><strong>Online:</strong> bKash, Nagad, Rocket, Visa, MasterCard, American Express</p>
                            <p class="mb-2"><strong>Cash on Delivery:</strong> Available for orders under ৳5,000</p>
                            <p class="mb-2"><strong>EMI:</strong> 0% interest EMI available on credit cards (3, 6, 12 months)</p>
                            <p class="mb-0"><strong>Gift Cards:</strong> Apex gift vouchers accepted online and in-store</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            🛡️ Is my personal information secure?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="mb-2">Yes! We use <strong>256-bit SSL encryption</strong> to protect your data</p>
                            <p class="mb-2"><strong>Payment Security:</strong> We never store your card details on our servers</p>
                            <p class="mb-2"><strong>Privacy:</strong> Your information is never shared with third parties</p>
                            <p class="mb-0"><strong>Compliance:</strong> We follow international data protection standards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.help-card, .contact-icon {
    transition: transform 0.3s ease;
}
.help-card:hover {
    transform: translateY(-5px);
}
.help-icon, .contact-icon {
    font-size: 3rem;
}
.accordion-item {
    border-radius: 15px !important;
    overflow: hidden;
    margin-bottom: 1rem;
}
.accordion-button {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: none;
    padding: 1.5rem;
    font-size: 1.1rem;
    border-radius: 15px !important;
    box-shadow: none;
}
.accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
    color: white;
    box-shadow: 0 5px 15px rgba(0,123,255,0.3);
}
.accordion-button:focus {
    box-shadow: none;
    border: none;
}
.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23333'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transition: transform 0.3s ease;
}
.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transform: rotate(180deg);
}
.accordion-body {
    background: white;
    padding: 2rem;
    border-top: 1px solid #e9ecef;
}
.accordion-body p {
    line-height: 1.6;
}
.accordion-body strong {
    color: #007bff;
}
</style>

<script>
function submitSupportForm(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    fetch('/websites/GAC/Apex/support/submit', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Message Sent!',
                text: 'Thank you for contacting us. We\'ll get back to you within 24 hours.',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3b82f6'
            }).then(() => {
                form.reset();
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: data.message,
                icon: 'error',
                confirmButtonColor: '#ef4444'
            });
        }
        
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    })
    .catch(error => {
        Swal.fire({
            title: 'Error!',
            text: 'There was an error sending your message. Please try again.',
            icon: 'error',
            confirmButtonColor: '#ef4444'
        });
        
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
}
</script>

<?php include 'footer.php'; ?>