<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if ($this->session->userdata('username') == '') {
            # code...
            redirect('auth');
        }
		$this->load->model('ModelKontrak');
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

		$data['View'] = $this->ModelKontrak->ViewKontrak()->result();
		$data['title'] = 'Kontrak Karyawan';
		$data['subtitle'] = 'Kontrak Karyawan';
        
        $this->render_template->main('Kontrak/content',$data);
        		
	}

	public function add()
	{

	   $data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
        $data['dept'] = $this->ModelDept->ViewDept()->result();

		$data['title'] = 'Kontrak Karyawan';
        $data['subtitle'] = 'Kontrak Karyawan';
		$this->render_template->main('Kontrak/add',$data);
	}

    #create
	public function create()
	{
		$nik = $this->input->post('nik');
		$dept =$this->input->post('dept');
		$joindate = $this->input->post('joindate');
        $closedate = $this->input->post('closedate');
		$kontrakke = $this->input->post('kontrakke');

		$data = array(
			'nik' => $nik, 
			'dept' =>$dept , 
			'join_date' =>$joindate , 
            'close_date' =>$closedate ,
			'kontrak_ke' => $kontrakke
		);

		 $this->ModelKontrak->save($data, 'tb_kontrak');

        $this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
   		redirect(base_url('Kontrak'));
	}

     #edit
     public function edit($id)
     {
         $where = array(
             'id' => $id
         );
 
        $data['kode'] = $this->ModelKontrak->edit($where,'tb_kontrak')->result();

        $data['karyawan'] = $this->ModelKaryawan->ViewKaryawan()->result();
        $data['dept'] = $this->ModelDept->ViewDept()->result();

		$data['title'] = 'Kontrak Karyawan';
        $data['subtitle'] = 'Kontrak Karyawan';
        
        $this->render_template->main('kontrak/edit',$data);
     }
 
     #update
     public function update()
     {
         $this->form_validation->set_rules('nik', 'Nik', 'trim|required');
         $this->form_validation->set_rules('dept', 'Dept', 'trim|required');
         $this->form_validation->set_rules('joindate', 'Joindate', 'trim|required');
         $this->form_validation->set_rules('closedate', 'Closedate', 'trim|required');
         $this->form_validation->set_rules('kontrakke', 'Kontrakke', 'trim|required');
         
         
         if ($this->form_validation->run() == false) {
             # code...
             $this->session->set_flashdata('Error','Please Check Your Input');
             redirect(base_url('Kontrak'));
         } else {
             # code..
            $id = $this->input->post('id');
            $nik = $this->input->post('nik');
            $dept =$this->input->post('dept');
            $joindate = $this->input->post('joindate');
            $closedate = $this->input->post('closedate');
            $kontrakke = $this->input->post('kontrakke');
     
             $data = array(
                'nik' => $nik, 
                'dept' =>$dept , 
                'join_date' =>$joindate , 
                'close_date' => $closedate, 
                'kontrak_ke' => $kontrakke
            );
 
 
             $where1 = array(
                 'id' => $id ,
             );
 
             $this->ModelKontrak->update($where1,$data,'tb_Kontrak');
             $this->session->set_flashdata('Succes','Data Updated !');
             redirect(base_url('Kontrak'));
         }
     }
 
     #delete
     public function delete($id)
     {
         $where = array('id'=>$id);
         $this->ModelKontrak->delete($where,'tb_Kontrak');
         $this->session->set_flashdata('Succes','Data Delete !');
         redirect(base_url('Kontrak'));
     }

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */