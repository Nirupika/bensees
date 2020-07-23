<?php

include_once("c_sup_payments.php");
if (isset($_POST["amt"]))
{
    $sp = new sup_payments();
    $sp->pay_ID = $_POST["pay_ID"];
    $sp->sup_ID = $_POST["supplier"];
    $sp->ref_no = $_POST["ref_no"];
    $sp->amount = $_POST["amt"];
    $sp->p_method = $_POST["category1"];
    $sp->cheque_no = $_POST["chq_no"];
    $sp->cheque_date = $_POST["doc"];

        $sp->register();
}

include_once("c_supplier.php");
$d = new  supplier();
$supplier = $d->getall();

$d = new  sup_payments();
$sup_payments = $d->getall();

include_once("to.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
<h4>Supplier Payments</h4>

 <div class="form-group col-md-12 col-sm-6 col-xs-12">   

<form method="post" action="sup_payments.php" class="form-horizontal">
    <div class="card">
        <div class="card-body wizard-content">  
            <div class="form-group row">
                <label class="control-label col-sm-3">Company Name:</label>
                    <div class="col-md-9">
                        <select name="supplier" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                            <?php
                                foreach ($supplier as $item)
                                {
                                echo "<option value='$item->sup_ID'>$item->sup_company</option>";

                                }
                            ?>

                        /select>

                    </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-3">Reference No:</label>
                    <div class="col-sm-9">
                        <input type="text" name="ref_no"  class="form-control numonly"  placeholder="Enter Reference No" required>
                    </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3">Amount:</label>
                    <div class="col-sm-9">
                        <input type="text" name="amt"  class="form-control numonly"  placeholder="e.g.:-Rs.0.00" required>
                    </div>
            </div>
            <div class="form-group row" >
                <label class="control-label col-sm-3">Payment Method</label>
                    <div class="col-sm-9">
                        <select name="category1" id="category" class="form-control" onchange="cheque()">
                            <option value="cheque">Cheque</option>
                            <option value="cash">Cash</option>

                        </select>
                    </div>
            </div>
            <div class="form-group row" id="cheque_no">
                <label class="control-label col-sm-3">Cheque No:</label>
                    <div class="col-sm-9">
                        <input type="text" name="chq_no" class="form-control"  placeholder="e.g.:-0123456">
                    </div>
            </div>
            <div class="form-group row" id="date_of_cheque">
                <label class="control-label col-sm-3">Date of Cheque:</label>
                    <div class="col-sm-9">
                        <input type="date" name="doc" class="form-control" >
                    </div>
            </div>
        
            <div>
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
    include_once("foot.php");
?>
<script>
    function cheque() {

        var category = jQuery("#category").val();
        var cq_no = jQuery("#cheque_no");
        var cq_date = jQuery("#date_of_cheque");
       // alert(category);
        if (category=="cash") 
        {

            cq_no.hide();
            cq_date.hide();
        }
        else
        {
            cq_no.show();
            cq_date.show();
        }
    }
</script>
