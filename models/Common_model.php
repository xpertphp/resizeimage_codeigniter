<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    public	function __construct() {

        parent::__construct();
        $this->load->database();

    }


    public function insert($table,$product_data)
    {
        if($this->db->insert($table,$product_data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


   public function update($table,$where_array,$update)
    {

        $this->db->where($where_array);

        if($this->db->update($table,$update))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function delete_data($table,$where)
    {

        if($this->db->delete($table,$where))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
?>