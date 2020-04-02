<?php
include_once("config.php");
class supplier
{
	public $sup_ID;
	public $sup_company;
	public $sup_address;
	public $sup_tp2;
    public $sup_email;
    public $sup_mesg;
    public $sup_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	}
	function register()
    {
		$sql="insert into supplier(sup_company,sup_address,sup_tp2,sup_email,sup_mesg ) 
             values('$this->sup_company','$this->sup_address','$this->sup_tp2',
             '$this->sup_email','$this->sup_mesg' )";
		
		echo $sql; 
		
		$this->db->query($sql);
		return true;
	}


    function update($id)
    {
        $sql="update supplier set sup_company='$this->sup_company',sup_address='$this->sup_address',sup_tp2='$this->sup_tp2',
        sup_email='$this->sup_email',sup_mesg='$this->sup_mesg' where sup_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($uid)
    {
		$sql="update supplier set sup_status='del' where sup_ID=$uid";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {

    }
	function getbyid($id)
    {
        $sql = "select * from supplier where sup_status='1' and sup_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new supplier();
        $u->sup_ID = $row['sup_ID'];
        $u->sup_company = $row['sup_company'];
        $u->sup_address = $row['sup_address'];
        $u->sup_tp2= $row['sup_tp2'];
        $u->sup_email = $row['sup_email'];
        $u->sup_mesg = $row['sup_mesg'];
        $u->sup_status = $row['sup_status'];
       

        return $u;
    }

	function getall()
    {
        $sql="select * from supplier where sup_status='1'";
       
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array())
        {
            $u = new supplier();
            $u->sup_ID = $row['sup_ID'];
            $u->sup_company = $row['sup_company'];
            $u->sup_address = $row['sup_address'];
            $u->sup_tp2= $row['sup_tp2'];
            $u->sup_email = $row['sup_email'];
            $u->sup_mesg   = $row['sup_mesg'];
            $u->sup_status = $row['sup_status'];
            
            $ar[]=$u;   
		}
		
		
		return $ar;
	}
}
?>