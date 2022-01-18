<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('username') == '') {
            # code...
			redirect('auth');
		}
		$this->load->model('ModelTraining');
		$this->load->model('ModelKaryawan');
		$this->load->model('ModelDept');
		$this->load->helper('file');
	}


	function get_karyawan()
	{
		$id = $this->input->post('nik');
		$data = $this->ModelTraining->get_karyawan_id($id);

		echo json_encode($data);
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

    	$data['View'] = $this->ModelTraining->ViewTrainingAll()->result();
    	$data['title'] = 'Training Karyawan';
    	$data['subtitle'] = 'Training Karyawan';

    	$this->render_template->main('training/content',$data);

    }

    public function add()
    {

    	$data['kode'] = $this->ModelTraining->CreateCode();
    	$data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
    	$data['dept'] = $this->ModelDept->ViewDept()->result();

    	$data['title'] = 'Training Karyawan';
    	$data['subtitle'] = 'Training Karyawan';
    	$this->render_template->main('training/add',$data);
    }

    #create
    public function create()
    {
    	$id = $this->input->post('id');
    	$nik = $this->input->post('nik');
    	$dept =$this->input->post('dept');
    	$nama =$this->input->post('nama');
    	$namatrainer = $this->input->post('namatrainer');
    	$trainer = $this->input->post('trainer');
    	$trainingdate = $this->input->post('trainingdate');
    	$totalwaktu = $this->input->post('totalwaktu');

    	$data = array(
    		'id'=>$id,
    		'nik' => $nik, 
    		'nama' => $nama, 
    		'dept' =>$dept , 
    		'nama_trainer' =>$namatrainer , 
    		'trainer' =>$trainer ,
    		'training_date' =>$trainingdate ,
    		'total_waktu' => $totalwaktu
    	);


    	$jumlahData = count($_FILES['gambar']['name']);

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
				$uploadData[$i]['kode'] = $id;
				$uploadData[$i]['nik'] = $nik;
				$uploadData[$i]['file1'] = $fileData['file_name']; 
			}
			else{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect(base_url('Training'));
			}

		endfor; // Penutup For

		if($uploadData !== null){ // Jika Berhasil Upload

			// Insert ke Database 
			$insert = $this->ModelTraining->upload($uploadData);
			
			if($insert){ // Jika Berhasil Insert
				$this->ModelTraining->save($data, 'tb_training');
				$this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
				redirect(base_url('Training'));
			}else{ // Jika Tidak Berhasil Insert
				$this->session->set_flashdata('error', 'Data  gagal di Simpan!');
				redirect(base_url('Training'));
			}


		}
	}

     #edit
	public function edit($id)
	{

		$where = $id;

		$data['Traininig'] = $this->ModelTraining->ViewTraining($where)->result();

		$data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
		$data['dept'] = $this->ModelDept->ViewDept()->result();

		$data['title'] = 'Training Karyawan';
		$data['subtitle'] = 'Training Karyawan';

		$this->render_template->main('training/edit',$data);
	}

      #edit
	public function view($id)
	{
		$where = $id;
		
		$data['Traininig'] = $this->ModelTraining->ViewTraining($where)->result();
		$data['Traininig1'] = $this->ModelTraining->ViewTraining1($where)->result();
		$data['title'] = 'Training Karyawan';
		$data['subtitle'] = 'Training Karyawan';

		$this->render_template->main('training/view',$data);
	}

     #update
	public function update()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('dept', 'Dept', 'trim|required');
         // $this->form_validation->set_rules('joindate', 'Joindate', 'trim|required');
         // $this->form_validation->set_rules('closedate', 'Closedate', 'trim|required');
         // $this->form_validation->set_rules('Trainingke', 'Trainingke', 'trim|required');


		if ($this->form_validation->run() == false) {
             # code...
			$this->session->set_flashdata('Error','Please Check Your Input');
			redirect(base_url('Training'));
		} else {
             # code..
			$id = $this->input->post('id');
			$nik = $this->input->post('nik');
			$dept =$this->input->post('dept');
			$nama =$this->input->post('nama');
			$namatrainer = $this->input->post('namatrainer');
			$trainer = $this->input->post('trainer');
			$trainingdate = $this->input->post('trainingdate');
			$totalwaktu = $this->input->post('totalwaktu');

			$data = array(
				'nik' => $nik, 
				'dept' =>$dept , 
				'nama_trainer' =>$namatrainer , 
				'trainer' =>$trainer ,
				'training_date' =>$trainingdate ,
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

				$datafile = $this->ModelTraining->UserFile($nik);

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
					redirect(base_url('Training'));
				}

			endfor; // Penutup For

			if($uploadData !== null){ // Jika Berhasil Upload
				//delete data
				$where2 = array(
					'nik' => $nik ,
				);

				$this->ModelTraining->delete($where2,'tb_trainingfile');
				// Insert ke Database 
				$insert = $this->ModelTraining->upload($uploadData);
				
				if($insert){ // Jika Berhasil Insert

					$this->ModelTraining->update($where1,$data,'tb_training');
					$this->session->set_flashdata('Succes','Data Updated !');

					redirect(base_url('Training'));
				}else{ // Jika Tidak Berhasil Insert
					$this->session->set_flashdata('error', 'Data  gagal di Simpan!');
					redirect(base_url('Training'));
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
	$where1 = array('kode'=>$id);
	$nik = $id;
	$datafile = $this->ModelTraining->UserFile($nik);

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

	$this->ModelTraining->delete($where,'tb_training');
	$this->ModelTraining->delete($where1,'tb_trainingfile');
	$this->session->set_flashdata('Succes','Data Delete !');
	redirect(base_url('Training'));
}

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */
