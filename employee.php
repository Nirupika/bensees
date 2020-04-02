<?php

include_once("c_employee.php");
$u = new employee();

if(isset($_POST["emp_name"]))
{

        $u->emp_name = $_POST['emp_name'];
        $u->emp_uname = $_POST['emp_uname'];
        $u->emp_password = $_POST['emp_password'];
        $u->emp_address = $_POST['emp_address'];
        $u->emp_doj = $_POST['emp_doj'];
        $u->emp_gender = $_POST['emp_gender'];
        $u->emp_email = $_POST['emp_email'];
        $u->emp_tpno = $_POST['emp_tpno'];
        $u->emp_points = $_POST['emp_points'];
        
    if(isset($_POST["emp_id"]))
    {
        $u->update($_POST["emp_id"]);

    }else
    {

        $u->register();
    }
    
}

include_once("c_employee.php");
$d = new employee();
$employee = $d->getall();

include "to.php";

if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }

if(isset($_GET['eid']))
    {
        $u =  $u->getbyid($_GET['eid']);
    }


?>
    <div class="card">
        <form method="POST" action="employee.php" class="form-horizontal" id="f1">    

          
                <?php
                    if(isset($_GET['eid']))
                    {
                        echo " <input type='text' value='$u->emp_ID' name='emp_id' > ";
                    }

                ?>   

                <div class="card">
                    <div class="card-body wizard-content">  
                                     
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">   
                                    <h4>Employee Details</h4>
                            <div>
                                <h6>Login Details</h6>
                                
                                   <div class="form-group row">
                                        <label for="emp_uname" class="col-sm-3 text-right control-label col-form-label">User Name *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_uname?>" id="emp_uname" name="emp_uname" placeholder="User1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emp_password" class="col-sm-3 text-right control-label col-form-label">Password *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_password?>" id="emp_password" name="emp_password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emp_password" class="col-sm-3 text-right control-label col-form-label">Confirm Password *</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" value="<?= $u->emp_password?>" id="emp_password" name="emp_password" placeholder=" Retype the password">
                                        </div>
                                    </div>

                               
                                <h6>Basic Information</h6>
                             
                                     <div class="form-group row">
                                        <label for="emp_name" class="col-sm-3 text-right control-label col-form-label">Name*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_name?>" id="emp_name" name="emp_name" placeholder="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="emp_address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_address?>"id="emp_address" name="emp_address" placeholder="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="emp_doj" class="col-sm-3 text-right control-label col-form-label"> Date of Join </label>       
                                        <div class="col-sm-9">
                                            <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                      
                                            <input type="Date" class="form-control" value="<?= $u->emp_doj?>" name="emp_doj" placeholder="mm/dd/yyyy">
                                         
                                            </div>
                                        </div>
                                    </div>
                                      
                                            
                                    <div class="form-group row">
                                    <label for="emp_gender" class="col-sm-3 text-right control-label col-form-label"> Gender </label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" value="male" class="custom-control-input" id="customControlValidation1" name="emp_gender" required>
                                            <label class="custom-control-label" for="customControlValidation1">Male</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" value="female" class="custom-control-input" id="customControlValidation2" name="emp_gender" required>
                                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="emp_points" class="col-sm-3 text-right control-label col-form-label">points</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_points?>" id="emp_points" name="emp_points" placeholder="">
                                        </div>
                                    </div>

                                    <h6>Contact Details</h6>
                                   <div class="form-group row">
                                        <label for="emp_email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_email?>" id="emp_email" name="emp_email" placeholder="abc@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emp_tpno" class="col-sm-3 text-right control-label col-form-label">Contact No*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->emp_tpno?>" id="emp_tpno" name="emp_tpno" placeholder="">
                                        </div>
                                    </div>                                                                    
                                    
                                
                                    <p>(*) Mandatory</p>
                               
                                <h5>Finish</h5>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with all the Terms and Conditions established by Bensees Super.</label>
                        
                            </div>
                        </form>
                    </div>
                
                <div class="border-top">
                                    <div class="card-body">
                                        <button type="Submit" class="btn btn-primary">Submit</button>
                                    </div>
        </form>

    </div>

                 <div class="card-body">
                                <h5 class="card-title m-b-0">Employee Detaiis</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">DOJ</th>
                                      <th scope="col">Gender</th>
                                      <th scope="col">Points</th>
                                      <th scope="col">Contact NO</th>
                                      <th scope="col">Email</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
            
                                        
                                        <?php
                                                        foreach ($employee as $item)
                                                        {
                                                            echo "<tr>
                                      
                                      <td>$item->emp_name</td>
                                      <td>$item->emp_address</td>
                                      <td>$item->emp_doj</td>
                                      <td>$item->emp_gender</td>
                                      <td>$item->emp_points</td>
                                      <td>$item->emp_email</td>
                                      <td>$item->emp_tpno</td>
                                       <td><a href='employee.php?xid=$item->emp_ID'>Delete</a></td>
                                       <td><a href='employee.php?eid=$item->emp_ID'>Edit</a></td>
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
