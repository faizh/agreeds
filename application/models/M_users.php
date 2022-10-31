<?php 
class M_users extends CI_Model {

    protected $tableName = 't_users';

    public $username;
    public $fullname;
    public $email;
    public $password;
    public $role;

    function getByEmail($email)
    {
        $this->db->select('*');
        $this->db->where('email', $email);

        return $this->db->get($this->tableName)->row();
    }

    function store($attributes)
    {
        $this->username     = $attributes['username'];
        $this->fullname     = $attributes['fullname'];
        $this->email        = $attributes['email'];
        $this->password     = $attributes['password'];
        $this->role         = $attributes['role'];

        $this->db->insert($this->tableName, $this);

        return $this->db->affected_rows() > 0;
    }

}