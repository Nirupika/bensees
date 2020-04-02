<?php
include_once("config.php");
class invoice{
    public $in_ID;
    public $sale_ID;
    public $in_date;
    public $in_total;
    public $in_payamount;
    public $in_balance;
    public $in_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update invoice set in_id='$this->$in_ID',sale_=ID'$this->sale_ID',
        in_date='$this->in_date',  in_total='$this->in_total', in_payamount='$this->in_payamount',
        in_balance='$this->in_balance', in_status='$this->in_status');
              where in_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update invoice set in_status='del' where in_ID=$in_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from invoice where in_status='act' and in_ID=$in_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new invoice();
        $u->in_ID = $row['in_ID'];
        $u->sale_ID = $row['sale_ID'];
        $u->in_date = $row['in_date'];
        $u->in_total= $row['in_total'];
        $u->in_payamount= $row['in_payamount'];
        $u->in_balance= $row['in_balance'];
        $u->in_status = $row['in_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from invoice where in_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new invoice();
            $u->in_ID = $row['in_ID'];
            $u->sale_ID = $row['sale_ID'];
            $u->in_date = $row['in_date'];
            $u->in_total= $row['in_total'];
            $u->in_payamount= $row['in_payamount'];
            $u->in_balance= $row['in_balance'];
            $u->in_status = $row['in_status'];
           
		}
		
		
		return $ar;
	}
}
?>