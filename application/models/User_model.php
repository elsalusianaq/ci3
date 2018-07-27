<?php
   public function login($username, $password){
       $this->db->where('username', $username);
       $this->db->where('password', $password);

       $result = $this->db->get('users');


       if($result->num_rows() == 1){
           return $result->row(0)->user_id;
       } else {
           return false;
       }
   }
   public function get_user_level($user_id) {
       $this->db->select('fk_level_id');
       $this->db->where('user_id', $user_id);

       $result = $this->db->get('users');

       if ($result->num_rows() == 1) {
           return $result->row(0)->fk_level_id;
       } else {
           return false;
       }
   }
   public function register($enc_password){
       $data = array(
           'nama' => $this->input->post('nama'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password,
           'kodepos' => $this->input->post('kodepos'),
           'fk_level_id' => $this->input->post('membership'),
       );
       return $this->db->insert('users', $data);
   }
   public function get_user_details( $username )
   {
       $this->db->where('username', $username);

       $result = $this->db->get('users');

       if ($result->num_rows() == 1) {
           return $result->row();
       } else {
           return false;
       }
   }



