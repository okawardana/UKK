<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct()
    {
            parent::__construct();
            // $this->cek_login();
    }

    public function cek_login()
    {
        if (!empty($_SESSION['user'])) {
            $this->Leveling();
        } else {
            // redirect('/Auth/Login');
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
        redirect('/Auth/Login');

    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function login()
	{
		$this->load->view('Auth/login');
        
	}

    public function cekusers()
    {
        // var_dump($_POST);die;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $msg = 'Username atau Password Salah !!';

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $login = $this->db->get('users')->result();
        if (empty($login)) {
            redirect('/Auth/login');
        }
        $_SESSION['user'] = $login[0];
        $this->Leveling();
        var_dump($_SESSION);
    }

    public function Leveling()
    {
        if ($_SESSION['user']->level == "tamu") {
            redirect('/Tamu/Home');
        }
        if ($_SESSION['user']->level == "resepsionis") {
            redirect('/Resepsionis/Home');
        }
        if ($_SESSION['user']->level == "admin") {
            redirect('/Admin/Kamar');
        }
    }

    public function Logout()
    {
        
        $this->session->sess_destroy();
        redirect('Auth/Login');
        
    }

}
