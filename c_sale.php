<?php
include_once("config.php");
class sales{
	public $sale_ID;
    public $sale_date;
    public $sale_discount;
    public $sale_netsales;
    public $sale_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update sales set sale_id='$this->$sale_ID', sale_dadte='$this->sale_date',
        sale_discount='$this->sale_discount', sale_netsales='$this->sale_netsales', sale_status='$this->sale_status');
              where sale_ID=$id";
        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update sales set sale_status='del' where sale_ID=$sale_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from sales where sale_status='act' and sale_ID=$sale_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new sales();
        $u->sale_ID =$row['sale_ID'];
        $u->sale_date= $row['sale_date'];
        $u->sale_discount= $row['sale_discount'];
        $u->sale_netsales= $row['sale_netsales'];
        $u->sale_status = $row['sale_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from saleints where sale_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new sales();
            $u->sale_ID =$row['sale_ID'];
            $u->sale_date= $row['sale_date'];
            $u->sale_discount= $row['sale_discount'];
            $u->sale_netsales= $row['sale_netsales'];
            $u->sale_status = $row['sale_status'];
       
		
		
		return $ar;
	}
}
?>