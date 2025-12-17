<?php
class BaseController {
    protected $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    protected function loadView($view, $data = []) {
        extract($data);
        include APPPATH . 'views/' . $view . '.php';
    }
    
    protected function loadModel($model) {
        include_once APPPATH . 'models/' . $model . '.php';
        return new $model($this->db);
    }
}
?>