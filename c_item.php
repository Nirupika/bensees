<?php
include_once("config.php");
class item{
	public $iID;
	public $iname;
	public $cat_ID;
    public $brand_ID;
    public $iuprice;
    public $iquantity;
    public $ireorderlev;
    public $ilocation;
    public $ipromo;
    public $isellprice;
    public $iexdate;
    public $icond;
    public $istatus;
	

    private $db;
    
    function __construct()
    {
        $this->db = new mysqli(server, username, password, dbname);
    }
	function register()
    {
		$sql="insert into item(iID,iname,cat_ID,brand_ID,iuprice,iquantity,ireorderlev,ilocation,ipromo,isellprice,iexdate,icond,istatus) 
             values('$this->iID','$this->iname','$this->cat_ID','$this->brand_ID','$this->iuprice','$this->iquantity','$this->ireorderlev','$this->ilocation','$this->ipromo','$this->isellprice','$this->iexdate','$this->icond', '$this->istatus')";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}

    function update($id)
    {
        $sql="update item set iname='$this->iname',cat_ID='$this->cat_ID',brand_ID='$this->brand_ID', iuprice='$this->iuprice',ireorderlev='$this->ireorderlev',isellprice='$this->isellprice',iquantity='$this->iquantity',ilocation='$this->ilocation',ipromo='$this->ipromo',iexdate='$this->iexdate',icond='$this->icond' where iID=$id";

        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($uid)
    {
		$sql="update item set istatus='del' where iID=$uid";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from item where iID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new item();
        $u->iID = $row['iID'];
        $u->iname = $row['iname'];
        $u->cat_ID = $row['cat_id'];
        $u->brand_ID= $row['brand_ID'];
        $u->iuprice= $row['iuprice'];
        $u->ivolume= $row['iquantity'];
        $u->ireorderlev= $row['ireorderlev'];
        $u->ilocation = $row['ilocation'];
        $u->ipromo = $row['ipromo'];
        $u->isellprice = $row['isellprice'];
        $u->iexdate = $row['iexdate'];
        $u->icondition = $row['icond'];
        $u->istatus = $row['istatus'];
        return $u;
    }

   

	function getall()
    {
        $sql="select * from item where istatus<>'del' ";
       
        
		$res = $this->db->query($sql);
		$ar=array();
        while($row=$res->fetch_array())
        {
            
        $u = new item();
        $u->iID = $row['iID'];
        $u->iname = $row['iname'];
        $u->cat_ID = $row['cat_id'];
        $u->brand_ID= $row['brand_ID'];
        $u->iuprice= $row['iuprice'];
        $u->iquantity= $row['iquantity'];
        $u->ireorderlev= $row['ireorderlev'];
        $u->ilocation = $row['ilocation'];
        $u->ipromo = $row['ipromo'];
        $u->isellprice = $row['isellprice'];
        $u->iexdate = $row['iexdate'];
        $u->icond = $row['icond'];
        $u->istatus = $row['istatus'];
        
         $ar[]=$u;  
		}
		
		return $ar;
	}
}
?>