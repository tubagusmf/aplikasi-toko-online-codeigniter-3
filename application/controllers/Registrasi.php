<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib di isi.']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib di isi.']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password wajib di isi.', 'matches' => 'Password tidak cocok.']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id'    => '', #dikosongkan karena auto incerement
                'nama'  => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2
            );

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Akun Anda Sukses Registrasi, Silahkan Login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('auth/login');
        }
    }
}
