<?php 
class News extends CI_Controller 
 {
   public function __construct()
   {

   	// 调用父类的__construct 方法，加载模型
   	parent::__construct();
   	$this->load->model('news_model');
   	$this->load->helper('url_helper');
   }
//展示首页新闻数据
   public function index()
   {
      //$data['news'] = $this->news_model->get_news();
      $data['title']  = 'News Archive';
      $this->load->view('templates/header' , $data);
      $this->load->view('news/index',$data);
      $this->load->view('templates/footer');
   }
public function create()
{
$this->load->helper('form');
$this->load->library('form_validation');
$data['title'] = 'Create a news item';
$this->form_validation->set_rules('title', 'Title', 'required');
$this->form_validation->set_rules('text', 'Text', 'required');
if ($this->form_validation->run() === FALSE)
{
$this->load->view('templates/header', $data);
$this->load->view('news/create');
$this->load->view('templates/footer');
}
else
{
$this->news_model->set_news();
$this->load->view('news/success');
}
}

   public function view($slug = null)
   {

       //$data['news_item']   = $this->news_model->get_news($slug);
             if(empty($data['news_item'])){
         	   show_404();

         }
         $data['title']  = $data['news_item']['title']; 
         //展示数据
         $this->load->view('templates/header',$data);
         $this->load->view('news/view',$data);
         $this->load->view('templates/footer');

   }


}



 