<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

 	public function UserCek($username)
    {
        $this->db->select('*');
        $this->db->from('tb_auth');
        $this->db->where('username', $username);
        $str = $this->db->get();
        return $str ;
    }

    #edit
    public function EditPassword($where,$tabel)
    {
        return $this->db->get_where($tabel,$where);
    }

    #update
    public function updatePassword($where1,$data,$tabel)
    {
        $this->db->where($where1);
        $this->db->update($tabel, $data);
        return TRUE;
    }
	

}

/* End of file AuthModel.php */
/* Location: ./application/models/AuthModel.php */