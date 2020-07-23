<?php

include_once("config.php");
class sup_payments{
    public $pay_ID;
    public $ref_no;
    public $amount;
    public $p_method;
    public $cheque_no;
    public $cheque_date;
    public $sup_ID;
    public $date;

    private $db;

    function __construct() //automatically call this function when you create an object from a class
    {
        $this->db=new mysqli(server,username,password,dbname);
    }
    function register() //to enter suppliers payments information into the system
    {
        $sql="insert into sup_payments(ref_no,amount,pay_method,cheque_no,cheque_date,sup_ID) 
    values('$this->ref_no','$this->amount','$this->p_method','$this->cheque_no','$this->cheque_date','$this->sup_ID')";

        $this->db->query($sql);
        return true;
    }
    function getall() //to get all the information of suppliers payments
    {
        $sql="select * from sup_payments";
        $res=$this->db->query($sql);
        $ar=array();
        include_once("c_supplier.php");
        $sup = new supplier();
        while ($row=$res->fetch_array())
        {
            $s=new sup_payments();
            $s->pay_ID=$row["pay_ID"];
            $s->ref_no=$row["ref_no"];
            $s->amount=$row["amount"];
            $s->date=$row["date"];
            $s->p_method=$row["pay_method"];
            $s->cheque_no=$row["cheque_no"];
            $s->cheque_date=$row["cheque_date"];
            $s->sup_ID=$sup->getbyid($row["sup_ID"]);
            $ar[]=$s;
        }
        return $ar;
    }
}
?>