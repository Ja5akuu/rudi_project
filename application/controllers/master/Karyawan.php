<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if ($this->session->userdata('username') == '') {
            # code...
            redirect('auth');
        }
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

      $data['View'] = $this->ModelKaryawan->ViewKaryawan()->result();
      $data['title'] = 'MASTER KARYAWAN';
      $data['subtitle'] = 'MASTER KARYAWAN';

      $this->render_template->main('master/karyawan/content',$data);

  }

  public function add()
  {

     $data['dept'] = $this->ModelDept->ViewDept()->result();

     $data['title'] = 'MASTER KARYAWAN';
     $data['subtitle'] = 'MASTER KARYAWAN';
     $this->render_template->main('master/karyawan/add',$data);
 }

    #create
 public function create()
 {
  $nik = $this->input->post('nik');
  $nama =$this->input->post('nama');
  $jkel = $this->input->post('jkel');
  $hp = $this->input->post('hp');
  $alamat = $this->input->post('alamat');
  $dept = $this->input->post('dept');
  $joindate = $this->input->post('joindate');
  $closedate = $this->input->post('closedate');
  $kontrakke = $this->input->post('kontrakke');

  $data = array(
   'nik' => $nik, 
   'nama' =>$nama , 
   'jkel' =>$jkel , 
   'hp' => $hp, 
   'alamat' => $alamat,
   'dept' => $dept,
   'join_date' => $joindate,
   'close_date' => $closedate,
   'kontrak_ke' => $kontrakke,
);

  $this->ModelKaryawan->save($data, 'tb_karyawan');

  $this->session->set_flashdata('Succes', 'Data  Berhasil di Simpan!');
  redirect(base_url('master/karyawan'));
}

     #edit
public function edit($id)
{
 $where = array(
     'id' => $id
 );
 $data['dept'] = $this->ModelDept->ViewDept()->result();
 $data['kode'] = $this->ModelKaryawan->edit($where,'tb_karyawan')->result();
 $data['title'] = 'MASTER KARYAWAN';
 $data['subtitle'] = 'MASTER KARYAWAN';

 $this->render_template->main('master/karyawan/edit',$data);
}

     #update
public function update()
{
 $this->form_validation->set_rules('nik', 'Nik', 'trim|required');
 $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
 $this->form_validation->set_rules('jkel', 'Jkel', 'trim|required');
 $this->form_validation->set_rules('hp', 'Hp', 'trim|required');
 $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');


 if ($this->form_validation->run() == false) {
             # code...
     $this->session->set_flashdata('Error','Please Check Your Input');
     redirect(base_url('master/karyawan'));
 } else {
             # code..
     $id = $this->input->post('id');
     $nik = $this->input->post('nik');
     $nama =$this->input->post('nama');
     $jkel = $this->input->post('jkel');
     $hp = $this->input->post('hp');
     $alamat = $this->input->post('alamat');
     $dept = $this->input->post('dept');
     $joindate = $this->input->post('joindate');
     $closedate = $this->input->post('closedate');
     $kontrakke = $this->input->post('kontrakke');

     $data = array(
       'nik' => $nik, 
       'nama' =>$nama , 
       'jkel' =>$jkel , 
       'hp' => $hp, 
       'alamat' => $alamat,
       'dept' => $dept,
       'join_date' => $joindate,
       'close_date' => $closedate,
       'kontrak_ke' => $kontrakke,
   );


     $where1 = array(
         'id' => $id ,
     );

     $this->ModelKaryawan->update($where1,$data,'tb_karyawan');
     $this->session->set_flashdata('Succes','Data Updated !');
     redirect(base_url('master/karyawan'));
 }
}

     #delete
public function delete($id)
{
 $where = array('id'=>$id);
 $this->ModelKaryawan->delete($where,'tb_karyawan');
 $this->session->set_flashdata('Succes','Data Delete !');
 redirect(base_url('master/karyawan'));
}

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */