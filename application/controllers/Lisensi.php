<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lisensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('username') == '') {
            # code...
			redirect('auth');
		}
		$this->load->model('ModelLisensi');
		$this->load->model('ModelKaryawan');
		$this->load->model('ModelDept');
		$this->load->helper('file');
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $this->input->post('kodecheksit');
		$config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
        	return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());
        // die;
        return "default.jpg";
    }

    public function index()
    {

    	$data['View'] = $this->ModelLisensi->ViewLisensiAll()->result();
    	$data['title'] = 'Lisensi Karyawan';
    	$data['subtitle'] = 'Lisensi Karyawan';

    	$this->render_template->main('Lisensi/content',$data);

    }

    public function add()
    {

    	$data['trainer'] = $this->ModelLisensi->ViewTrainings()->result();
    	$data['dept'] = $this->ModelDept->ViewDept()->result();

    	$data['title'] = 'Lisensi Karyawan';
    	$data['subtitle'] = 'Lisensi Karyawan';
    	$this->render_template->main('Lisensi/add',$data);
    }

    #create
    public function create()
    {
    	$trainer = $this->input->post('trainer');
    	$nama_trainer =$this->input->post('nama_trainer');
    	$nik = $this->input->post('nik');
    	$dept = $this->input->post('dept');
    	$expdate = $this->input->post('expdate');

    	$data = array(
    		'trainer' => $trainer, 
    		'nama_trainer' =>$nama_trainer , 
    		'nik' =>$nik , 
    		'dept' =>$dept ,
    		'expdate' =>$expdate 
    	);

			if($data){ // Jika Berhasil Insert
				$this->ModelLisensi->save($data, 'tb_lisensi');
				$this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
				redirect(base_url('Lisensi'));
			}else{ // Jika Tidak Berhasil Insert
				$this->session->set_flashdata('error', 'Data  gagal di Simpan!');
				redirect(base_url('Lisensi'));
			}
		}

     #edit
		public function edit($id)
		{

			$where = $id;

			$data['Traininig'] = $this->ModelLisensi->ViewLisensi($where)->result();

			$data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
			$data['dept'] = $this->ModelDept->ViewDept()->result();

			$data['title'] = 'Lisensi Karyawan';
			$data['subtitle'] = 'Lisensi Karyawan';

			$this->render_template->main('Lisensi/edit',$data);
		}

      #edit
		public function view($id)
		{
			$where = $id;

			$data['Traininig'] = $this->ModelLisensi->ViewLisensi($where)->result();
			$data['Traininig1'] = $this->ModelLisensi->ViewLisensi1($where)->result();
			$data['title'] = 'Lisensi Karyawan';
			$data['subtitle'] = 'Lisensi Karyawan';

			$this->render_template->main('Lisensi/view',$data);
		}

     #update
		public function update()
		{
			$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
			$this->form_validation->set_rules('dept', 'Dept', 'trim|required');
         // $this->form_validation->set_rules('joindate', 'Joindate', 'trim|required');
         // $this->form_validation->set_rules('closedate', 'Closedate', 'trim|required');
         // $this->form_validation->set_rules('Lisensike', 'Lisensike', 'trim|required');


			if ($this->form_validation->run() == false) {
             # code...
				$this->session->set_flashdata('Error','Please Check Your Input');
				redirect(base_url('Lisensi'));
			} else {
             # code..
				$id = $this->input->post('id');
				$nik = $this->input->post('nik');
				$dept =$this->input->post('dept');
				$namatrainer = $this->input->post('namatrainer');
				$trainer = $this->input->post('trainer');
				$Lisensidate = $this->input->post('Lisensidate');
				$totalwaktu = $this->input->post('totalwaktu');

				$data = array(
					'nik' => $nik, 
					'dept' =>$dept , 
					'nama_trainer' =>$namatrainer , 
					'trainer' =>$trainer ,
					'Lisensi_date' =>$Lisensidate ,
					'total_waktu' => $totalwaktu
				);


				$where1 = array(
					'id' => $id ,
				);

				$jumlahData = count($_FILES['gambar']['name']);

			// if (!empty($_FILES['gambar']['name'])) {
			// 	# code...
			// 	echo "data tidak ksosnm";
			// } else {
			// 	# code...
			// 		echo "data  ksosnm";
			// }


				if ($jumlahData > 0) {

					$datafile = $this->ModelLisensi->UserFile($nik);

					if ($datafile->num_rows() > 0) {
						foreach ($datafile->result() as $row)
						{
							for ($i=0; $i < $datafile->num_rows() ; $i++) 
							{ 
	            		# code...
								$namafile = $row->file1;
								$pathfile ='./assets/upload/'.$namafile.'';
								unlink($pathfile) ;
							}
						}
					}

		# code...
			// Lakukan Perulangan dengan maksimal ulang Jumlah File yang dipilih
					for ($i=0; $i < $jumlahData ; $i++):

				// Inisialisasi Nama,Tipe,Dll.
						$_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
						$_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
						$_FILES['file']['size']     = $_FILES['gambar']['size'][$i];

				// Konfigurasi Upload
						$config['upload_path']          = './assets/upload/';
						$config['allowed_types']        = 'gif|jpg|png|pdf';

				// Memanggil Library Upload dan Setting Konfigurasi
						$this->load->library('upload', $config);
						$this->upload->initialize($config);

				if($this->upload->do_upload('file')){ // Jika Berhasil Upload

					$fileData = $this->upload->data(); // Lakukan Upload Data

					// Membuat Variable untuk dimasukkan ke Database
					$uploadData[$i]['nik'] = $nik;
					$uploadData[$i]['file1'] = $fileData['file_name']; 
				}else{
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect(base_url('Lisensi'));
				}

			endfor; // Penutup For

			if($uploadData !== null){ // Jika Berhasil Upload
				//delete data
				$where2 = array(
					'nik' => $nik ,
				);

				$this->ModelLisensi->delete($where2,'tb_Lisensifile');
				// Insert ke Database 
				$insert = $this->ModelLisensi->upload($uploadData);
				
				if($insert){ // Jika Berhasil Insert

					$this->ModelLisensi->update($where1,$data,'tb_Lisensi');
					$this->session->set_flashdata('Succes','Data Updated !');

					redirect(base_url('Lisensi'));
				}else{ // Jika Tidak Berhasil Insert
					$this->session->set_flashdata('error', 'Data  gagal di Simpan!');
					redirect(base_url('Lisensi'));
				}


			}

		} else {
		# code...
		}


	}
}

     #delete
public function delete($id)
{
	$where = array('id'=>$id);
	$this->ModelLisensi->delete($where,'tb_Lisensi');
	$this->session->set_flashdata('Succes','Data Delete !');
	redirect(base_url('Lisensi'));
}

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */
