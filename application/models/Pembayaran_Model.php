<?php
class Pembayaran_Model extends CI_Model {

 function getDataMahasiswa($dataNim){
  $this->db->select('*');
  $query = $this->db->get_where('mahasiswa', array('nim_mahasiswa' => $dataNim ));
  return $query->result();
 }

 function getInfoPembayaran(){
   $query = $this->db->get('informasi');
   return $query->result();
 }

}
