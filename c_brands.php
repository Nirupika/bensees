<?php
include_once("config.php");
class brands
{
	public $brands_ID;
    public $brands_name;
    public $sup_company;
	public $brands_description;
    public $brands_status;
	
    private $db;
    
    function __construct()
    {
        $this->db=new mysqli(server,username,password,dbname);
    }

    function register()
    {
        $sql="insert into brands(brands_ID,brands_name,brands_description,sup_company,brands_status) 
             values('$this->brands_ID','$this->brands_name','$this->brands_description','$this->sup_company','$this->brands_status')";
        
        echo $sql; 
        
        $this->db->query($sql);
        return true;
    }

    function update($id)
    {
        $sql="update brands set brands_name='$this->brands_name', sup_company='$this->sup_company',brands_description='$this->brands_description' where brands_ID=$id";

        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($brands_id)
    {
		$sql="update brands set brands_status='del' where brands_ID=$brands_id";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from brands where brands_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new brands();
        $u->brands_ID = $row['brands_ID'];
        $u->brands_name = $row['brands_name'];
        $u->sup_company= $row['sup_company'];
        $u->brands_description = $row['brands_description'];
        $u->brands_status = $row['brands_status'];
        
        return $u;
    }

   

	function getall()
    {
        $sql="select * from brands where brands_status<>'del'";
         
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array())
        {

			 $u = new brands();
        $u->brands_ID = $row['brands_ID'];
        $u->brands_name = $row['brands_name'];
        $u->sup_company= $row['sup_company'];
        $u->brands_description = $row['brands_description'];
        $u->brands_status = $row['brands_status'];

        $ar[]=$u;
		}
		
		
		return $ar;
	}
}
?>