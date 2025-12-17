<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Apex</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-mountain"></i>
                    <span>APEX Admin</span>
                </div>
                <h2>Admin Portal Login</h2>
                <p>Please sign in to access the admin dashboard</p>
            </div>

            <?php if (isset($error)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form action="/websites/GAC/Apex/admin/authenticate" method="POST" class="login-form">
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter admin email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter password" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()">
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
                </div>

                <button type="submit" class="login-btn">
                    <span>Sign In</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <div class="demo-credentials">
                <h4>Demo Credentials:</h4>
                <div class="demo-item">
                    <strong>Email:</strong> admin@apex.com
                </div>
                <div class="demo-item">
                    <strong>Password:</strong> admin123
                </div>
            </div>
        </div>
    </div>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }

.login-container { width: 100%; max-width: 450px; padding: 2rem; }
.login-card { background: white; border-radius: 16px; padding: 2.5rem; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }

.login-header { text-align: center; margin-bottom: 2rem; }
.logo { display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 1.5rem; }
.logo i { font-size: 2rem; color: #667eea; }
.logo span { font-size: 1.5rem; font-weight: 700; color: #1e293b; }
.login-header h2 { font-size: 1.8rem; font-weight: 700; color: #1e293b; margin-bottom: 0.5rem; }
.login-header p { color: #64748b; }

.error-message { background: #fee2e2; color: #dc2626; padding: 12px 16px; border-radius: 8px; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 8px; }

.login-form { margin-bottom: 2rem; }
.form-group { margin-bottom: 1.5rem; }
.form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #374151; }
.input-wrapper { position: relative; }
.input-wrapper i { position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #9ca3af; }
.input-wrapper input { width: 100%; padding: 14px 16px 14px 48px; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem; transition: all 0.3s; }
.input-wrapper input:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.1); }
.toggle-password { position: absolute; right: 16px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #9ca3af; cursor: pointer; }

.form-options { margin-bottom: 2rem; }
.checkbox-container { display: flex; align-items: center; cursor: pointer; color: #64748b; }
.checkbox-container input { margin-right: 8px; accent-color: #667eea; }

.login-btn { width: 100%; display: flex; align-items: center; justify-content: center; gap: 12px; padding: 14px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none; border-radius: 10px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; }
.login-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(102,126,234,0.4); }

.demo-credentials { background: #f8fafc; padding: 1.5rem; border-radius: 10px; border: 1px solid #e2e8f0; }
.demo-credentials h4 { color: #1e293b; margin-bottom: 1rem; font-size: 0.9rem; }
.demo-item { margin-bottom: 0.5rem; font-size: 0.85rem; color: #64748b; }
.demo-item strong { color: #374151; }

@media (max-width: 480px) {
    .login-container { padding: 1rem; }
    .login-card { padding: 2rem; }
}
</style>

<script>
function togglePassword() {
    const input = document.querySelector('input[name="password"]');
    const icon = document.querySelector('.toggle-password i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>
</body>
</html>