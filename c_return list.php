<?php
include_once("config.php");
class returnList{
	public $returnli_ID;
	public $returnli_date;
	public $returnli_description;
    public $returnli_quantity;
    public $returnli_status;
	

	private $db;
	


    function update($id)
    {
        $sql="update returnList set returnli_id='$this->$returnli_ID',returnli_date='$this->returnli_date',
        returnli_description='$this->returnli_description', returnli_quantity='$this->returnli_quantity', returnli_status='$this->returnli_status');
              where returnli_ID=$id";

        //echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($pro_id)
    {
		$sql="update returnList set returnli_status='del' where returnli_ID=$returnli_id";
		
		//echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from returnList where returnli_status='act' and returnli_ID=$returnli_id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new returnList();
        $u->returnli_ID = $row['returnli_ID'];
        $u->returnli_date = $row['returnli_date'];
        $u->returnli_description = $row['returnli_description'];
        $u->returnli_quantity= $row['returnli_quantity'];
        $u->returnli_status = $row['returnli_status'];
        
        return $true;
    }

   

	function getall()
    {
        $sql="select * from returnList where returnli_status='act'";
        $row = $res->fetch_array();
        
        
		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array()){
            
            $u = new returnList();
            $u->returnli_ID = $row['returnli_ID'];
            $u->returnli_date = $row['returnli_date'];
            $u->returnli_description = $row['returnli_description'];
            $u->returnli_quantity= $row['returnli_quantity'];
            $u->returnli_status = $row['returnli_status'];
		
		}
		
		
		return $ar;
	}
}
?>