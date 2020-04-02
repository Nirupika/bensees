<?php
include_once("c_grnlist.php");
$u = new grnlist();

if(isset($_POST["grnli_quantity"]))
{
      
        $u->iID= $_POST['item'];
        $u->grnli_quantity = $_POST['grnli_quantity'];
        $u->grnli_uprice = $_POST['grnli_uprice'];
        $u->grnli_totprice = $_POST['grnli_totprice'];
       


    if(isset($_POST["grnli_id"]))
    {
        $u->update($_POST["grnli_id"]);

    }else
    {

        $u->register();
    }
    
}

if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }


$d = new  grnlist();
$grnlist = $d->getall();

include_once("c_item.php");
$d = new  item();
$item = $d->getall();


include "to.php";
?> 
<div class="card">
  <form method="POST" action="grnli.php" class="form-horizontal" id="f1">

                                    <h4> GRN List Items</h4>

                                    <div class="form-group row">
                                                    <label for="item" class="col-md-3 text-right control-label col-form-label">Item</label>
                                                     <div class="col-md-7">
                                                         <select name="item" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                    <?php
                                                        foreach ($item as $item)
                                                        {
                                                            echo "<option value='$item->iID'>$item->iname</option>";

                                                        }
                                                    ?>

                                                </select>

                                            </div>
                                        </div>
                                   
                                    <div class="form-group row">
                                        <label for="grnli_quantity" class="col-md-3 m-t-15- text-right control-label col-form-label">Quantity</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="grnli_quantity" name="grnli_quantity" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="grnli_uprice" class="col-md-3 m-t-15- text-right control-label col-form-label">Unit Price</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="grnli_uprice" name="grnli_uprice" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="grnli_totprice" class="col-md-3 m-t-15- text-right control-label col-form-label">Total Price</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="grnli_totprice" name="grnli_totprice"placeholder="">
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
                                      
                                              <td>$item->iID</td>
                                              <td>$item->grnlist_quantity</td>
                                              <td>$item->grnlist_uprice</td>
                                              <td>$item->grnlist_totprice</td>
                                              <td><a href='grnli.php?xid=$item->grnli_ID'>Delete</a></td>
                                            
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

