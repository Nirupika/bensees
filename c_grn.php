<?php
include_once("config.php");
class grn{
	public $grn_ID;
	public $grn_date;
	public $grn_description;
    public $grnli_ID;
    public $grn_status;
	

	private $db;
    
    function __construct()
    {
        $this->db=new mysqli(server,username,password,dbname);
    }
    function register()
    {
        $sql="insert into grn(grn_ID,grn_date,grn_description,grnli_ID,grn_status ) 
             values('$this->grn_ID','$this->grn_date','$this->grn_description',
             '$this->grnli_ID_','$this->grn_status' )";
        
        echo $sql; 
        
        $this->db->query($sql);
        return true;
    }


    function update($id)
    {
        $sql="update grn set grn_date='$this->grn_date',grn_description='$this->grn_description', grnli_ID='$this->grnli_ID', sup_id='$this->sup_ID', grn_status='$this->grn_status' where grn_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update grn set grn_status='del' where grn_ID=$grn_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from grn where grn_status<>'del' and grn_ID=$grn_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new grn();
        $u->grn_ID = $row['grn_ID'];
        $u->grn_date = $row['grn_date'];
        $u->grn_description = $row['grn_description'];
        $u->grnli_ID= $row['grnli_ID'];
        $u->sup_ID= $row['sup_ID'];
        $u->grn_status = $row['grn_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from grn where grn_status<>'del'";
          
		$res = $this->db->query($sql);

		$ar=array();
		while($row=$res->fetch_array())
        {
            $u = new grn();
            $u->grn_ID = $row['grn_ID'];
            $u->grn_date = $row['grn_date'];
            $u->grn_description = $row['grn_description'];
            $u->grnli_ID= $row['grnli_ID'];
            $u->grn_status = $row['grn_status'];
		      $ar[]=$u;
		}
		
		
		return $ar;
	}
}
?>