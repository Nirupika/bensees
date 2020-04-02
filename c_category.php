<?php
include_once("config.php");
class category{
	public $cat_ID;
	public $cat_code;
	public $cat_name;
    public $cat_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	
	}

	function register()
    {
		$sql="insert into categori(cat_ID,cat_code,cat_name,cat_status) 
             values('$this->cat_ID','$this->cat_code','$this->cat_name','$this->cat_status')";
		
		echo $sql; 
		
		$this->db->query($sql);
		return true;
	}


    function update($id)
    {
        $sql="update categori set cat_code='$this->cat_code',cat_name='$this->cat_name',cat_status='$this->cat_status'
              where cat_ID=$id";

        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($id)
    {
		$sql="update categori set cat_status='del' where cat_ID=$id";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	
		
	}
	function getbyid($id)
    {
        $sql = "select * from categori where cat_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new category();
        $u->cat_ID = $row['cat_ID'];
        $u->cat_code = $row['cat_code'];
        $u->cat_name = $row['cat_name'];
        $u->cat_status = $row['cat_status'];
        
        return $u;
    }

  


	function getall()
    {
        $sql="select * from categori where cat_status<>'del'";
       
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new category();
            $u->cat_ID = $row['cat_ID'];
            $u->cat_code = $row['cat_code'];
            $u->cat_name = $row['cat_name'];
            $u->cat_status = $row['cat_status'];

    		$ar[]=$u;  
		}
		
		
		return $ar;
	}
}
?>