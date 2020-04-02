<?php
include_once("config.php");
class disposalItmes{
	public $disposal_ID;
	public $disposal_date;
	public $disposal_description;
    public $grnli_ID;
    public $sup_id;
    public $disposal_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update disposalItems set disposal_id='$this->$disposal_ID',disposal_date='$this->disposal_date',disposal_description='$this->disposal_description', 
        grnli_ID='$this->grnli_ID', sup_id='$this->sup_ID', disposal_status='$this->disposal_status');
              where disposal_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update disposalItems set disposal_status='del' where disposal_ID=$disposal_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from desposalItems where deposal_status='act' and disposal_ID=$disposal_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new disposalItems();
        $u->disposal_ID = $row['disposal_ID'];
        $u->disposal_date = $row['disposal_date'];
        $u->disposal_description = $row['disposal_description'];
        $u->product_ID= $row['product_ID'];
        $u->sup_ID= $row['sup_ID'];
        $u->disposal_status = $row['disposal_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from disposalItems where disposal_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){

        $u = new disposalItems();
        $u->disposal_ID = $row['disposal_ID'];
        $u->disposal_date = $row['disposal_date'];
        $u->disposal_description = $row['disposal_description'];
        $u->product_ID= $row['product_ID'];
        $u->sup_ID= $row['sup_ID'];
        $u->disposal_status = $row['disposal_status'];
		}
		
		
		return $ar;
	}
}
?>