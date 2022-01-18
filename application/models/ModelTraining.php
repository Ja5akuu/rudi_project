 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class ModelTraining extends CI_Model {


  public function CreateCode(){

    $this->db->select('RIGHT(tb_training.id,5) as id', FALSE);
    $this->db->order_by('id','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_training');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->id) + 1; 
        }
        else{      
             $kode = 1;  
        }
    $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
    $kodetampil = "TR".$batas;
    return $kodetampil;  
  }

    public function UserFile($nik)
    {
        $this->db->select('*');
        $this->db->from('tb_trainingfile');
        $this->db->where('kode', $nik);
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
        $this->db->select('*');
        $this->db->from('tb_training');
        // $this->db->join('tb_kontrak',"tb_training.nik = tb_kontrak.nik");
        // $this->db->join('tb_karyawan',"tb_training.nik = tb_karyawan.nik");
        $str = $this->db->get();
        return $str;
    }

     #edit
    public function ViewTraining($where)
    {
       $this->db->select('*');
       $this->db->from('tb_training');
       // $this->db->join('tb_kontrak',"tb_training.nik = tb_kontrak.nik");
       // $this->db->join('tb_karyawan',"tb_training.nik = tb_karyawan.nik");
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

   function get_karyawan_id($id)
   {
    $this->db->select('*');
    $this->db->from('tb_karyawan');
    $this->db->where('nik', $id);
    $str = $this->db->get()->result();

    return $str;
}



}

/* End of file ModelGedung.php */
/* Location: ./application/models/ModelGedung.php */
