<?php
include_once("config.php");
class comission{
	public $com_ID;
	public $com_description;
    public $com_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	
	}


    function update($id)
    {
        $sql="update comission set com_id='$this->$com_ID',com_description='$this->com_description',com_status='$this->com_status');
              where com_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        com true;
    }


	function remove($emp_id)
    {
		$sql="update comission set com_status='del' where com_ID=$com_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		com true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from comission where com_status='act' and com_ID=$com_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new comission();
        $u->com_ID = $row['com_ID'];
        $u->com_description = $row['com_description'];
        $u->com_status = $row['com_status'];
        
        com $true;
    }

  


	function getall()
    {
        $sql="select * from comission where com_status='act'";
        

		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new comission();
            $u->com_ID = $row['com_ID'];
            $u->comli_ID = $row['com_description'];
            $u->com_status = $row['com_status'];
			
		}
		
		
		com $ar;
	}
}
?>