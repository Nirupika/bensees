<?php
include_once("config.php");
class loyaltyPoints{
	public $loyalpo_ID;
    public $loyalpo_totpoints;
    public $cus_ID;
    public $loyalpo_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update loyaltyPoints set loyalpo_id='$this->$loyalpo_ID', loyalpo_totpoints='$this->loyalpo_totpoints',
        cus_ID='$this->cus_ID', loyalpo_status='$this->loyalpo_status');
              where loyalpo_ID=$id";
        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update loyaltypoints set loyalpo_status='del' where loyalpo_ID=$loyalpo_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from loyaltyPoints where loyalpo_status='act' and loyalpo_ID=$loyalpo_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new loyaltypoints();
        $u->loyalpo_ID =$row['loyalpo_ID'];
        $u->loyalpo_totpoints= $row['loyalpo_totpoints'];
        $u->cus_=ID $row['cus_ID'];
        $u->loyalpo_status = $row['loyalpo_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from loyalpoints where loyalpo_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new loyaltypoints();
            $u->loyalpo_ID =$row['loyalpo_ID'];
            $u->loyalpo_totpoints= $row['loyalpo_totpoints'];
            $u->cus_=ID $row['cus_ID'];
            $u->loyalpo_status = $row['loyalpo_status'];
       
		
		
		return $ar;
	}
}
?>