<?php
include_once 'BaseController.php';

class Home extends BaseController {
    public function index() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'Apex Store - Your Shopping Destination',
            'message' => 'Welcome to Apex Store',
            'products' => array_slice($products, 0, 6) // Show only first 6 products
        ];
        $this->loadView('home', $data);
    }
    
    public function about() {
        $data = ['title' => 'About Us - Apex Store'];
        $this->loadView('about', $data);
    }
    
    public function contact() {
        $data = ['title' => 'Contact Us - Apex Store'];
        $this->loadView('contact', $data);
    }
    
    public function giftVoucher() {
        $data = ['title' => 'Gift Voucher - Apex Store'];
        $this->loadView('gift_voucher', $data);
    }
    
    public function findStore() {
        $data = ['title' => 'Find a Store - Apex Store'];
        $this->loadView('find_store', $data);
    }
    
    public function support() {
        $data = ['title' => 'Support - Apex Store'];
        $this->loadView('support', $data);
    }
    
    public function trackOrder() {
        $data = ['title' => 'Track Your Order - Apex Store'];
        $this->loadView('track_order', $data);
    }
    
    public function corporate() {
        $data = ['title' => 'Corporate - Apex Store'];
        $this->loadView('corporate', $data);
    }
    
    public function signIn() {
        $data = ['title' => 'Sign In - Apex Store'];
        $this->loadView('sign_in', $data);
    }
    
    public function checkout() {
        $data = ['title' => 'Checkout - Apex Store'];
        $this->loadView('checkout', $data);
    }
}
?>