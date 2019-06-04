<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
      $isLoggedIn = $this->session->userdata('isLoggedIn');

      if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
      {
          $this->load->view('login');
      }
      else
      {
        $user['name'] = $this->session->userdata('name');
      $this->load->view('includes/header',$user);
      $this->load->view('dashboard');
      $this->load->view('includes/footer');
       }
    }
}
?>
