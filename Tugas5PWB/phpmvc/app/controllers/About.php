<?php
class About extends Controller
{

    public function index($nama = 'Tubagus', $pekerjaan='developer')
    {        
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = "About Me";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {      
        $this->view('about/page');
    }
}
?>