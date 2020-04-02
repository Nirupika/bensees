<?php

include_once("c_grn.php");
$u = new grn();

if(isset($_POST["grn_quantity"]))
{

      
        $u->grn_date = $_POST['grn_date'];
        $u->grnli_ID = $_POST['grnlist'];
        $u->grn_description = $_POST['grn_description'];
       


    if(isset($_POST["grn_id"]))
    {
        $u->update($_POST["grn_id"]);

    }else
    {

        $u->register();
    }
    
}

$d = new  grn();
$grn = $d->getall();

include_once("c_grnlist.php");
$d = new  grnlist();
$grnlist = $d->getall();

include "to.php";
?> 
<div class="card">
  <form method="POST" action="grnli.php" class="form-horizontal" id="f1">
    <div class="form-group col-md-12 col-sm-6 col-xs-12"> 

                                    <h4>Good Receive Note</h4>

                                    <div class="form-group row">
                                                    <label for="grnlist" class="col-md-3 text-right control-label col-form-label">GRN List</label>
                                                     <div class="col-md-7">
                                                         <select name="grnlist" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                    <?php
                                                        foreach ($grnlist as $item)
                                                        {
                                                            echo "<option value='$item->grnli_ID'>$item->grnli_name</option>";

                                                        }
                                                    ?>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="grn_date" class="col-sm-3  text-right control-label col-form-label"> Received Date </label>       
                                        <div class="col-sm-9">
                                           <div class="col-sm-9">
                                              <div class="input-group-append">
                                                <input type="Date" class="form-control" value="<?= $u->cus_doj?>" name="cus_doj" placeholder="mm/dd/yyyy">
                                         
                                               </div>
                                          </div>
                                        </div>
                                      </div>
                                   
                                   
                                    <div class="form-group row">
                                        <label for="grn_description" class="col-md-3 m-t-15- text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="grn_description" name="grn_description  " placeholder="">
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
                                <h5 class="card-title m-b-0">GRN Detaiis</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Item</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Unit Price</th>
                                      <th scope="col">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                        <?php
                                                        foreach ($grnlist as $item)
                                                        {
                                                            echo "<tr>
                                      
                                      <td>$item->item_ID</td>
                                      <td>$item->grnli_quantity</td>
                                      <td>$item->grnli_uprice</td>
                                      <td>$item->grnli_totprice</td>
                                      
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