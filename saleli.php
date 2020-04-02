<?php


include_once("c_saleli.php");
$u = new supplier();

if(isset($_POST["saleli_quantity"]))
{

        $u->item_ID = $_POST['item'];
        $u->saleli_quantity = $_POST['saleli_quantity'];
        $u->saleli_total = $_POST['saleli_total'];
        $u->saleli_netprice = $_POST['saleli_netprice'];

    if(isset($_POST["supplier_id"]))
    {
        $u->update($_POST["supplier_id"]);

    }else
    {

        $u->register();
    }

    nclude "to.php";
?>   
    <div class="card">
        <form method="POST" action="supplier.php" class="form-horizontal" id="f1">

            <div class="card-body">
                                    <h4 class="card-title"><b>Supplier Registration</b></h4>
                                    <div class="form-group row">
                                        <label for="sup_company" class="col-md-3 m-t-15- text-right control-label col-form-label">Company</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" value="<?= $u->sup_company?>" id="sup_company" name="sup_company" placeholder="Company Name Here">
                                        </div>
                                    </div>