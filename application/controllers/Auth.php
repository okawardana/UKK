<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
           // $this->Ceklogin()
    }
    public function Ceklogin()
    {
        if(empty($_SESSION['user'])) {
            $this->Level();
        }else{
            // redirect('/Auth/login');
        }
    }
    public function Register()
	{
		$this->load->view('Auth/register');
	}
    public function addusers()
	{
        $data = $_POST;
        $data += array(
        'level' => 'tamu'
        );
    
        // var_dump($data);die;
        $this->db->insert('users', $data);
        
        redirect('/Auth/login');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
	{
		$this->load->view('Auth/Login');
	}
    public function cekusers()
    {
        // var_dump($_POST);die;
		$username=$_POST['username'];
		$password=$_POST['pass'];

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$login=$this->db->get('users')->result();
		if (empty($login)) {
			redirect('/Auth/login');
		}
		$_SESSION['login']=$login[0];

        $this->Level();
		}
    public function Level()
    {
    if($_SESSION['login']->level=="tamu"){
	    redirect('/Tamu/Beranda');
    }
    if($_SESSION['login']->level=="resepsionis"){
	    redirect('/Resepsionis/dafpes');
    }
    if($_SESSION['login']->level=="admin"){
	    redirect('/Admin/kamar');
    }
  }

  public function logout()
  {
        $this->session->sess_destroy();
        redirect('Tamu/Beranda');
  }

}