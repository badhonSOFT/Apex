<?php
include_once 'BaseController.php';

class Products extends BaseController {
    public function index() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'Products',
            'products' => $products
        ];
        $this->loadView('products', $data);
    }
    
    public function view($id) {
        $productModel = $this->loadModel('Product');
        $product = $productModel->getById($id);
        
        $data = [
            'title' => 'Product Details',
            'product' => $product
        ];
        $this->loadView('product_detail', $data);
    }
    
    public function category($category = null) {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => ucfirst($category) . ' Products - Apex Store',
            'products' => $products,
            'category' => $category
        ];
        $this->loadView('products', $data);
    }
    
    public function awCollection() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'AW Collection - Apex Store',
            'products' => $products
        ];
        $this->loadView('aw_collection', $data);
    }
    
    public function women() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'Women\'s Collection - Apex Store',
            'products' => $products
        ];
        $this->loadView('women', $data);
    }
    
    public function men() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'Men\'s Collection - Apex Store',
            'products' => $products
        ];
        $this->loadView('men', $data);
    }
    
    public function kids() {
        $productModel = $this->loadModel('Product');
        $products = $productModel->getAll();
        
        $data = [
            'title' => 'Kids\' Collection - Apex Store',
            'products' => $products
        ];
        $this->loadView('kids', $data);
    }
}
?>