<?php


include_once("c_customer.php");
$u = new customer();

if(isset($_POST["cus_name"]))
{        
        $u->cus_name = $_POST['cus_name'];
        $u->cus_uname = $_POST['cus_uname'];
        $u->cus_password = $_POST['cus_password'];
        $u->cus_address = $_POST['cus_address'];
        $u->cus_doj = $_POST['cus_doj'];
        $u->cus_gender = $_POST['cus_gender'];
        $u->cus_email = $_POST['cus_email'];
        $u->cus_tpno = $_POST['cus_tpno'];
        

    if(isset($_POST["customer_id"]))
    {
        $u->update($_POST["customer_id"]);

    }else
    {

        $u->register();
    }
    
}


if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }



if(isset($_GET['eid']))
    {
        $u =  $u->getbyid($_GET['eid']);
    }


$d = new  customer();
$customer = $d->getall();

include "to.php";
?>
    <div class="card">
        <form method="POST" action="customer.php" class="form-horizontal" id="f1">      

                   <?php
                        if(isset($_GET['eid']))
                        {
                           echo " <input type='text' value='$u->cus_ID' name='customer_id' > ";
                        }

                        ?>
        
                <div class="card">
                    <div class="card-body wizard-content">  
                                     
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">   
                                    <h4>Customer Details</h4>
                            <div>
                                <h6>Login Details</h6>
                                
                                   <div class="form-group row">
                                        <label for="cus_uname" class="col-sm-3 text-right control-label col-form-label">User Name *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_uname?>" id="cus_uname" name="cus_uname" placeholder="User1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cus_password" class="col-sm-3 text-right control-label col-form-label">Password *</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" value="<?= $u->cus_password?>" id="cus_password" name="cus_password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cus_password" class="col-sm-3 text-right control-label col-form-label">Confirm Password *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_password?>" id="cus_password" name="cus_password" placeholder=" Retype the password">
                                        </div>
                                    </div>

                               
                                <h6>Basic Information</h6>
                             
                                     <div class="form-group row">
                                        <label for="cus_name" class="col-sm-3 text-right control-label col-form-label">Name*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_name?>" id="cus_name" name="cus_name" placeholder="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="cus_address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_address?>" id="cus_address" name="cus_address" placeholder="">
                                        </div>
                                        
                                    </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="cus_doj" class="col-sm-3 text-right control-label col-form-label"> Date of Join </label>       
                                        <div class="col-sm-9">
                                            <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                      
                                            <input type="Date" class="form-control" value="<?= $u->cus_doj?>" name="cus_doj" placeholder="mm/dd/yyyy">
                                         
                                            </div>
                                        </div>
                                    </div>
                                      
                                            
                                   <div class="form-group row">
                                    <label for="cus_gender" class="col-sm-3 text-right control-label col-form-label"> Gender </label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" value="male" class="custom-control-input" id="customControlValidation1" name="cus_gender" required>
                                            <label class="custom-control-label" for="customControlValidation1">Male</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" value="female" class="custom-control-input" id="customControlValidation2" name="cus_gender" required>
                                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            
                                    <h6>Contact Details</h6>
                                   <div class="form-group row">
                                        <label for="cus_email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_email?>" id="cus_email" name="cus_email" placeholder="abc@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cus_tpno" class="col-sm-3 text-right control-label col-form-label">Contact No*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cus_tpno?>" id="cus_tpno" name="cus_tpno" placeholder="">
                                        </div>
                                    </div>                                                                    
                                    
                                
                                    <p>(*) Mandatory</p>
                               
                        </form>
                    </div>
                
                <div class="border-top">
                                    <div class="card-body">
                                        <button type="Submit" class="btn btn-primary">Submit</button>
                                    </div>
            </form> 
                
    </div>

                 <div class="card-body">
                                <h5 class="card-title m-b-0">Customer Detaiis</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">Gender</th>
                                      <th scope="col">DOJ</th>
                                      <th scope="col">Contact NO</th>
                                      <th scope="col">Email</th>
                                    </tr>;
                                  </thead>
                                    <tbody>   

                                  <?php
                                             foreach ($customer as $item)
                                                        {
                                             echo "<tr>
                                      
                                      <td>$item->cus_name</td>
                                      <td>$item->cus_address</td>
                                      <td>$item->cus_gender</td>
                                      <td>$item->cus_doj</td>
                                      <td>$item->cus_tpno</td>
                                      <td>$item->cus_email</td>
                                      <td><a href='customer.php?xid=$item->cus_ID'>Delete</a></td>
                                      <td><a href='customer.php?eid=$item->cus_ID'>Edit</a></td>
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