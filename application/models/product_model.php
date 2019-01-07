<?php 
class product_model extends CI_Model {
    function list_product(){
        $product = $this->db->query ('select*from t_siswa');
        return $product;
    }
    function save($array)
{
$this->db->insert('t_siswa',$array);
}

}
?>