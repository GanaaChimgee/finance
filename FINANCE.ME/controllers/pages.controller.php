<?php
class PagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Page();
    }

    // Бүх вэб хуудасны жагсаалтыг үзүүлэх
    public function index()
    {
        // Базаас бүх вэбүүдийг уншиж авна
        $webs = $this->model->getList();

        return (new View([  ' блог',
            'webs' => $webs,
        ], 'pages' . DS . 'index.html'))->render();
    }

    // Ямар нэг вэб хуудсыг контентийг уншиж авч үзүүлэх
    public function view()
    {
        // Тухайн вэб хуудасны мэдээллийг базаас ачаална
        $web = $this->model->getByAlias('jewelery');

        return (new View([  ' хуудас',
            'web' => $web[0],
        ], 'pages' . DS . 'view.html'))->render();
    }

    public function admin_view()
    {
        return (new View([ ' админ хуудас',
            'visit_count' => 'secret#12',
        ], 'pages' . DS . 'admin_view.html'))->render();
    }
}