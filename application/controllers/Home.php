<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['bannerArt'] = $this->Home_model->getBannerArtikel();
        $data['bannerPro'] = $this->Home_model->getBannerPromosi();
        $data['artikel'] = $this->Home_model->getArtikelData();
        $data['artikel_trend'] = $this->Home_model->getArtikelTrendData();
        $data['artikel_trends'] = $this->Home_model->getArtikelTrendsData();
        $data['rekShop'] = $this->Home_model->getRekomendasiTokoData();
        $this->load->view('home/template/header');
        $this->load->view('home/user/userArtikel_view', $data);
        $this->load->view('home/template/footer');
    }

    public function view_artikel($id)
    {
        $data['artikel'] = $this->Home_model->getArtikelView($id);
        $data['artikelPost'] = $this->Home_model->getArtikelData();
        $data['shopRec'] = $this->Home_model->getShopRec();
        $data['komen'] = $this->Home_model->getKomenData($id);
        $this->load->view('home/template/header');
        $this->load->view('home/user/detailArtikel_view',$data);
        $this->load->view('home/template/footer');
    }

    public function comment()
    {
        $id = $this->input->post('id');
        $this->Home_model->uploadComment($id);
        redirect('home/view_artikel/'.$id);
    }

    public function daftarToko()
    {
        $this->load->view('home/template/header');
        $this->load->view('home/user/daftarToko_view');
        $this->load->view('home/template/footer');
    }

    public function tambahToko()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('home/template/header');
            $this->load->view('home/user/daftarToko_view');
            $this->load->view('home/template/footer');
        }else{
            $upload = $this->Home_model->uploadGambarShop();
            if($upload['result'] == 'success'){
                $this->Home_model->kirimDataShop($upload);
                redirect('home');
            }else{
                $data['message'] = $upload['error'];
                $this->load->view('home/template/header');
                $this->load->view('home/user/daftarToko_view', $data);
                $this->load->view('home/template/footer');
            }
        }
    }
}

    