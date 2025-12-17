<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Apex</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-left">
            <div class="brand-section">
                <div class="brand-logo">
                    <div class="logo-container">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="28" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                            <path d="M20 40L30 20L40 40H35L30 30L25 40H20Z" fill="white"/>
                            <path d="M22 42H38" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="brand-text">
                        <span class="brand-name">APEX</span>
                        <span class="brand-tagline">Fashion Forward</span>
                    </div>
                </div>
                <div class="brand-content">
                    <h1>Welcome to the Future of Fashion</h1>
                    <p>Discover premium collections and exclusive designs crafted for the modern lifestyle. Experience luxury that defines your unique style.</p>
                </div>
                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-content">
                            <span class="feature-title">Secure & Trusted</span>
                            <span class="feature-desc">Bank-level security</span>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="feature-content">
                            <span class="feature-title">Fast Delivery</span>
                            <span class="feature-desc">Express worldwide shipping</span>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-content">
                            <span class="feature-title">Premium Quality</span>
                            <span class="feature-desc">Handcrafted excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="auth-right">
            <div class="auth-form-container">
                <div class="form-header">
                    <div class="tab-switcher">
                        <button class="tab-btn active" data-tab="signin">
                            <i class="fas fa-sign-in-alt"></i>
                            Sign In
                        </button>
                        <button class="tab-btn" data-tab="signup">
                            <i class="fas fa-user-plus"></i>
                            Sign Up
                        </button>
                    </div>
                </div>

                <!-- Sign In Form -->
                <div id="signin-form" class="auth-form active">
                    <div class="form-title">
                        <h2>Welcome Back!</h2>
                        <p>Please sign in to your account</p>
                    </div>
                    
                    <form action="/websites/GAC/Apex/auth/login" method="POST" class="auth-form-content">
                        <div class="input-group">
                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <div class="input-wrapper">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" name="password" placeholder="Password" required>
                                <button type="button" class="toggle-password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                                Remember me
                            </label>
                            <a href="#" class="forgot-link">Forgot password?</a>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span>Sign In</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>

                <!-- Sign Up Form -->
                <div id="signup-form" class="auth-form">
                    <div class="form-title">
                        <h2>Create Account</h2>
                        <p>Join thousands of satisfied customers</p>
                    </div>
                    
                    <form action="/websites/GAC/Apex/auth/register" method="POST" class="auth-form-content">
                        <div class="input-row">
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" name="first_name" placeholder="First name" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-user input-icon"></i>
                                    <input type="text" name="last_name" placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <div class="input-wrapper">
                                <i class="fas fa-phone input-icon"></i>
                                <input type="tel" name="phone" placeholder="Phone number" required>
                            </div>
                        </div>
                        
                        <div class="input-row">
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input type="password" name="password" placeholder="Password" required minlength="8">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input type="password" name="password_confirm" placeholder="Confirm password" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="terms" required>
                                <span class="checkmark"></span>
                                I agree to the <a href="#">Terms & Conditions</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span>Create Account</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; min-height: 100vh; }

.auth-container { display: flex; min-height: 100vh; }

.auth-left { flex: 1; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
.auth-left::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat; }

.brand-section { text-align: center; color: white; z-index: 1; position: relative; max-width: 450px; padding: 2rem; }

.brand-logo { display: flex; flex-direction: column; align-items: center; gap: 12px; margin-bottom: 2rem; }
.logo-container { position: relative; }
.logo-container svg { filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2)); }
.brand-text { text-align: center; }
.brand-name { display: block; font-size: 2.2rem; font-weight: 800; letter-spacing: 3px; margin-bottom: 4px; }
.brand-tagline { font-size: 0.9rem; font-weight: 400; opacity: 0.8; letter-spacing: 1px; text-transform: uppercase; }

.brand-content h1 { font-size: 2.2rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.2; }
.brand-content p { font-size: 1rem; opacity: 0.9; margin-bottom: 2rem; line-height: 1.6; }

.features { display: flex; flex-direction: column; gap: 1rem; text-align: left; }
.feature { display: flex; align-items: center; gap: 12px; padding: 8px 0; }
.feature-icon { width: 48px; height: 48px; background: rgba(255,255,255,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); }
.feature-icon i { font-size: 1.3rem; }
.feature-content { flex: 1; }
.feature-title { display: block; font-size: 1rem; font-weight: 600; margin-bottom: 2px; }
.feature-desc { display: block; font-size: 0.85rem; opacity: 0.7; }

.auth-right { flex: 1; background: white; display: flex; align-items: center; justify-content: center; padding: 2rem; }
.auth-form-container { width: 100%; max-width: 450px; }

.form-header { margin-bottom: 2rem; }
.tab-switcher { display: flex; background: #f8fafc; border-radius: 12px; padding: 4px; }
.tab-btn { flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px 20px; border: none; background: none; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.3s; color: #64748b; font-size: 0.95rem; }
.tab-btn.active { background: white; color: #1e293b; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }

.auth-form { display: none; }
.auth-form.active { display: block; }

.form-title { text-align: center; margin-bottom: 2rem; }
.form-title h2 { font-size: 2rem; font-weight: 700; color: #1e293b; margin-bottom: 0.5rem; }
.form-title p { color: #64748b; font-size: 1rem; }

.auth-form-content { display: flex; flex-direction: column; gap: 1.5rem; }
.input-row { display: flex; gap: 1rem; }
.input-group { flex: 1; }
.input-wrapper { position: relative; }
.input-icon { position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 1rem; z-index: 1; }
.input-wrapper input { width: 100%; padding: 16px 16px 16px 48px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 1rem; transition: all 0.3s; background: #fafbfc; }
.input-wrapper input:focus { outline: none; border-color: #667eea; background: white; box-shadow: 0 0 0 3px rgba(102,126,234,0.1); }
.input-wrapper input::placeholder { color: #9ca3af; }

.toggle-password { position: absolute; right: 16px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #9ca3af; cursor: pointer; padding: 4px; }
.toggle-password:hover { color: #667eea; }

.form-options { display: flex; justify-content: space-between; align-items: center; margin: 0.5rem 0; }
.checkbox-container { display: flex; align-items: center; cursor: pointer; font-size: 0.9rem; color: #64748b; }
.checkbox-container input[type="checkbox"] { margin-right: 8px; accent-color: #667eea; }
.forgot-link { color: #667eea; text-decoration: none; font-size: 0.9rem; font-weight: 500; }
.forgot-link:hover { text-decoration: underline; }

.submit-btn { display: flex; align-items: center; justify-content: center; gap: 12px; width: 100%; padding: 16px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none; border-radius: 12px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; margin-top: 1rem; }
.submit-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(102,126,234,0.4); }
.submit-btn:active { transform: translateY(0); }

.checkbox-container a { color: #667eea; font-weight: 500; }

@media (max-width: 768px) {
    .auth-container { flex-direction: column; min-height: 100vh; }
    .auth-left { flex: none; min-height: 40vh; padding: 1rem 0; }
    .brand-section { max-width: 100%; padding: 1rem; }
    .brand-logo { gap: 8px; margin-bottom: 1.5rem; }
    .logo-container svg { width: 45px; height: 45px; }
    .brand-name { font-size: 1.6rem; }
    .brand-content h1 { font-size: 1.8rem; }
    .brand-content p { font-size: 0.9rem; margin-bottom: 1.5rem; }
    .features { gap: 0.8rem; }
    .feature { padding: 6px 0; }
    .feature-icon { width: 36px; height: 36px; }
    .auth-right { flex: 1; padding: 1rem; }
    .input-row { flex-direction: column; gap: 1.5rem; }
}

@media (max-width: 480px) {
    .auth-left { min-height: 35vh; }
    .brand-section { padding: 0.8rem; }
    .brand-logo { margin-bottom: 1rem; }
    .brand-name { font-size: 1.4rem; }
    .brand-content h1 { font-size: 1.5rem; }
    .brand-content p { margin-bottom: 1rem; font-size: 0.85rem; }
    .features { gap: 0.6rem; }
    .auth-form-container { max-width: 100%; }
    .form-title h2 { font-size: 1.6rem; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching
    const tabBtns = document.querySelectorAll('.tab-btn');
    const authForms = document.querySelectorAll('.auth-form');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.dataset.tab;
            
            tabBtns.forEach(b => b.classList.remove('active'));
            authForms.forEach(f => f.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(targetTab + '-form').classList.add('active');
        });
    });
    
    // Password toggle
    const toggleBtns = document.querySelectorAll('.toggle-password');
    toggleBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    });
    
    // Password confirmation validation
    const confirmInput = document.querySelector('input[name="password_confirm"]');
    if (confirmInput) {
        confirmInput.addEventListener('input', function() {
            const password = document.querySelector('#signup-form input[name="password"]').value;
            const confirm = this.value;
            
            if (password !== confirm) {
                this.setCustomValidity('Passwords do not match');
                this.style.borderColor = '#ef4444';
            } else {
                this.setCustomValidity('');
                this.style.borderColor = '#10b981';
            }
        });
    }
    
    // Form validation feedback
    const inputs = document.querySelectorAll('input[required]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.validity.valid) {
                this.style.borderColor = '#10b981';
            } else {
                this.style.borderColor = '#ef4444';
            }
        });
        
        input.addEventListener('input', function() {
            if (this.style.borderColor === '#ef4444' && this.validity.valid) {
                this.style.borderColor = '#e5e7eb';
            }
        });
    });
});
</script>
</body>
</html>

