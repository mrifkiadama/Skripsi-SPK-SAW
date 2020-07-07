<?php
class Alternatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('m_alternatif');
    }
    function index()
    {
        $x['query'] = $this->m_alternatif->get_alternatif_deactive();
        $x['data'] = $this->m_alternatif->get_alternatif_active();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_alternatif',$x);
        $this->load->view('admin/templates/footer');
    }

}