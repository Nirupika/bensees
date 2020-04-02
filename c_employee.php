<?php
include_once("config.php");
class employee
{
	public $emp_ID;
	public $emp_name;
	public $emp_uname;
    public $emp_password;
	public $emp_address;
    public $emp_doj;
    public $emp_gender;
    public $emp_email;
    public $emp_tpno;
    public $emp_points;
    public $emp_status;
	

	private $db;
	
	function __construct()
    {
		$this->db=new mysqli(server,username,password,dbname);
	}
	function register()
    {

		$sql="insert into employee(emp_ID,emp_name,emp_uname,emp_password,emp_address,emp_doj,emp_gender,emp_email,emp_tpno,emp_points,emp_status) 
             values('$this->emp_ID','$this->emp_name','$this->emp_uname','$this->emp_password','$this->emp_address','$this->emp_doj','$this->emp_gender','$this->emp_email','$this->emp_tpno','$this->emp_points','$this->emp_status')";
		
        echo $sql;
		
		$this->db->query($sql);
		return true;
	}


    function update($id)
    {
        $sql="update employee set emp_name='$this->emp_name',emp_uname='$this->emp_uname',emp_status='$this->emp_status',emp_password ='$this->emp_password', emp_address='$this->emp_address', emp_doj='$this->emp_doj',emp_points='$this->emp_points',emp_gender='$this->emp_gender', emp_email='$this->emp_email', emp_tpno='$this->emp_tpno' where emp_ID=$id";

        echo $sql;

        $this->db->query($sql);
        return true;
    }


	function remove($uid)
    {
		$sql="update employee set emp_status='del' where emp_ID=$uid";
		
		echo $sql;
		
		$this->db->query($sql);
		return true;
	}

                                                                   

	function change_pw()
    {
		
	}
	function getbyid($id)
    {
        $sql = "select * from employee where emp_ID=$id";
        $res = $this->db->query($sql);

        $row = $res->fetch_array();
        $u = new employee();
        $u->emp_ID = $row['emp_ID'];
        $u->emp_name = $row['emp_name'];
        $u->emp_uname = $row['emp_uname'];
        $u->emp_password = $row['emp_password'];
        $u->emp_address = $row['emp_address'];
        $u->emp_doj = $row['emp_doj'];
        $u->emp_gender = $row['emp_gender'];
        $u->emp_email = $row['emp_email'];
        $u->emp_tpno = $row['emp_tpno'];
        $u->emp_points = $row['emp_points'];
        $u->emp_status = $row['emp_status'];

        
        return $u;
    }

    function login($un,$pw)
    {
        $sql = "select * from employee where emp_name='$un' and emp_password='$pw'";
        $res = $this->db->query($sql);
        if ($res->num_rows==1)
        {
            $row = $res->fetch_array();
            session_start();
            $_SESSION["emp_ID"]=$row["emp_ID"];
            return 1;

        }
        else
            return 0;

    }

	function getall()
    {
        $sql="select * from employee where emp_status<>'del'";
        

		$res = $this->db->query($sql);
		$ar=array();
		while($row=$res->fetch_array())
        {
            $u = new employee();
            $u->emp_ID = $row['emp_ID'];
            $u->emp_name = $row['emp_name'];
            $u->emp_uname = $row['emp_uname'];
            $u->emp_password = $row['emp_password'];
            $u->emp_address = $row['emp_address'];
            $u->emp_doj = $row['emp_doj'];
            $u->emp_gender = $row['emp_gender'];
            $u->emp_email = $row['emp_email'];
            $u->emp_tpno = $row['emp_tpno'];
            $u->emp_points =$row['emp_points'];
            $u->emp_status = $row['emp_status'];
            
            $ar[]=$u;
			
		}
		
		
		return $ar;
	}
}
?>