<?php

class usermode extends CI_Model{

    public function hitungJumlahuser()
    {   
        $query = $this->db->query('SELECT * FROM user');
        $total=$query->num_rows();
        return $total;
    }
    public function getData(){
        
	    	$this->db->from('user');
	    	$this->db->select('*');
	    	$qry = $this->db->get('');
	    	return $qry->result();
	    }
        public function getDataId($id){
        
	    	$this->db->where('id_user',$id);
	    	$this->db->select('id_user,username,level,active');
	    	$this->db->from('user');
	    	$qry = $this->db->get('');
	    	return $qry->row_array();
	    }

    }
?>