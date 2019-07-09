<?php

class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }


    public function index(){
        $this->load->view('admin/module/login/login_view');
    }

    // --- Login & logout Admin ---
    public function login()
    { 
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $berhasil = $this->Admin_model->cekLogin($username,$password);
            if($berhasil == 1){
                $this->session->set_userdata(array('status_login'=>'sukses'));
                redirect('admin/kategori');
              }else{
                $data['message'] = "Username atau password salah";
                $this->load->view('admin/module/login/login_view', $data);
              }
          }else{
              $this->load->view('admin/module/login/login_view');
          }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
    // --- End Login & logout Admin ---

    // --- Kategori Menu ---
    public function kategori(){
        $data['kategori'] = $this->Admin_model->getAllKategori();
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/kategori/kategori_view',$data);
        $this->load->view('admin/template/footer');
    }

    public function tambahKategori(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/kategori/tambahKategori_view');
            $this->load->view('admin/template/footer');
        }else{
            $this->Admin_model->kirimDataKategori();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/kategori');
        }
    }

    public function hapusKategori($id)
    {
        $this->Admin_model->hapusDataKategori($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/kategori');
    }

    public function ubahKategori($id)
    {
        $data['ubahKategori'] = $this->Admin_model->getKategoriById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');        

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/kategori/ubahKategori_view',$data);
            $this->load->view('admin/template/footer');
        }else{
            $this->Admin_model->ubahDataKategori();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/kategori');
        }
    }
    // --- End Kategori ---

    // --- Article menu ---
    public function artikel()
    {
        $data['artikel'] = $this->Admin_model->getAllArtikel();
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/artikel/artikel_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambahArtikel()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Artikel', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $data['kategori'] = $this->Admin_model->getDataKategori();

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/artikel/tambahArtikel_view', $data);
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarArtikel();
            if($upload['result'] == 'success'){
                $this->Admin_model->kirimDataArtikel($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/artikel');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/artikel/tambahArtikel_view', $data);
                $this->load->view('admin/template/footer');
            }
        }        
    }

    public function hapusArtikel($id)
    {
        $this->Admin_model->hapusDataArtikel($id);
        $this->session->set_flashdata("flash", "dihapus");
        redirect('admin/artikel');
    }

    public function ubahArtikel($id)
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Artikel', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $data['kategori'] = $this->Admin_model->getDataKategori();
        $data['artikel_id'] = $this->Admin_model->getAllArtikelById($id);

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/artikel/ubahArtikel_view', $data);
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarArtikel();
            if(empty($_FILES["gambar"]["name"])){
                $this->Admin_model->ubahDataArtikel($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/artikel');
            }elseif($upload['result'] == 'success'){
                $this->Admin_model->ubahDataArtikel($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/artikel');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/artikel/ubahArtikel_view', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function detailArtikel($id)
    {
        $data['detail'] = $this->Admin_model->getAllArtikelByID($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/artikel/detailArtikel_view', $data);
        $this->load->view('admin/template/footer');
    }
    // --- End Article ---

    // --- Banner Article Menu ---
    public function banArt(){
        $data['banArt'] = $this->Admin_model->getAllBanArt();
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/banner_article/banArt_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_banArt(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');


        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/banner_article/tambah_banArt_view');
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarBanArt();
            if($upload['result'] == 'success'){
                $this->Admin_model->kirimDataBanArt($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/banArt');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/banner_article/tambah_banArt_view', $data);
                $this->load->view('admin/template/footer');
            }
        }       
    }

    public function hapusBanArt($id)
    {
        $this->Admin_model->hapusDataBanArt($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/banArt');
    }

    public function ubah_banArt($id){
        $this->form_validation->set_rules('nama', 'Nama banner', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $data['ubahBanArt'] = $this->Admin_model->getBanArtById($id);

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/banner_article/ubah_banArt_view', $data);
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarBanArt();
            if(empty($_FILES["gambar"]["name"])){
                $this->Admin_model->ubahDataBanArt($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/banArt');
            }elseif($upload['result'] == 'success'){
                $this->Admin_model->ubahDataBanArt($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/banArt');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/banner_article/ubah_banArt_view', $data);
                $this->load->view('admin/template/footer');
            }
        }       
    }
    // --- End Banner Article Menu ---

    // --- Banner Promotion Menu ---
    public function banPro(){
        $data['banPro'] = $this->Admin_model->getAllBanPro();
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/banner_promotion/banPro_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_banPro(){
        $this->form_validation->set_rules('nama', 'Nama Banner', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/banner_promotion/tambah_banPro_view');
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarBanPro();
            if($upload['result'] == 'success'){
                $this->Admin_model->kirimDataBanPro($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/banPro');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/banner_promotion/tambah_banPro_view', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function hapusBanPro($id)
    {
        $this->Admin_model->hapusDataBanPro($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/banPro');
    }

    public function ubah_banPro($id)
    {
        $this->form_validation->set_rules('nama', 'Nama banner', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $data['banPro_id'] = $this->Admin_model->getBanProById($id);

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/banner_promotion/ubah_banPro_view', $data);
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarBanPro();
            if(empty($_FILES["gambar"]["name"])){
                $this->Admin_model->ubahDataBanPro($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/banPro');
            }elseif($upload['result'] == 'success'){
                $this->Admin_model->ubahDataBanPro($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/banPro');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/banner_promotion/ubah_banPro_view', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }
    // --- End Banner Promotion Menu ---

    // --- Shop Promotion menu ---
    public function shop(){
        $data['shops'] = $this->Admin_model->getAllShop();
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/shop/shop_view', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambahShop(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/shop/tambahShop_view');
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarShop();
            if($upload['result'] == 'success'){
                $this->Admin_model->kirimDataShop($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/shop');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/shop/tambahShop_view', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function hapusShop($id)
    {
        $this->Admin_model->hapusDataShop($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/shop');
    }

    public function ubahShop($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $data['shop_id'] = $this->Admin_model->getShopById($id);

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/template/header');
            $this->load->view('admin/module/shop/ubahShop_view', $data);
            $this->load->view('admin/template/footer');
        }else{
            $upload = $this->Admin_model->uploadGambarShop();
            if(empty($_FILES["gambar"]["name"])){
                $this->Admin_model->ubahDataShop($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/shop');
            }elseif($upload['result'] == 'success'){
                $this->Admin_model->ubahDataShop($upload);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/shop');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('admin/template/header');
                $this->load->view('admin/module/shop/ubahShop_view', $data);
                $this->load->view('admin/template/footer');
            }
        }
    }

    public function searchShop()
    {
        $keyword = $this->input->post('keyword');
        $data['shop'] = $this->Admin_model->searchDataShop($keyword);
        $this->load->view('admin/template/header');
        $this->load->view('admin/module/shop/searchShop_view', $data);
        $this->load->view('admin/template/footer');
    }
    // --- End Shop Promotion ---
}