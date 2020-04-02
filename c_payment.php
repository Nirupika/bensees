<?php
include_once("config.php");
class payment{
	public $pay_ID;
	public $pay_method;
    public $dis_ID;
    public $cus_id;
    public $pay_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update payment set pay_id='$this->$pay_ID',pay_method='$this->_pay_method',
        dis_ID='$this->dis_ID', cus_id='$this->cus_ID', pay_status='$this->pay_status');
              where pay_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update payment set pay_status='del' where pay_ID=$pay_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from payment where pay_status='act' and pay_ID=$pay_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new payment();
        $u->pay_ID =$row['pay_ID'];
        $u->pay_method = $row['pay_method'];
        $u->dis_ID= $row['dis_ID'];
        $u->cus_ID= $row['cus_ID'];
        $u->pay_status = $row['pay_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from payment where pay_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){

        $u = new payment();
        $u->pay_ID =$row['pay_ID'];
        $u->pay_method = $row['pay_method'];
        $u->dis_ID= $row['dis_ID'];
        $u->cus_ID= $row['cus_ID'];
        $u->pay_status = $row['pay_status'];
		}
		
		
		return $ar;
	}
}
?>