<?php
include_once("config.php");
class saleList{
    public $saleli_ID;
    public $sale_ID;
    public $item_ID;
    public $saleli_quantity;
	public $saleli_total;
    public $saleli_netprice;
    public $saleli_status;
	

	private $db;
	

    function __construct()
    {
        $this->db=new mysqli(server,username,password,dbname);
    }
    function register()
    {
        $sql="insert into saleList(saleli_ID,sale_ID,item_ID,saleli_quantity,saleli_total,saleli_netprice,saleli_status ) 
             values('$this->saleli_ID','$this->sale_ID','$this->item_ID','$this->saleli_quantity','$this->saleli_total','$this->saleli_netprice',
             '$this->saleli_status')";
        
        echo $sql; 
        
        $this->db->query($sql);
        return true;
    }



    function update($id)
    {
        $sql="update saleList set saleli_quantity='$this->saleli_quantity', saleli_total='$this->saleli_total',
        saleli_netprice='$this->saleli_netprice',saleli_status='$this->saleli_status' where saleli_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($uid)
    {
		$sql="update saleList set saleli_status='del' where saleli_ID=$uid";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from saleList where saleli_status='1' and saleli_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new saleList();
        $u->saleli_ID = $row['saleli_ID'];
        $u->sale_ID = $row['sale_ID'];
        $u->saleli_quantity= $row['saleli_quantity'];
        $u->saleli_total= $row['saleli_total'];
        $u->saleli_netprice= $row['saleli_netprice'];
        $u->brand_ID= $row['item_ID'];
        $u->saleli_status = $row['saleli_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from salelist where saleli_status='1'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new saleList();
            $u->saleli_ID = $row['saleli_ID'];
            $u->sale_ID = $row['sale_ID'];
            $u->saleli_quantity= $row['saleli_quantity'];
            $u->saleli_total= $row['saleli_total'];
            $u->saleli_netprice= $row['saleli_netprice'];
            $u->brand_ID= $row['item_ID'];
            $u->saleli_status = $row['saleli_status'];
        
            $ar[]=$u;  
		}
		
		
		return $ar;
	}
}
?>