<?php
include_once("config.php");
class grnlist{
    public $grnli_ID;
    public $grnli_quantity;
    public $grnli_uprice;
    public $grnli_totprice;
    public $iID;
    public $grnli_status;
	

	private $db;
    
    function __construct()
    {
        $this->db=new mysqli(server,username,password,dbname);
    }
    function register()
    {
        $sql="insert into grnlist(grnli_ID,grnli_quantity,grnli_uprice,grnli_totprice,item_ID,grnli_status) 
             values('$this->grnli_ID','$this->grnli_quantity','$this->grnli_uprice','$this->grnli_totprice','$this->iID','$this->grnli_status')";
        
        echo $sql;
        
        $this->db->query($sql);
        return true;
    }


    function update($id)
    {
        $sql="update grnlist set grnli_id='$this->grnli_ID',grnli_quantity='$this->grnli_quantity', grnli_uprice='$this->grnli_uprice',
        grnli_totprice='$this->grnli_totprice', item_id='$this->item_id', grnli_status='$this->grnli_status');
              where grnli_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($id)
    {
		$sql="update grnlist set grnli_status='del' where grnli_ID=$id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from grnlist where grnli_status<>'del' and grnli_ID=$grnli_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new grnli();
        $u->grnli_ID = $row['grnli_ID'];
        $u->grnli_quantity = $row['grnli_quantity'];
        $u->grnli_uprice = $row['grnli_uprice'];

        $u->grnli_totprice = $row['grnli_totprice'];
        $u->item_ID= $row['item_ID'];
        $u->grnli_status = $row['grnli_status'];
        
        return $u;
    }

   

	function getall()
    {
        $sql="select * from grnlist where grnli_status<>'del'";
		$res = $this->db->query($sql);

		$ar=array();
		while($row=$res->fetch_array())
        {
        $u = new grnli();
        $u->grnli_ID = $row['grnli_ID'];
        $u->grnli_quantity = $row['grnli_quantity'];
        $u->grnli_uprice = $row['grnli_uprice'];
        $u->grnli_totprice = $row['grnli_totprice'];
        $u->iID= $row['iID'];
        $u->grnli_status = $row['grnli_status'];
		
        $ar[]=$u;  
		}
		
		
		return $ar;
	}
}
?>