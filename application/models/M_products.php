<?php 
class M_products extends CI_Model {

    protected $tableName = '`t_products`';

    public $name;
    public $stock;
    public $price;
    public $images;
    public $desc;

    function stockOutTypeId()
    {
        return 1;
    }

    function stockInTypeId()
    {
        return 1;
    }

    function getProductById($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);

        return $this->db->get($this->tableName)->row();
    }

    function getAllProducts()
    {
        $this->db->select('*');

        return $this->db->get($this->tableName)->result();
    }

    function getAllProductsLimited($limit)
    {
        $this->db->select('*');
        $this->db->limit($limit);
        
        return $this->db->get($this->tableName)->result();
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

    function update($attributes, $where)
    {
        $this->db->set($attributes);
        $this->db->where($where);
        $this->db->update($this->tableName);

        return $this->db->affected_rows() > 0;
    }

    function updateProductStock($product_id, $stock, $typeStock)
    {
        $product        = $this->getProductById($product_id);
        $prev_stock     = $product->stock;

        if ($typeStock == $this->stockOutTypeId) { // stock out
            $curr_stock     = $prev_stock - $stock;
        }else{
            $curr_stock     = $prev_stock + $stock;
        }

        $arrUpdate = array(
            'stock' => $curr_stock
        );
        
        return $this->update($arrUpdate, "product_id = $product_id");
    }

}