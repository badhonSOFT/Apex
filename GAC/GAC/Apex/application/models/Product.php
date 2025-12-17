<?php
class Product {
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    public function getAll() {
        try {
            $result = $this->db->query("SELECT * FROM products");
            if ($result) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return [];
        } catch (Exception $e) {
            error_log("Product getAll error: " . $e->getMessage());
            return [];
        }
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    
    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $data['name'], $data['price'], $data['description']);
        return $stmt->execute();
    }
}
?>