<?php
include_once 'models/KhuyenMaiClient.php';
class PromotionController
{
    
    public $KhuyenMaiClient;
    public function __construct()
    {
        $this->KhuyenMaiClient = new KhuyenMaiClient();
        
    }
    public function index()

    {
       $KhuyenMaiClient = $this->KhuyenMaiClient->getAll();
        
        include_once './views/home/promotion.php';
    }
   

}
