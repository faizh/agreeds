<?php 
class M_carts extends CI_Model {

    protected $tableName = 't_carts';

    public $product_id;
    public $qty;
    public $is_in_cart;
    public $created_by;

    function store($attributes)
    {
        $this->product_id   = $attributes['product_id'];
        $this->is_in_cart   = 'Y';
        $this->qty          = $attributes['qty'];
        $this->created_by   = $attributes['user_id'];

        $this->db->insert($this->tableName, $this);

        return $this->db->affected_rows() > 0;
    }

    public function getCartByUserId($user_id)
    {
        $this->db->select('*, c.id as cart_id');
        $this->db->join('t_products t', 't.id = c.product_id');
        $this->db->where("c.is_in_cart", 'Y');
        $this->db->where("c.created_by", $user_id);
        
        return $this->db->get($this->tableName." c")->result();
    }

}