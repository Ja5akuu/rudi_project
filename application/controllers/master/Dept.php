<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if ($this->session->userdata('username') == '') {
            # code...
            redirect('auth');
        }
		$this->load->model('ModelDept');
	}

	public function index()
	{

		$data['View'] = $this->ModelDept->ViewDept()->result();
		$data['title'] = 'MASTER Dept';
		$data['subtitle'] = 'MASTER Dept';
        
        $this->render_template->main('master/dept/content',$data);
        		
	}

	public function add()
	{

		// $data['kode_barang'] = $this->ModelDept->CreateCode();

		$data['title'] = 'MASTER Dept';
		$data['subtitle'] = 'MASTER Dept';
		$this->render_template->main('master/dept/add',$data);
	}

    #create
	public function create()
	{
		$dept = $this->input->post('dept');

		$data = array(
			'dept' => $dept
		);

		 $this->ModelDept->save($data, 'tb_dept');

        $this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
   		redirect(base_url('master/Dept'));
	}

     #edit
     public function edit($id)
     {
         $where = array(
             'id' => $id
         );
 
        $data['kode'] = $this->ModelDept->edit($where,'tb_dept')->result();
		$data['title'] = 'MASTER Dept';
		$data['subtitle'] = 'MASTER Dept';
        
        $this->render_template->main('master/dept/edit',$data);
     }
 
     #update
     public function update()
     {
         $this->form_validation->set_rules('dept', 'Dept', 'trim|required');
         
         
         if ($this->form_validation->run() == false) {
             # code...
             $this->session->set_flashdata('Error','Please Check Your Input');
             redirect(base_url('master/Dept'));
         } else {
             # code..
             $id = $this->input->post('id');
             $dept = $this->input->post('dept');
 
             $data = array(
                'dept' => $dept
            );
 
 
             $where1 = array(
                 'id' => $id ,
             );
 
             $this->ModelDept->update($where1,$data,'tb_dept');
             $this->session->set_flashdata('Succes','Data Updated !');
             redirect(base_url('master/dept'));
         }
     }
 
     #delete
     public function delete($id)
     {
         $where = array('id'=>$id);
         $this->ModelDept->delete($where,'tb_dept');
         $this->session->set_flashdata('Succes','Data Delete !');
         redirect(base_url('master/Dept'));
     }

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */
