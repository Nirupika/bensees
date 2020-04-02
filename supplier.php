<?php


include_once("c_supplier.php");
$u = new supplier();

if(isset($_POST["sup_company"]))
{

        $u->sup_company = $_POST['sup_company'];
        $u->sup_address = $_POST['sup_address'];
        $u->sup_tp2 = $_POST['sup_tp2'];
        $u->sup_email = $_POST['sup_email'];
        $u->sup_mesg = $_POST['sup_mesg'];

    if(isset($_POST["supplier_id"]))
    {
        $u->update($_POST["supplier_id"]);

    }else
    {

        $u->register();
    }
    
}

if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }

$d = new  supplier();
$supplier = $d->getall();

if(isset($_GET['eid']))
    {
        $u =  $u->getbyid($_GET['eid']);
    }


include "to.php";
?>   
<div class="card">
  <form method="POST" action="supplier.php" class="form-horizontal" id="f1">

                        <?php
                        if(isset($_GET['eid']))
                        {
                           echo " <input type='text' value='$u->sup_ID' name='supplier_id' > ";
                        }

                        ?>

                                <div class="card-body">
                                    <h4 class="card-title"><b>Supplier Registration</b></h4>
                                    <div class="form-group row">
                                        <label for="sup_company" class="col-md-3 m-t-15- text-right control-label col-form-label">Company</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" value="<?= $u->sup_company?>" id="sup_company" name="sup_company" placeholder="Company Name Here">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="sup_address" class="col-md-3 m-t-15- text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="<?= $u->sup_address?>" id="sup_address" name="sup_address" placeholder="Company Address Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sup_tp2" class="col-md-3 m-t-15- text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-7">

                                            <input type="text" class="form-control" value="<?= $u->sup_tp2?>" id="sup_tp2" name="sup_tp2" placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sup_email" class="col-md-3 m-t-15- text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="<?= $u->sup_email?>" id="sup_email" name="sup_email"placeholder="Email Here">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="sup_mesg" class="col-md-3 m-t-15 text-right control-label col-form-label">Message</label>
                                        <div class="col-sm-7">
                                             <input type="text" class="form-control" value="<?= $u->sup_mesg?>" id="sup_mesg" name="sup_mesg"placeholder="Message Here">
                                            
                                        </div>
                                    </div>
                                
                                    <div class="border-top">
                                        <div class="card-body">

                                            <button type="Submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                
                          
                          </form>
                    </div>                                        
                           
                    <div class="card-body">
                                <h5 class="card-title m-b-0">Supplier Detaiis</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Company</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">Contact NO</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Message</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                        <?php
                                                        foreach ($supplier as $item)
                                                        {
                                                            echo "<tr>
                                      
                                      <td>$item->sup_company</td>
                                      <td>$item->sup_address</td>
                                      <td>$item->sup_tp2</td>
                                      <td>$item->sup_email</td>
                                      <td>$item->sup_mesg</td>
                                      <td><a href='supplier.php?xid=$item->sup_ID'>Delete</a></td>
                                      <td><a href='supplier.php?eid=$item->sup_ID'>Edit</a></td>
                                    </tr>";

                                                        }
                                                    ?>
                                    
                                  </tbody>
                            </table>
                        </div>
                    </div>    
<?php
include "foot.php";
?>