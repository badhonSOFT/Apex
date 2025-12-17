<?php
require_once APPPATH . 'controllers/BaseController.php';

class Support extends BaseController {

    public function __construct($database) {
        parent::__construct($database);
    }

    public function submit() {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $order_number = $_POST['order_number'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['message'] ?? '';

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo json_encode(['success' => false, 'message' => 'All required fields must be filled']);
            exit;
        }

        $stmt = $this->db->prepare("INSERT INTO support_messages (name, email, phone, order_number, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $order_number, $subject, $message);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error']);
        }
        exit;
    }
}
?>