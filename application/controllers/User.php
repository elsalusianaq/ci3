<?php
 public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        } else {
username = $this->input->post('username');
    		$password = md5($this->input->post('password'));
    		$user_id = $this->user_model->login($username, $password);

   		 if($user_id){
        $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true
        );



public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('user/login');
    }
