<?php
class Surveys extends CI_Controller
{

    public function form()
    {

        $this->load->view('surveys/codingdojosurvey');
    }

    public function destroysession()
    {

        $this->session->sess_destroy();
        redirect('');
    }

}
?>