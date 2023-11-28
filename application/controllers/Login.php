<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	 parent::__construct();
	 	//validasi jika user belum login
        $this->data['CI'] =& get_instance();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_login');
        
	 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('masuk_perpus') == TRUE && $this->session->userdata('verifikasi') == TRUE){
			$this->session->set_flashdata('pesan','<div id="notifikasi"><div class="alert alert-warning">
					<p> Anda telah login !</p>
				</div></div>');
			$url=base_url('dashboard');
			redirect($url);
		}
		
		$this->data['title_web'] = 'Login | Sistem Informasi Perpustakaan';
		$this->load->view('login_view',$this->data);
	}

    public function auth()
    {
        $user = htmlspecialchars($this->input->post('user',TRUE),ENT_QUOTES);
        $pass = htmlspecialchars($this->input->post('pass',TRUE),ENT_QUOTES);
        // auth
        $proses_login = $this->db->query("SELECT * FROM tbl_login WHERE user='$user' AND pass = md5('$pass')");
        $row = $proses_login->num_rows();
        if($row > 0)
        {
            $hasil_login = $proses_login->row_array();

						if($hasil_login['verifikasi']) {
							// create session
							$this->session->set_userdata('masuk_perpus',TRUE);
							$this->session->set_userdata('level',$hasil_login['level']);
							$this->session->set_userdata('ses_id',$hasil_login['id_login']);
							$this->session->set_userdata('anggota_id',$hasil_login['anggota_id']);
							$this->session->set_userdata('verifikasi',$hasil_login['verifikasi']);
	
							echo '<script>window.location="'.base_url().'dashboard";</script>';
						}
						else {
							$this->session->set_flashdata('pesan','<div id="notifikasi"><div class="alert alert-danger">
									<p>Akun anda belum diverifikasi !</p>
								</div></div>');
							redirect(base_url("/login"));
						}

        }else{
			$this->session->set_flashdata('pesan','<div id="notifikasi"><div class="alert alert-danger">
					<p> Periksa kembali username & password anda !</p>
				</div></div>');
			redirect(base_url("/login"));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo '<script>window.location="'.base_url().'";</script>';
    }
}
