CREATE DATABASE Apex;
USE Apex;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    total_price DECIMAL(10,2),
    status ENUM('pending', 'processing', 'shipped', 'delivered') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Insert admin user (password: admin123)
INSERT INTO users (name, email, password, role) VALUES 
('Admin', 'admin@apex.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

-- Sample products
INSERT INTO products (name, description, price, image) VALUES 
('Venturini Men\'s Formal Oxford', 'Premium leather oxford shoes for business professionals', 2990.00, 'formal-oxford.jpg'),
('Venturini Men\'s Casual Loafer', 'Comfortable leather loafers for everyday wear', 2290.00, 'casual-loafer.jpg'),
('Apex Women\'s High Heel Sandal', 'Elegant high heel sandals for special occasions', 1890.00, 'women-heel.jpg'),
('Sprint Men\'s Running Sneaker', 'Lightweight running shoes with advanced cushioning', 1990.00, 'running-sneaker.jpg'),
('Nino Rossi Women\'s Ballet Flats', 'Classic ballet flats in premium leather', 1590.00, 'ballet-flats.jpg'),
('Moochie Kids Casual Sneaker', 'Colorful and comfortable sneakers for children', 890.00, 'kids-sneaker.jpg'),
('Apex Men\'s Winter Boot', 'Waterproof winter boots with thermal insulation', 3490.00, 'winter-boot.jpg'),
('Venturini Women\'s Ankle Boot', 'Stylish ankle boots with block heel', 2790.00, 'ankle-boot.jpg'),
('Sprint Men\'s Slide Sandal', 'Comfortable slide sandals for casual wear', 1290.00, 'slide-sandal.jpg'),
('Dr. Mauch Women\'s Comfort Pump', 'Orthopedic pumps with arch support', 1990.00, 'comfort-pump.jpg'),
('Apex Men\'s Dress Shoe', 'Classic dress shoes for formal occasions', 3290.00, 'dress-shoe.jpg'),
('Nino Rossi Women\'s Wedge Sandal', 'Comfortable wedge sandals with ankle strap', 2190.00, 'wedge-sandal.jpg'),
('Apex Women\'s Stiletto Heels', 'Glamorous stiletto heels for evening wear', 2590.00, 'women-stiletto.jpg'),
('Venturini Women\'s Loafers', 'Professional women\'s loafers for office wear', 2390.00, 'women-loafers.jpg'),
('Nino Rossi Women\'s Sneakers', 'Trendy women\'s sneakers for casual outings', 1790.00, 'women-sneakers.jpg'),
('Dr. Mauch Women\'s Flats', 'Comfortable women\'s flats with cushioned sole', 1490.00, 'women-flats.jpg'),
('Apex Women\'s Knee High Boots', 'Fashionable knee-high boots for winter', 3190.00, 'women-knee-boots.jpg'),
('Venturini Women\'s Peep Toe Heels', 'Elegant peep toe heels for special events', 2290.00, 'women-peep-toe.jpg');