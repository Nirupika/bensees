<?php
include_once("config.php");
class return{
	public $return_ID;
	public $returnli_ID;
    public $return_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	
	}


    function update($id)
    {
        $sql="update return set return_id='$this->$return_ID',returnli_ID='$this->returnli_ID',return_status='$this->return_status');
              where return_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($emp_id)
    {
		$sql="update return set return_status='del' where return_ID=$return_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from return where return_status='act' and return_ID=$return_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new return();
        $u->return_ID = $row['return_ID'];
        $u->returnli_ID = $row['returnli_ID'];
        $u->return_status = $row['return_status'];
        
        return $true;
    }

  


	function getall()
    {
        $sql="select * from return where return_status='act'";
        

		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            $u = new return();
            $u->return_ID = $row['return_ID'];
            $u->returnli_ID = $row['returnli_ID'];
            $u->return_status = $row['return_status'];
			
		}
		
		
		return $ar;
	}
}
?>