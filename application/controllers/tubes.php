<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tubes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index($value="loginadmin")
	{
		$this->load->view('admin/'.$value);
	}
	
	public function loginn(){
		
		$this->load->view('admin/loginadmin');
	}

	public function utama(){
		
		$this->load->view('admin/menuutama');
	}

		public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->m_admin->cek_login($username,$password)->num_rows();
		// $data = $this->m_admin->cek_login($username,$password)->row();

		if ($cek > 0) {
			
			redirect('tubes/utama');
		}
	}

		// else{
		// 	echo "data tidak ada";
		// }


		public function aksi_regis(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$dataa = array(
					'nama'=>$nama,
					'email'=>$email,
					'username'=>$username,
					'password'=>$password
				);
		$this->m_admin->input_data($dataa,'data');
		redirect('tubes/loginn');
		}
		
		 public function cek()
		 {
		$norekam = $this->input->post('norekam');
		$nama = $this->input->post('nama');
		$noidentitas = $this->input->post('noidentitas');
		$jenkel = $this->input->post('jenkel');
		$tgllahir = $this->input->post('tgllahir');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');

		if ($this->input->post('id')) {
			$this->input->post('id');

			$dataa1 = array(
					'norekam'=>$norekam,
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'alamat'=>$alamat,
					'nohp'=>$nohp
				);
			$this->model->editpas($id,$dataa1);
			redirect('tubes/riset','refresh');
		}
		else{
			$dataa1 = array(
					'norekam'=>$norekam,
					'nama'=>$nama,
					'noidentitas'=>$noidentitas,
					'jenkel'=>$jenkel,
					'tgllahir'=>$tgllahir,
					'alamat'=>$alamat,
					'nohp'=>$nohp
				);
			$this->m_admin->input_data1($dataa1,'datapasien');
			redirect('tubes/riset');
		}
		
		 }

		public function index1()
        {
            $dataa1['dataa1'] = $this->m_admin->tampil_data()->result();
            $this->load->view('admin/tampilpasien',$dataa1);
        }
        public function editpasien($id_pas)
        {
        	$where = array('id_pas'=>$id_pas);
        	$data['dataa1'] = $this->m_admin->edit_data($where,'datapasien')->result();
        	$this->load->view('admin/v_edit',$data);
        }
        function update(){
        	$id_pas = $this->input->post('id_pas');
        	$norekam = $this->input->post('norekam');
        	$nama = $this->input->post('nama');
        	$noidentitas = $this->input->post('noidentitas');
        	$jenkel = $this->input->post('jenkel');
        	$tgllahir = $this->input->post('tgllahir');
        	$alamat = $this->input->post('alamat');
        	$nohp = $this->input->post('nohp');

        	$data = array(
        		'norekam' => $norekam,
        		'nama' => $nama,
        		'noidentitas' => $noidentitas,
        		'jenkel' => $jenkel,
        		'tgllahir' => $tgllahir,
        		'alamat' => $alamat,
        		'nohp' => $nohp
        	);

        	$where = $id_pas;
        	$this->m_admin->editpasien($where,$data);
        	redirect('tubes/index1');
        }

		public function inkam(){
		
		$this->load->view('admin/inputkamar');
		}

		public function cek1()
		 {

		$nama = $this->input->post('nama');
		$tglmasuk = $this->input->post('tglmasuk');
		$tglkeluar = $this->input->post('tglkeluar');
		$lamainap = $this->input->post('lamainap');
		$ruang = $this->input->post('ruang');
		$kelas = $this->input->post('kelas');
		$tindakan = $this->input->post('tindakan');

		$dataa2 = array(
					'nama'=>$nama,
					'tglmasuk'=>$tglmasuk,
					'tglkeluar'=>$tglkeluar,
					'lamainap'=>$lamainap,
					'ruang'=>$ruang,
					'kelas'=>$kelas,
					'tindakan'=>$tindakan
				);

		$this->m_admin->input_data2($dataa2,'datainkam');
		redirect('tubes/utama');
		
		 }

		 public function riset()
		 {
		 	$this->load->view('admin/menuutama');
		 }

		 public function search()
		 {
		 	# code...
		 	$key = $this->input->post('key');
		 	$datapasien['results'] = $this->m_admin->search($key);
		 	$this->load->view('tampilpasien',$datapasien);
		 }
		 function hapus($id_pas){
		 	$where = array('id_pas'=>$id_pas);
		 	$this->m_admin->hapus_data($where,'datapasien');
		 	redirect('tubes/index1');
		 }

}


/* End of file tubes.php */
/* Location: ./application/controllers/tubes.php */
?>