<?php

class Home_model extends CI_Model{

    public function getBannerArtikel()
    {
        $this->db->select('*');
        $this->db->from('banner_artikel');
        $this->db->where(array('status' => 'on'));
        $this->db->order_by('banner_id','random');
        $this->db->limit(2);

        return $this->db->get()->result_array();
    }

    public function getArtikelData()
    {
        $this->db->select('artikel.*, kategori.kategori');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori_id = kategori.kategori_id');
        $this->db->where(array('artikel.status' => 'on'));
        $this->db->order_by('artikel.artikel_id','random');
        $this->db->limit(3);

        return $this->db->get()->result_array();
    }

    public function getArtikelTrendData()
    {
        $this->db->select('artikel.*, kategori.kategori');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori_id = kategori.kategori_id');
        $this->db->where(array('artikel.artikel_id' => 10));
        return $this->db->get()->row_array();
    }

    public function getArtikelTrendsData()
    {
        $this->db->select('artikel.*, kategori.kategori');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori_id = kategori.kategori_id');
        $this->db->or_where(array('artikel.artikel_id' => 9));
        return $this->db->get()->row_array();
    }

    public function getBannerPromosi()
    {
        $this->db->select('*');
        $this->db->from('banner_promosi');
        $this->db->where(array('status' => 'on'));
        $this->db->order_by('banner_id','random');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function getPromosiData()
    {
        return $this->db->get_where('toko', array('status' => 'on'))->result_array();
    }
    public function getArtikelView($id)
    {
        $this->db->select('artikel.*, kategori.kategori');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori_id = kategori.kategori_id');
        $this->db->where(array('artikel.artikel_id' => $id));

        return $this->db->get()->row_array();
    }

    public function getShopRec()
    {
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->where(array('status' => 'on'));
        $this->db->order_by('toko_id','random');
        $this->db->limit(3);
        return $this->db->get()->result_array();
    }

    public function getRekomendasiTokoData()
    {
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->where(array('status' => 'on'));
        $this->db->order_by('toko_id','random');
        $this->db->limit(8);
        return $this->db->get()->result_array();
    }

    public function uploadComment($id)
    {
        $data = [
            "artikel_id" => $id,
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "message" => $this->input->post('message', true),            
        ];
        $this->db->insert('komen', $data); 
    }

    public function getKomenData($id)
    {
        return $this->db->get_where('komen', array('artikel_id'=>$id))->result_array();
    }

    public function uploadGambarShop()
    {
        $config['upload_path'] = './assets/img/shop'; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $config['max_size'] = '2048'; 
        $config['remove_space'] = TRUE; 
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('gambar')) { 
            $return = array('result' => 'success', 'file' => $this->upload->data(),'error' => ''); 
            return $return; 
        } else { 
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors()); 
            return $return; 
        } 
    }

    public function kirimDataShop($upload)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "level" => 'reguler',
            "link" => $this->input->post('link', true),
            "gambar" => $upload['file']['file_name'],        
        ];
        $this->db->insert('toko', $data);
    }
}