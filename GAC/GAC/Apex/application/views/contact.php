<?php include 'header.php'; ?>

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">Contact Us</h1>
                <p class="lead">Get in touch with us for any questions or support.</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="text-primary mb-4">Contact Information</h3>
                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p class="mb-0">info@apexstore.com</p>
                    </div>
                    <div class="mb-3">
                        <strong>Phone:</strong>
                        <p class="mb-0">+1 (555) 123-4567</p>
                    </div>
                    <div class="mb-3">
                        <strong>Address:</strong>
                        <p class="mb-0">123 Business St, City, State 12345</p>
                    </div>
                    <div class="mt-4">
                        <h5>Business Hours</h5>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-1">Saturday: 10:00 AM - 4:00 PM</p>
                        <p class="mb-0">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="text-primary mb-4">Send us a Message</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>