<?php
 class tokosepatu extends CI_Controller
 {
    public function index()
    {
        $this->load->view('view-header-tokosepatu');
        $this->load->view('view-form-tokosepatu');
     }

    public function cetak()
    {
        $this->load->view('view-header-tokosepatu');
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Harus Di isi',
                'min_length' => 'Nama terlalu pendek'
            ]
        
        );
        
        $this->form_validation->set_rules(
            'no',
            'no hp',
            'required|min_length[11]',
            [
                'required' => 'No HP Harus di isi',
                'min_length' => 'No HP terlalu pendek'
            ]
        
        );

        $this->form_validation->set_rules(
            'merk',
            'merk spt',
            'required',
            [
                'required' => 'Merek Harus dipilih',
            ]
        
        );

        $this->form_validation->set_rules(
            'ukuran',
            'ukuran Spt',
            'required',
            [
                'required' => 'Ukuran Harus dipilih',
            ]
        
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-tokosepatu');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
            ];

            if ($this->input->post('merk') == 'Nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'Adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'Kickers') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'Eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'Bucherri') {
                $data['harga'] = 400000;
            }


            $this->load->view('view-data-tokosepatu' , $data);
            $this->load->view('view-footer-tokosepatu');
        }
    }
}