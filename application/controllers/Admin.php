<?php
require_once APPPATH . 'controllers/BaseController.php';

class Admin extends BaseController {

    public function __construct($database) {
        parent::__construct($database);
        // Add authentication check here if needed
        // $this->check_admin_auth();
    }

    public function index() {
        $this->dashboard();
    }

    public function dashboard() {
        $data['active_page'] = 'dashboard';
        $this->loadView('admin/dashboard', $data);
    }

    public function products() {
        $data['active_page'] = 'products';
        $this->loadView('admin/products', $data);
    }

    public function orders() {
        $stmt = $this->db->prepare("SELECT o.*, COUNT(oi.id) as item_count FROM orders o LEFT JOIN order_items oi ON o.id = oi.order_id GROUP BY o.id ORDER BY o.created_at DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        $orders = $result->fetch_all(MYSQLI_ASSOC);
        
        $data['active_page'] = 'orders';
        $data['orders'] = $orders;
        $this->loadView('admin/orders', $data);
    }

    public function users() {
        $data['active_page'] = 'users';
        $this->loadView('admin/users', $data);
    }

    public function reports() {
        $data['active_page'] = 'reports';
        $this->loadView('admin/reports', $data);
    }

    public function login() {
        $this->loadView('admin/login');
    }

    public function authenticate() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Demo credentials
        if ($email === 'admin@apex.com' && $password === 'admin123') {
            // Set session or authentication token here
            // $_SESSION['admin_logged_in'] = true;
            header('Location: /websites/GAC/Apex/admin');
            exit;
        } else {
            $data['error'] = 'Invalid email or password';
            $this->loadView('admin/login', $data);
        }
    }

    public function logout() {
        // Clear session or authentication token here
        // session_destroy();
        header('Location: /websites/GAC/Apex/admin/login');
        exit;
    }

    public function messages() {
        $stmt = $this->db->prepare("SELECT * FROM support_messages ORDER BY created_at DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        $messages = $result->fetch_all(MYSQLI_ASSOC);
        
        $data['active_page'] = 'messages';
        $data['messages'] = $messages;
        $this->loadView('admin/messages', $data);
    }
    
    public function deleteOrder() {
        $orderId = $_POST['orderId'] ?? '';
        
        if (empty($orderId)) {
            echo json_encode(['success' => false, 'message' => 'Order ID required']);
            return;
        }
        
        $stmt = $this->db->prepare("DELETE FROM orders WHERE id = ?");
        $stmt->bind_param("i", $orderId);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete order']);
        }
    }
    
    public function editOrder() {
        $orderNumber = $_GET['orderNumber'] ?? '';
        
        if (empty($orderNumber)) {
            header('Location: /websites/GAC/Apex/admin/orders');
            exit;
        }
        
        $stmt = $this->db->prepare("SELECT * FROM orders WHERE order_number = ?");
        $stmt->bind_param("s", $orderNumber);
        $stmt->execute();
        $result = $stmt->get_result();
        $order = $result->fetch_assoc();
        
        $data['active_page'] = 'orders';
        $data['order'] = $order;
        $this->loadView('admin/edit_order', $data);
    }
    
    public function updateOrder() {
        $orderId = $_POST['orderId'] ?? '';
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $paymentMethod = $_POST['paymentMethod'] ?? '';
        $status = $_POST['status'] ?? '';
        $subtotal = $_POST['subtotal'] ?? 0;
        $shipping = $_POST['shipping'] ?? 0;
        
        $total = $subtotal + $shipping;
        
        $stmt = $this->db->prepare("UPDATE orders SET first_name = ?, last_name = ?, email = ?, phone = ?, address = ?, payment_method = ?, status = ?, subtotal = ?, shipping = ?, total = ? WHERE id = ?");
        $stmt->bind_param("sssssssdddi", $firstName, $lastName, $email, $phone, $address, $paymentMethod, $status, $subtotal, $shipping, $total, $orderId);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to update order']);
        }
    }

    private function check_admin_auth() {
        // Add admin authentication logic here
        // if (!$this->session->userdata('admin_logged_in')) {
        //     redirect('admin/login');
        // }
    }
}
?>