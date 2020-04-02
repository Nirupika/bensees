                                                                                                                                             <?php
include_once("config.php");
class customer{
	public $cus_ID;
	public $cus_name;
    public $cus_uname;
	public $cus_address;
	public $cus_tpno;
	public $cus_gender;
	public $cus_doj;
    public $cus_email;
    public $cus_status;
    public $cus_password;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	}
	function register()
    {
		$sql="insert into customers(cus_ID,cus_name,cus_uname,cus_password,cus_address,cus_doj,cus_gender,cus_email,cus_tpno,cus_status) 
             values('$this->cus_ID','$this->cus_name','$this->cus_uname','$this->cus_password','$this->cus_address','$this->cus_doj','$this->cus_gender','$this->cus_email','$this->cus_tpno','$this->cus_status')";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}


    function update($id)
    {
        $sql="update customers set cus_name='$this->cus_name',cus_address='$this->cus_address',cus_tpno='$this->cus_tpno',
        cus_doj='$this->cus_doj',cus_email='$this->cus_email',cus_status='$this->cus_status', cus_password =md5 ('$this->cus_password')
              where cus_ID=$id";

        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($uid)
    {
		$sql="update customers set cus_status='del' where cus_ID=$uid";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}
	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from customers where cus_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new customer();
        $u->cus_ID = $row['cus_ID'];
        $u->cus_name = $row['cus_name'];
        $u->cus_uname = $row['cus_uname'];
        $u->cus_address = $row['cus_address'];
        $u->cus_tpno = $row['cus_tpno'];
        $u->cus_gender= $row['cus_gender'];
        $u->cus_doj = $row['cus_doj'];
        $u->cus_email = $row['cus_email'];
        $u->cus_status = $row['cus_status'];
        $u->cus_password = $row['cus_password'];

        return $u;
    }

    function login($un,$pw)
    {
        $sql = "select * from customers where cus_name='$un' and cus_password=md5('$pw')";
        $res = $this->db->query($sql);
        if ($res->num_rows==1)
        {
            $row = $res->fetch_array();
            session_start();
            $_SESSION["cus_id"]=$row["cus_ID"];
            return true;

        }
        else
            return false;

    }

	function getall()
    {
        $sql="select * from customers where cus_status<>'del'";
        
        $res = $this->db->query($sql);
        $ar=array();
        while($row=$res->fetch_array())
        {
            $u = new customer();
            $u->cus_ID = $row['cus_ID'];
            $u->cus_name = $row['cus_name'];
            $u->cus_uname = $row['cus_uname'];
            $u->cus_address = $row['cus_address'];
            $u->cus_tpno = $row['cus_tpno'];
            $u->cus_gender= $row['cus_gender'];
            $u->cus_doj = $row['cus_doj'];
            $u->cus_email = $row['cus_email'];
            //$u->cus_status = $row['cus_status'];
            $u->cus_password = $row['cus_password'];

			$ar[]=$u;  
		}
		
		
		return $ar;
	}
}
?>