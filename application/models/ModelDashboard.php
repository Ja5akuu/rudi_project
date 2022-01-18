 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDashboard extends CI_Model {

     #read
    public function CountLaki()
    {
        $this->db->select('count(jkel) as id');
        $this->db->from('tb_karyawan');
        $this->db->where('jkel','Laki-laki');
        $str = $this->db->get();
        return $str;
    }

     #read
    public function CountPerempuan()
    {
        $this->db->select('count(jkel) as id');
        $this->db->from('tb_karyawan');
        $this->db->where('jkel','Perempuan');
        $str = $this->db->get();
        return $str;
    }

       #read
    public function CountHabisKontrak()
    {
        $this->db->select('count(nik) as id');
        $this->db->from('tb_karyawan');
        $this->db->where('datediff(close_date,now()) <= ','7');
        $str = $this->db->get();
        return $str;
    }

         #read
    public function CountKontrak()
    {
        $this->db->select('count(nik) as id');
        $this->db->from('tb_karyawan');
        $this->db->where('datediff(close_date,now()) >= ','7');
        $str = $this->db->get();
        return $str;
    }

      public function KontrakKaryawan()
    {
        $this->db->select('*');
        $this->db->from('tb_karyawan');
        $this->db->where('datediff(close_date,now()) >= ','7');
        $str = $this->db->get();
        return $str;
    }

           #read
    public function HabisKontrak()
    {
        $this->db->select('*');
        $this->db->from('tb_karyawan');
        $this->db->where('datediff(close_date,now()) <= ','7');
        $str = $this->db->get();
        return $str;
    }

  
}

/* End of file ModelGedung.php */
/* Location: ./application/models/ModelGedung.php */