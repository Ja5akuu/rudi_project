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

			$data['Lisensi'] = $this->ModelLisensi->ViewLisensi($where)->result();

			$data['trainer'] = $this->ModelLisensi->ViewTrainings()->result();
			$data['dept'] = $this->ModelDept->ViewDept()->result();

			$data['title'] = 'Lisensi Karyawan';
			$data['subtitle'] = 'Lisensi Karyawan';

			$this->render_template->main('Lisensi/edit',$data);
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


				$where1 = array(
					'id' => $id ,
				);

				
					$this->ModelLisensi->update($where1,$data,'tb_Lisensi');
					$this->session->set_flashdata('Succes','Data Updated !');

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
