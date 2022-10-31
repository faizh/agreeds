<?php 
class M_posts extends CI_Model {

    protected $tableName = 't_posts';

    public $title;
    public $content;
    public $images;
    public $created_by;

    public function getAllNews()
    {
        $this->db->select('p.*');
        $this->db->select('SUBSTRING(p.content, 1, 80) as preview_content');
        $this->db->select('t.username');
        $this->db->join('t_users t', 't.id = p.created_by');

        return $this->db->get($this->tableName." p")->result();
    }

}