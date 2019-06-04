<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');

    }

    /**
     * This function used to load the first screen of the user
     */
     public function index()
   	{
   		$this->load->view('register');
   	}



    /**
     * This function is used to add new user to the system
     */
    public function RegisterUser()
    {
      $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
      $this->form_validation->set_rules('contactno', 'Mobile No', 'trim|required');

      $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

      if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('register');
      }
      else
      {
        $firstName 	= $this->security->xss_clean($this->input->post('fname'));
        $email 	= $this->security->xss_clean($this->input->post('email'));
        $password 	= $this->security->xss_clean($this->input->post('password'));
        $phone 		= $this->security->xss_clean($this->input->post('contactno'));

        $options = array("cost"=>4);
        // print_r($options);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);

    // print_r($hashPassword);
        $insertData = array(
                  'email'=>$email,
                  'password'=>$hashPassword,
                  'name'=>$firstName,
                  'mobile'=>$phone
                  );

        $checkDuplicate = $this->user_model->checkDuplicate($email);

        if($checkDuplicate == 0)
        {
          $insertUser = $this->user_model->insertUser($insertData);

          if($insertUser)
          {
            redirect('login');
          }
          else
          {
            $data['errorMsg'] = 'Unable to save user. Please try again';
            $this->load->view('register',$data);
          }
        }
        else
        {
          $data['errorMsg'] = 'User email alreary exists';
          $this->load->view('register',$data);
        }
      }
    }

    function logout()
  	{
    $this->session->unset_userdata('isLoggedIn');
    $this->session->unset_userdata('name');
  		$this->load->view('login');
  	}


}

?>
