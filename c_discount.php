<?php
include_once("config.php");
class discuont{
	public $dis_ID;
    public $dis_name;
    public $dis_description;
    public $brand_ID;
    public $dis_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	
	}


    function update($id)
    {
        $sql="update category set dis_id='$this->$dis_ID',dis_name='$this->dis_name',dis_description='$this->dis_description', brand_ID='$this->brand_ID', dis_status='$this->dis_status');
              where dis_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($emp_id)
    {
		$sql="update discount set dis_status='del' where dis_ID=$dis_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	
		
	}
	function getbyid($id)
    {
        $sql = "select * from discount where dis_status='act' and dis_ID=$dis_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new discount();
        $u->dis_ID = $row['dis_ID'];
        $u->dis_name = $row['dis_name'];
        $u->dis_description = $row['dis_description'];
        $u->brand_ID = $row['brand_ID'];
        $u->dis_status = $row['dis_status'];
        
        return $true;
    }

  


	function getall()
    {
        $sql="select * from discount where dis_status='act'";
       
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new discount();
            $u->dis_ID = $row['dis_ID'];
            $u->dis_name = $row['dis_name'];
            $u->dis_description = $row['dis_description'];
            $u->brand_ID = $row['brand_ID'];
            $u->dis_status = $row['dis_status']
			
		}
		
		
		return $ar;
	}
}
?>