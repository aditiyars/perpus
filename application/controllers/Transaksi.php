<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct(){
	 parent::__construct();
	 	//validasi jika user belum login
		$this->data['CI'] =& get_instance();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Admin');
		$this->load->library(array('cart'));
		if($this->session->userdata('masuk_perpus') != TRUE){
			$url=base_url('login');
			redirect($url);
		}
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
		$this->data['title_web'] = 'Data Pinjam Buku ';
		$this->data['idbo'] = $this->session->userdata('ses_id');
		
		if($this->session->userdata('level') == 'Anggota'){
			$this->data['pinjam'] = $this->db->query("SELECT DISTINCT `pinjam_id`, `anggota_id`, 
				`status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali` 
				FROM tbl_pinjam WHERE status = 'Dipinjam' 
				AND anggota_id = ? ORDER BY pinjam_id DESC", 
				array($this->session->userdata('anggota_id')));
		}else{
			$this->data['pinjam'] = $this->db->query("SELECT DISTINCT `pinjam_id`, `anggota_id`, 
				`status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali` 
				FROM tbl_pinjam WHERE status = 'Dipinjam' ORDER BY pinjam_id DESC");
		}
		
		$this->load->view('header_view',$this->data);
		$this->load->view('sidebar_view',$this->data);
		$this->load->view('pinjam/pinjam_view',$this->data);
		$this->load->view('footer_view',$this->data);
	}

	public function kembali()
	{	
			
	}


	// view pinjam
	public function pinjam()
	{	
		$this->data['nop'] = $this->M_Admin->buat_kode('tbl_pinjam','PJ','id_pinjam','ORDER BY id_pinjam DESC LIMIT 1'); 
		$this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['user'] = $this->M_Admin->get_table('tbl_login');
		$this->data['buku'] =  $this->db->query("SELECT * FROM tbl_buku ORDER BY id_buku DESC");

		$this->data['title_web'] = 'Tambah Pinjam Buku ';

		$this->load->view('header_view',$this->data);
		$this->load->view('sidebar_view',$this->data);
		$this->load->view('pinjam/tambah_view',$this->data);
		$this->load->view('footer_view',$this->data);
	}

	public function detailpinjam()
		{
			
		}

	public function kembalipinjam()
		{
			
		}

	public function prosespinjam()
		{
			
		}

	public function denda()
		{
			
		}

	public function dendaproses()
		{
			
		}


	public function result()
    {		
        
		}

	public function buku()
    {	
		
		}

	public function buku_list()
		{
		
		}

	public function del_cart()
    {
		
    }

	private function exists($id)
		{
				
		}

}
