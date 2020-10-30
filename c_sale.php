<?php
include_once("config.php");
class sale{
	public $sale_ID;
    public $pname;
    public $pqty;
    public $pval;
    public $discount;
    public $ntot;
    public $status;
	

	private $db;
	
    function __construct()
    {
        $this->db=new mysqli(server,username,password,dbname);
    }
    function register()
    {
        $sql="insert into sale(sale_ID,pname,pqty,pval,discount,ntot,status) 
             values('$this->sale-ID','$this->pname','$this->pqty','$this->pval','$this->discount','$this->ntot','1')";
        
        echo $sql; 
        
        $this->db->query($sql);
        return true;
    }


   function update($id)
    {
        $sql="update sale set pname='$this->$pname', pqty='$this->$pqty', pval='$this->$pval',
        discount='$this->discount', ntot='$this->ntot','1');
              where sale_ID=$id";
        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($sale_id)
    {
		$sql="update sale set status='del' where sale_ID=$sale_id";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	
	function getbyid($id)
    {
        $sql = "select * from sale where status='1' and sale_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new sale();
        $u->sale_ID =$row['sale_ID'];
        $u->pname= $row['pname'];
        $u->pqty= $row['pqty'];
        $u->pval= $row['pval'];
        $u->discount= $row['discount'];
        $u->ntot= $row['ntot'];
        $u->status = $row['status'];
        
        return $u;
    }

   

	function getall()
    {
        $sql="select * from sale where status='1'";
        $res = $this->db->query($sql);
        $ar=array();
        
		while($row=$res->fetch_array()){
        $u = new sale();

        $u->sale_ID =$row['sale_ID'];
        $u->pname= $row['pname'];
        $u->pqty= $row['pqty'];
        $u->pval= $row['pval'];
        $u->discount= $row['discount'];
        $u->ntot= $row['ntot'];
        $u->status = $row['status'];   
    
         $ar[]=$u;
		}
		
		return $ar;
	}
}
?>