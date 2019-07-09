<?php

class Admin_model extends CI_Model{

    //--- Cek Login Admin ---
    public function cekLogin($username, $password)
    {
        $periksa = $this->db->get_where('admin',array('username'=>$username,'password'=> $password));
        if($periksa->num_rows()>0){
          return 1;
        }else{
          return 0;
        }
    }
    //--- End Cek Login Admin ---

    //--- Kategori Model Databases ---
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', array('kategori_id' => $id))->row_array();
    }

    public function kirimDataKategori()
    {
        $data = [
            "kategori" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true)
        ];
        $this->db->insert('kategori', $data);
    }

    public function hapusDataKategori($id)
    {
        $this->db->delete('kategori', array('kategori_id' => $id));
    }

    public function ubahDataKategori()
    { 
        $data = [
            "kategori" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true),
        ];
        $this->db->where('kategori_id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }
    //--- End Kategori Model Databases ---

    //--- Artikel Model Databases ---
    public function getAllArtikel()
    {
        $this->db->select('artikel.*, kategori.kategori');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori_id = kategori.kategori_id');
        return $this->db->get()->result_array();
    }

     public function kirimDataArtikel($upload)
     {
        $data = [
            "kategori_id" => $this->input->post('kategori', true),
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "gambar" => $upload['file']['file_name'],
            "status" => $this->input->post('status', true),            
        ];
        $this->db->insert('artikel', $data);
    }

    public function uploadGambarArtikel()
    { 
        $config['upload_path'] = './assets/img/artikel'; 
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

    public function getDataKategori()
    {
        return $this->db->get_where('kategori', array('status' => 'on'))->result_array();
    }

    public function hapusDataArtikel($id)
    {
        $_image = $this->db->get_where('artikel',['artikel_id' => $id])->row();
        unlink("assets/img/banner_artikel/".$_image->gambar);
        $this->db->delete('artikel', array('artikel_id' => $id));
    }

    public function getAllArtikelById($id)
    {
        return $this->db->get_where('artikel', array('artikel_id' => $id))->row_array();
    }

    public function ubahDataArtikel($upload)
    {
        $id = $this->input->post('id');
        $_image = $this->db->get_where('artikel',['artikel_id' => $id])->row();
        
        $data['kategori_id'] = $this->input->post('kategori',true);
        $data['judul'] = $this->input->post('judul', true);
        $data['isi'] = $this->input->post('isi', true);
        $data['status'] = $this->input->post('status', true);
        if(!empty($_FILES['gambar']['name'])){
            $data['gambar'] = $upload['file']['file_name'];
            $query = $this->db->update('artikel', $data, array('artikel_id' => $id));
            if($query){
                unlink("assets/img/artikel/".$_image->gambar);
            }
        }else{
            $data['gambar'] = $_image->gambar;
            $query = $this->db->update('artikel', $data, array('artikel_id' => $id));
        } 
    }
    //--- End Artikel Model Databases ---

    //--- Banner Artikel Model Databases ---
    public function getAllBanArt()
    {
        return $this->db->get('banner_artikel')->result_array();
    }

    public function uploadGambarBanArt()
    {
        $config['upload_path'] = './assets/img/banner_artikel'; 
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

    public function kirimDataBanArt($upload)
    {
        $data = [
            "banner" => $this->input->post('nama', true),
            "link" => $this->input->post('link', true),
            "gambar" => $upload['file']['file_name'],
            "status" => $this->input->post('status', true),            
        ];
        $this->db->insert('banner_artikel', $data);
    }

    public function hapusDataBanArt($id)
    {
        $_image = $this->db->get_where('banner_artikel',['banner_id' => $id])->row();
        unlink("assets/img/banner_artikel/".$_image->gambar);
        $this->db->delete('banner_artikel', array('banner_id' => $id));
        
    }

    public function getBanArtById($id)
    {
        return $this->db->get_where('banner_artikel', array('banner_id' => $id))->row_array();
    }

    public function ubahDataBanArt($upload)
    {
        $id = $this->input->post('id');
        $_image = $this->db->get_where('banner_artikel',['banner_id' => $id])->row();
        
        $data['banner'] = $this->input->post('nama', true);
        $data['link'] = $this->input->post('link', true);
        $data['status'] = $this->input->post('status', true);
        if(!empty($_FILES['gambar']['name'])){
            $data['gambar'] = $upload['file']['file_name'];
            $query = $this->db->update('banner_artikel', $data, array('banner_id' => $id));
            if($query){
                unlink("assets/img/banner_artikel/".$_image->gambar);
            }
        }else{
            $data['gambar'] = $_image->gambar;
            $query = $this->db->update('banner_artikel', $data, array('banner_id' => $id));
        }        
    }
    //--- End Banner Artikel Model Databases ---

    //--- Banner Promotion Model Databases ---
    public function getAllBanPro()
    {
        return $this->db->get('banner_promosi')->result_array();
    }

    public function uploadGambarBanPro()
    {
        $config['upload_path'] = './assets/img/banner_promosi'; 
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

    public function kirimDataBanPro($upload)
    {
        $data = [
            "banner" => $this->input->post('nama', true),
            "link" => $this->input->post('link', true),
            "gambar" => $upload['file']['file_name'],
            "status" => $this->input->post('status', true),            
        ];
        $this->db->insert('banner_promosi', $data);
    }
    public function hapusDataBanPro($id)
    {
        $_image = $this->db->get_where('banner_promosi',['banner_id' => $id])->row();
        unlink("assets/img/banner_promosi/".$_image->gambar);
        $this->db->delete('banner_promosi', array('banner_id' => $id));
    }

    public function getBanProById($id)
    {
        return $this->db->get_where('banner_promosi', array('banner_id' => $id))->row_array();
    }

    public function ubahDataBanPro($upload)
    {
        $id = $this->input->post('id');
        $_image = $this->db->get_where('banner_promosi',['banner_id' => $id])->row();
        
        $data['banner'] = $this->input->post('nama', true);
        $data['link'] = $this->input->post('link', true);
        $data['status'] = $this->input->post('status', true);
        if(!empty($_FILES['gambar']['name'])){
            $data['gambar'] = $upload['file']['file_name'];
            $query = $this->db->update('banner_promosi', $data, array('banner_id' => $id));
            if($query){
                unlink("assets/img/banner_promotion/".$_image->gambar);
            }
        }else{
            $data['gambar'] = $_image->gambar;
            $query = $this->db->update('banner_promosi', $data, array('banner_id' => $id));
        }        
    }
    //--- End Banner Promotion Model Databases ---

    //--- Shop Model Databases ---
    public function getAllShop()
    {
        return $this->db->get('toko')->result_array();
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
            "level" => $this->input->post('level', true),
            "link" => $this->input->post('link', true),
            "gambar" => $upload['file']['file_name'],
            "status" => $this->input->post('status', true),            
        ];
        $this->db->insert('toko', $data);
    }

    public function hapusDataShop($id)
    {
        $_image = $this->db->get_where('toko',['toko_id' => $id])->row();
        unlink("assets/img/shop/".$_image->gambar);
        $this->db->delete('toko', array('toko_id' => $id));
    }

    public function getShopById($id)
    {
        return $this->db->get_where('toko', array('toko_id' => $id))->row_array();
    }

    public function ubahDataShop($upload)
    {
        $id = $this->input->post('id');
        $_image = $this->db->get_where('toko',['toko_id' => $id])->row();
        
        $data['nama'] = $this->input->post('nama', true);
        $data['level'] = $this->input->post('level', true);
        $data['link'] = $this->input->post('link', true);
        $data['status'] = $this->input->post('status', true);
        if(!empty($_FILES['gambar']['name'])){
            $data['gambar'] = $upload['file']['file_name'];
            $query = $this->db->update('toko', $data, array('toko_id' => $id));
            if($query){
                unlink("assets/img/shop/".$_image->gambar);
            }
        }else{
            $data['gambar'] = $_image->gambar;
            $query = $this->db->update('toko', $data, array('toko_id' => $id));
        }
    }

    public function searchDataShop($keyword)
    {
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->like('nama', $keyword);
        $this->db->or_like('level', $keyword);
        $this->db->or_like('status', $keyword);

        return $this->db->get()->result_array();
    }
    //--- End Shop Model Databases ---

}



