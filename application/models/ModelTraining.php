 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTraining extends CI_Model {

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
    public function ViewTrainingAll()
    {
        $this->db->select('tb_training.id,tb_karyawan.nik,tb_karyawan.nama,tb_kontrak.dept,tb_training.nama_trainer,tb_training.trainer,tb_training.training_date,tb_training.total_waktu');
        $this->db->from('tb_training');
        $this->db->join('tb_kontrak',"tb_training.nik = tb_kontrak.nik");
		$this->db->join('tb_karyawan',"tb_training.nik = tb_karyawan.nik");
        $str = $this->db->get();
        return $str;
    }

     #edit
     public function ViewTraining($where)
     {
         $this->db->select('tb_training.id,tb_karyawan.nik,tb_karyawan.nama,tb_kontrak.dept,tb_training.nama_trainer,tb_training.trainer,tb_training.training_date,tb_training.total_waktu');
        $this->db->from('tb_training');
        $this->db->join('tb_kontrak',"tb_training.nik = tb_kontrak.nik");
        $this->db->join('tb_karyawan',"tb_training.nik = tb_karyawan.nik");
        $this->db->where('tb_training.id', $where);
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
