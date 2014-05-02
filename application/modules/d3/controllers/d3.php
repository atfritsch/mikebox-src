<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D3 extends MY_Controller {

    /**
     * Example page
     */
    public function index()
    {        
        $this->load->view('index');
    }
    
    public function data() {
        $data = $this->db->get('test')->result();
        echo json_encode($data);
    }
}

/* End of file todo.php */
/* Location: ./application/modules/todo/controllers/todo.php */