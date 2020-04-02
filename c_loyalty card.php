<?php
include_once("config.php");
class layaltyCard{
	public $loyal_ID;
	public $loyalpo_ID;
    public $loyal_stdate;
    public $loyal_exdate;
    public $loyal_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update loyaltyCard set loyal_id='$this->$loyal_ID',loyalpo_Id='$this->_loyalpo_ID',
        loyal_stdate='$this->loyal_stdate', loyal_exdate='$this->loyal_exdate', loyal_status='$this->loyal_status');
              where loyal_ID=$id";
        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update loyaltyCard set loyal_status='del' where loyal_ID=$loyal_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from loyaltyCard where loyal_status='act' and loyal_ID=$loyal_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new loyaltycard();
        $u->loyal_ID =$row['loyal_ID'];
        $u->loyalpo_ID= $row['loyalpo_ID'];
        $u->loyal_stdate= $row['loyal_stdate'];
        $u->loyal_exdate= $row['loyal_exdate'];
        $u->loyal_status = $row['loyal_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from loyaltyCard where loyal_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new loyaltycard();
            $u->loyal_ID =$row['loyal_ID'];
            $u->loyalpo_ID= $row['loyalpo_ID'];
            $u->loyal_stdate= $row['loyal_stdate'];
            $u->loyal_exdate= $row['loyal_exdate'];
            $u->loyal_status = $row['loyal_status'];
       
		
		
		return $ar;
	}
}
?>