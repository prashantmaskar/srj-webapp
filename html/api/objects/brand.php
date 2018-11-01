<?php

class Brand{
 
    // database connection and table name
    private $conn;
    private $table_name = "brand";
 
    // object properties
    public $id;
    public $brand_name;
    public $brand_img_sq;
    public $brand_img_rc;
    public $timestamp;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    brand_name=:brand_name, brand_img_sq=:brand_img_sq, brand_img_rc=:brand_img_rc, brand_created_on=:brand_created_on";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->brand_name=htmlspecialchars(strip_tags($this->brand_name));
        $this->brand_img_sq=htmlspecialchars(strip_tags($this->brand_img_sq));
        $this->brand_img_rc=htmlspecialchars(strip_tags($this->brand_img_rc));
 
        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');
 
        // bind values 
        $stmt->bindParam(":brand_name", $this->brand_name);
        $stmt->bindParam(":brand_img_sq", $this->brand_img_sq);
        $stmt->bindParam(":brand_img_rc", $this->brand_img_rc);
        $stmt->bindParam(":brand_created_on", $this->timestamp);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }
}
?>