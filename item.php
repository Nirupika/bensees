<?php

include_once("c_item.php");
 $u=new item();

if(isset($_POST["iname"]))
 {   

    $u->item_iname = $_POST["iname"];
    $u->cat_ID = $_POST["category"];
    $u->brand_ID = $_POST["brand"];
    $u->iuprice = $_POST["iuprice"];
    $u->icond = $_POST["icond"];
    $u->iquantity = $_POST['iquantity'];
    $u->ireorderlev = $_POST['ireorderlev'];
    $u->ilocation = $_POST['ilocation'];
    $u->ipromo = $_POST['ipromo'];
    $u->isellprice = $_POST['isellprice'];
    $u->iexdate = $_POST['iexdate'];
    

    if(isset($_POST["item_id"]))
    {
        $u->update($_POST["item_id"]);

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


include "to.php";

$d = new  item();
$items = $d->getall();


include_once("c_category.php");
$d = new  Category();
$category = $d->getall();

include_once("c_brands.php");
$d = new  brands();
$brands = $d->getall();
?>  

        <form method="POST" action="item.php" class="form-horizontal" id="f1">


                        <?php
                        if(isset($_GET['eid']))
                        {
                           echo " <input type='text' value='$u->iID' name='Iid' > ";
                        }

                        ?>

        <div class="card-body">
                                    <h4 class="card-title"><b>Item</b></h4>
                                    
                                   <div class="form-group row">
                                        <label for="iname" class="col-md-3 m-t-15"- text-right control-label col-form-label>Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="<?= $u->iname?>" id="iname" name="iname">
                    
                                            </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="brand" class="col-md-3 m-t-15" text-right control-label col-form-label">brand</label>
                                            <div class="col-md-9">
                                                <select name="brand" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                    <?php
                                                        foreach ($brands as $obj)
                                                        {
                                                            echo "<option value='$obj->brands_ID'>$obj->brands_name</option>";

                                                        }
                                                    ?>

                                                </select>

                                            </div>
                                    </div>
                                    
                                    
                                     <div class="form-group row">
                                            <label for="Category" class="col-md-3 m-t-15" text-right control-label col-form-label">Category</label>
                                                <div class="col-md-9">
                                                     <select name="category" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                        <?php
                                                            foreach ($category as $obj)
                                                        {
                                                            echo "<option value='$obj->cat_ID'>$obj->cat_name</option>";

                                                        }
                                                    ?>

                                                    </select>

                                                </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="iuprice" class="col-md-3 m-t-15"- text-right control-label col-form-label>Unit Price</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="<?= $u->iuprice?>" id="iuprice" name="iuprice">
                    
                                            </div>
                                    </div>
                                
                                     <div class="form-group row">
                                        <label for="iquantity" class="col-sm-3 m-t-15" text-right control-label col-form-label">Quantity*</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $u->iquantity?>" id="iquantity" name="iquantity" placeholder="">
                                            </div>
                                    </div>

                                     <div class="form-group row">
                                         <label for="ireorderlev" class="col-sm-3 m-t-15" text-right control-label col-form-label">Reorder Level*</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $u->ireorderlev?>" id="ireorderlev" name="ireorderlev" placeholder="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ipromo" class="col-sm-3 text-right control-label col-form-label"> In Promotion </label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" value="yes" class="custom-control-input" id="customControlValidation1" name="ipromo" required>
                                                <label class="custom-control-label" for="customControlValidation1">Yes</label>
                                            </div>
                                             <div class="custom-control custom-radio">
                                            <input type="radio" value="no" class="custom-control-input" id="customControlValidation2" name="ipromo" required>
                                            <label class="custom-control-label" for="customControlValidation2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isellprice" class="col-sm-3 m-t-15" text-right control-label col-form-label">Sell Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $u->isellprice?>" id="isellprice" name="isellprice" placeholder="">
                                            </div>
                                    </div>                                                             
                                   
                                    <div class="form-group row">
                                        <label for="iexdate" class="col-sm-3 m-t-15" text-right control-label col-form-label"> Expiry Date </label>       
                                            <div class="col-sm-8">
                                                                  
                                                <input type="date" class="form-control" value="<?= $u->iexdate?>" id="iexdate" name="iexdate" placeholder="mm/dd/yyyy">
                                         
                                            </div>
                                    </div>
                                    
                                     <div class="form-group row">
                                        <label for="ilocation" class="col-sm-3 m-t-15" text-right control-label col-form-label">Location</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $u->ilocation?>" id="ilocation" name="ilocation" placeholder="">
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="icond" class="col-sm-3 m-t-15" text-right control-label col-form-label">Condition*</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?= $u->icond?>" id="icond" name="icond"  placeholder="">
                                            </div>
                                    </div>
                                
                               

                                    <div class="border-top">
                                        <div class="card-body-group-horizontal">
                                            <input type="submit" class="btn btn-info" value="Add">
                                    
                                        </div>
                                       
                                    </div>

                </form>
             </div>


               <div class="card-body">
                        <h5 class="card-title m-b-0">Item Detaiis</h5>
                 </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Unit Price</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Reorder level</th>
                                      <th scope="col">In Promotion</th>
                                      <th scope="col">Sell Price</th>
                                      <th scope="col">Expiry Date</th>
                                      <th scope="col">Location</th>
                                      <th scope="col">Condition</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                        foreach ($items as $toe)
                                        {
                                            echo "<tr>
                                      
                                            <td>$toe->iname</td>
                                            <td>$toe->iuprice</td> 
                                            <td>$toe->iquantity</td>
                                            <td>$toe->ireorderlev</td>
                                            <td>$toe->ipromo</td>
                                            <td>$toe->isellprice</td>
                                            <td>$toe->iexdate</td>
                                            <td>$toe->ilocation</td>
                                            <td>$toe->icond</td>
                                            <td><a href='item.php?xid=$toe->iID'>Delete</a></td> 
                                            <td><a href='item.php?eid=$toe->iID'>Edit</a></td>                                                          
                                             </tr>";

                                        }
                                    ?>
                                    
                                  </tbody>
                            </table>
                        </div>
                    </div>    
     </body>

</html>                      


<?php
include "foot.php";
?>                                   