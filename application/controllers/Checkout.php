<?php
require_once APPPATH . 'controllers/BaseController.php';

class Checkout extends BaseController {

    public function __construct($database) {
        parent::__construct($database);
    }

    public function submit() {
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $city = $_POST['address'] ?? '';
        $state = $_POST['payment'] ?? '';
        $zip = $_POST['phone'] ?? '';
        $paymentMethod = $_POST['payment'] ?? '';
        $cartData = $_POST['cartData'] ?? '';

        if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($address) || empty($paymentMethod) || empty($cartData)) {
            echo json_encode(['success' => false, 'message' => 'All fields are required']);
            return;
        }

        $cart = json_decode($cartData, true);
        if (empty($cart)) {
            echo json_encode(['success' => false, 'message' => 'Cart is empty']);
            return;
        }

        // Generate order number
        $orderNumber = 'ORD-' . date('Ymd') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);

        // Calculate totals
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = 100;
        $total = $subtotal + $shipping;

        // Insert order
        $stmt = $this->db->prepare("INSERT INTO orders (order_number, first_name, last_name, email, phone, address, city, state, zip_code, payment_method, subtotal, shipping, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssddd", $orderNumber, $firstName, $lastName, $email, $phone, $address, $address, $paymentMethod, $phone, $paymentMethod, $subtotal, $shipping, $total);
        
        if ($stmt->execute()) {
            $orderId = $this->db->insert_id;
            
            // Insert order items
            $itemStmt = $this->db->prepare("INSERT INTO order_items (order_id, product_id, product_name, price, quantity, total) VALUES (?, ?, ?, ?, ?, ?)");
            
            foreach ($cart as $item) {
                $itemTotal = $item['price'] * $item['quantity'];
                $itemStmt->bind_param("iisdid", $orderId, $item['id'], $item['name'], $item['price'], $item['quantity'], $itemTotal);
                $itemStmt->execute();
            }
            
            echo json_encode(['success' => true, 'orderNumber' => $orderNumber]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to place order']);
        }
    }
}
?>