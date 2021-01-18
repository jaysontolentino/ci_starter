<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

    protected $table = 'admins';

    public function get_admins() {
        return $this->db->get($this->table)->result();
    }

    public function check_credentials($username, $password) {

        $this->db->where('username', $username);

        $data = $this->db->get($this->table)->row();

        if($data) {

            $valid = $this->bcrypt->check_password($password, $data->password);

            return $valid ? $data : NULL;
        } 
        
        return NULL;

    }

    public function create($data) {

        $data['password'] = $this->bcrypt->hash_password($data['password']);

        return $this->db->insert($this->table, $data);

    }


}