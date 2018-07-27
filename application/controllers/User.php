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
            'level' => $this->user_model->get_user_level($user_id)

        );



public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('user/login');
    }
    $this->session->set_userdata($user_data);

        // Set message
        $this->session->set_flashdata('user_loggedin', 'You are now logged in');

        redirect('blog');
    } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');

        redirect('user/login');
    }       
}
public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');

        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details( $username );

        // Load dashboard
        $this->load->view('templates/header');
        $this->load->view('users/dashboard', $data);
        $this->load->view('templates/footer');

	if($user_id){
    ...

    $this->session->set_flashdata('user_loggedin', 'Selamat datang, ' . $username );
    redirect('user/dashboard');
	} else {

    $this->session->set_flashdata('login_failed', 'Login invalid');
    redirect('user/login');
	}       


