<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if ($this->session->userdata('username') == '') {
            # code...
            redirect('auth');
        }
        $this->load->model('ModelDashboard');
    }



    public function index()
    {

      $data['laki'] = $this->ModelDashboard->CountLaki()->result();
      $data['perempuan'] = $this->ModelDashboard->CountPerempuan()->result();
      $data['closedate'] = $this->ModelDashboard->CountHabisKontrak()->result();
      $data['kontrak'] = $this->ModelDashboard->CountKontrak()->result();
      $data['KontrakKaryawan'] = $this->ModelDashboard->KontrakKaryawan()->result();
      $data['HabisKontrak'] = $this->ModelDashboard->HabisKontrak()->result();
      $this->render_template->main('dashboard/content',$data);

  }

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedungkuncibiru/gedung.php */
