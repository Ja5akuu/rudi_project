<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('user_agent');
		$this->load->model('AuthModel');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function proses_auth()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            # code...
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $attemp = array(
                'username' => $username,
                'password' => $password,
                'browser' => $this->agent->browser(),
                'version' => $this->agent->version(),
                'platform' => $this->agent->platform(),
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'date' => date('Y-m-d H:i:s')
            );

            $this->db->insert('tb_historylogin', $attemp);

            $this->session->set_flashdata('Error', 'Username atau Password Salah !');

            redirect(base_url('auth'));

        } else {
            # code...
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->AuthModel->UserCek($username);
            $user1 = $user->row_array();

            #cek user
            if ($user1) {
                #cek password
                if (password_verify($password, $user1['password'])) {
                    $data = [
                        'id_user' => $user1['id_user'],
                        'username' => $user1['username'],
                        'role' =>  $user1['role'],
                        'status' => $user1['status']
                    ];
                    $this->session->set_userdata($data);
                    redirect(base_url('master/karyawan'));
                } else {

                    $attemp = array(
                        'username' => $username,
                        'password' => $password,
                        'browser' => $this->agent->browser(),
                        'version' => $this->agent->version(),
                        'platform' => $this->agent->platform(),
                        'ip_address' => $_SERVER['REMOTE_ADDR'],
                        'date' => date('Y-m-d H:i:s')
                    );

                    $this->db->insert('tb_historylogin', $attemp);

                    $this->session->set_flashdata('Error', 'Password Salah !');
                    redirect(base_url('auth'));
                }
            } else {

                $attemp = array(
                    'username' => $username,
                    'password' => $password,
                    'browser' => $this->agent->browser(),
                    'version' => $this->agent->version(),
                    'platform' => $this->agent->platform(),
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'date' => date('Y-m-d H:i:s')
                );

                $this->db->insert('tb_historylogin', $attemp);

                $this->session->set_flashdata('Error', 'User Belum Terdaftar !');
                redirect(base_url('auth'));
            }
        }
	}

	 public function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }

    public function Change_password()
    {
        $this->load->view('Template/header');
        $this->load->view('Template/navbar');
        $this->load->view('Template/sidebar');
        $this->load->view('change_password');
        $this->load->view('Template/footer');
    }

    #update
    public function UpdatePassword()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            # code...
            $this->session->set_flashdata('Error', 'Please Check Your Input');
            redirect(base_url('Login/Change_password'));
        } else {
            # code...
            $id = $this->input->post('id');
            $password = $this->input->post('password');

            $data = array(
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            $where1 = array(
                'id_user' => $id
            );

            $this->AuthModel->updatePassword($where1, $data, 'tb_user');
            redirect(base_url('Home/Home'));
        }
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth/Auth.php */