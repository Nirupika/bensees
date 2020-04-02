<?php
include_once("config.php");
class layaltyCategory{
	public $loyalcat_ID;
	public $loyalcat_type;
    public $loyalcat_description;
    public $loyalcat_condition;
    public $loyalcat_color;
    public $loyal_ID;
    public $loyalcat_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update loyaltyCategory set loyalcat_id='$this->$loyalcat_ID',loyalcat_type='$this->_loyalcat_type',
        loyalcat_description='$this->loyalcat_description',  loyalcat_condition='$this->loyalcat_condition',  
        loyalcat_color='$this->loyalcat_color', loyal_ID='$this->loyal_ID', loyalcat_status='$this->loyalcat_status');
              where loyalcat_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update loyaltyCategory set loyalcat_status='del' where loyalcat_ID=$loyalcat_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from loyaltyCategory where loyalcat_status='act' and loyalcat_ID=$loyalcat_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new loyaltyCategory();
        $u->loyalcat_ID =$row['loyalcat_ID'];
        $u->loyalcat_type= $row['loyalcat_type'];
        $u->loyalcat_description= $row['loyalcat_description'];
        $u->loyalcat_condition= $row['loyalcat_condition'];
        $u->loyalcat_color= $row['loyalcat_color'];
        $u->loyal_ID =$row['loyal_ID'];
        $u->loyalcat_status = $row['loyalcat_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from loyaltyCategory where loyalcat_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){


        $u = new loyaltyCategory();
        $u->loyalcat_ID =$row['loyalcat_ID'];
        $u->loyalcat_type= $row['loyalcat_type'];
        $u->loyalcat_description= $row['loyalcat_description'];
        $u->loyalcat_condition= $row['loyalcat_condition'];
        $u->loyalcat_color= $row['loyalcat_color'];
        $u->loyal_ID =$row['loyal_ID'];
        $u->loyalcat_status = $row['loyalcat_status'];
		
		
		return $ar;
	}
}
?>