 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTraining extends CI_Model {

	public function CreateCode(){

    $this->db->select('RIGHT(tb_cheksit.code_cheksit,5) as kode_barang', FALSE);
    $this->db->order_by('kode_barang','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_cheksit');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_barang) + 1; 
        }
        else{      
             $kode = 1;  
        }
    $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
    $kodetampil = "BR".$batas;
    return $kodetampil;  
	}

	 #create
    public function save($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

       #read
    public function ViewTraining()
    {
        $this->db->select('tb_kontrak.id,tb_karyawan.nik,tb_karyawan.nama,tb_kontrak.dept,tb_kontrak.join_date,tb_kontrak.close_date,tb_kontrak.kontrak_ke');
        $this->db->from('tb_kontrak');
        $this->db->join('tb_karyawan',"tb_kontrak.nik = tb_karyawan.nik");
        $str = $this->db->get();
        return $str;
    }

     #edit
     public function edit($where,$tabel)
     {
         return $this->db->get_where($tabel,$where);
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