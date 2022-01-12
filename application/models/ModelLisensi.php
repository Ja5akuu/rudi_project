 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLisensi extends CI_Model {

	public function UserFile($nik)
    {
        $this->db->select('*');
        $this->db->from('tb_trainingfile');
        $this->db->where('nik', $nik);
        $str = $this->db->get();
        return $str ;
    }
	 #create
    public function save($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

	public function upload($data = array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        return $this->db->insert_batch('tb_trainingfile',$data);
    }

       #read
    public function ViewLisensiAll()
    {
        $this->db->select('tb_lisensi.id,tb_karyawan.nik,tb_karyawan.nama   ,tb_lisensi.dept,tb_lisensi.nama_trainer,tb_lisensi.trainer,tb_lisensi.expdate');
        $this->db->from('tb_lisensi');
		$this->db->join('tb_karyawan',"tb_lisensi.nik = tb_karyawan.nik");
        $str = $this->db->get();
        return $str;
    }

     public function ViewTrainings()
     {
         $this->db->select('*');
        $this->db->from('tb_training');
        $this->db->join('tb_karyawan',"tb_training.nik = tb_karyawan.nik");
        $str = $this->db->get();
        return $str;
     }

     #edit
     public function ViewLisensi($where)
     {
         $this->db->select('*');
        $this->db->from('tb_lisensi');
        $this->db->where('id', $where);
        $str = $this->db->get();
        return $str;
     }

       public function ViewTraining1($where)
     {
         $this->db->select('tb_training.id,tb_trainingfile.file1');
        $this->db->from('tb_training');
        $this->db->join('tb_trainingfile', 'tb_training.nik = tb_trainingfile.nik');
        $this->db->where('tb_training.id', $where);
        $str = $this->db->get();
        return $str;
     }
 
     #update
     public function update($where1,$data,$tabel)
     {
         $this->db->where($where1);
         $this->db->update($tabel, $data);
         return TRUE;
     }
 
     #delete
     public function delete($where,$tabel)
     {
         $this->db->where($where);
         $this->db->delete($tabel);
     }

}

/* End of file ModelGedung.php */
/* Location: ./application/models/ModelGedung.php */
