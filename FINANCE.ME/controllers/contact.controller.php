<?php
class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Page();
    }

    // Бүх вэб хуудасны жагсаалтыг үзүүлэх
    public function index()
    {
        
        return (new View([ ' блог',
            ], 'pages' . DS . 'contact.html'))->render();
    }

    
}