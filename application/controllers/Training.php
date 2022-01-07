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

		$data['View'] = $this->ModelTraining->ViewTraining()->result();
		$data['title'] = 'Training Karyawan';
		$data['subtitle'] = 'Training Karyawan';
        
        $this->render_template->main('Training/content',$data);
        		
	}

	public function add()
	{

	   $data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
        $data['dept'] = $this->ModelDept->ViewDept()->result();

		$data['title'] = 'Training Karyawan';
        $data['subtitle'] = 'Training Karyawan';
		$this->render_template->main('Training/add',$data);
	}

    #create
	public function create()
	{
		$nik = $this->input->post('nik');
		$dept =$this->input->post('dept');
		$joindate = $this->input->post('joindate');
        $closedate = $this->input->post('closedate');
		$Trainingke = $this->input->post('Trainingke');

		$data = array(
			'nik' => $nik, 
			'dept' =>$dept , 
			'join_date' =>$joindate , 
            'close_date' =>$closedate ,
			'Training_ke' => $Trainingke
		);

		 $this->ModelTraining->save($data, 'tb_Training');

        $this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
   		redirect(base_url('Training'));
	}

     #edit
     public function edit($id)
     {
         $where = array(
             'id' => $id
         );
 
        $data['kode'] = $this->ModelTraining->edit($where,'tb_Training')->result();

        $data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
        $data['dept'] = $this->ModelDept->ViewDept()->result();

		$data['title'] = 'Training Karyawan';
        $data['subtitle'] = 'Training Karyawan';
        
        $this->render_template->main('Training/edit',$data);
     }
 
     #update
     public function update()
     {
         $this->form_validation->set_rules('nik', 'Nik', 'trim|required');
         $this->form_validation->set_rules('dept', 'Dept', 'trim|required');
         $this->form_validation->set_rules('joindate', 'Joindate', 'trim|required');
         $this->form_validation->set_rules('closedate', 'Closedate', 'trim|required');
         $this->form_validation->set_rules('Trainingke', 'Trainingke', 'trim|required');
         
         
         if ($this->form_validation->run() == false) {
             # code...
             $this->session->set_flashdata('Error','Please Check Your Input');
             redirect(base_url('Training'));
         } else {
             # code..
            $id = $this->input->post('id');
            $nik = $this->input->post('nik');
            $dept =$this->input->post('dept');
            $joindate = $this->input->post('joindate');
            $closedate = $this->input->post('closedate');
            $Trainingke = $this->input->post('Trainingke');
     
             $data = array(
                'nik' => $nik, 
                'dept' =>$dept , 
                'join_date' =>$joindate , 
                'close_date' => $closedate, 
                'Training_ke' => $Trainingke
            );
 
 
             $where1 = array(
                 'id' => $id ,
             );
 
             $this->ModelTraining->update($where1,$data,'tb_Training');
             $this->session->set_flashdata('Succes','Data Updated !');
             redirect(base_url('Training'));
         }
     }
 
     #delete
     public function delete($id)
     {
         $where = array('id'=>$id);
         $this->ModelTraining->delete($where,'tb_Training');
         $this->session->set_flashdata('Succes','Data Delete !');
         redirect(base_url('Training'));
     }

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */