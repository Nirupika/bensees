  <?php


include_once("c_brands.php");
$u = new brands();

if(isset($_POST["brands_name"]))
{

       
        $u->brands_name = $_POST['brands_name'];
        $u->sup_company= $_POST['supplier'];
        $u->brands_description = $_POST['brands_description'];

    if(isset($_POST["brands_id"]))
    {
        $u->update($_POST["brands_id"]);

    }else
    {

        $u->register();
    }
    
}
//drop down
include_once("c_supplier.php");
$d = new  supplier();
$supplier = $d->getall();

//Data table


$d = new  brands();
$brands = $d->getall();

if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }

if(isset($_GET['eid']))
    {
        $u =  $u->getbyid($_GET['eid']);
    }

include "to.php";
?>   

<div class="card">
  <form method="POST" action="brands.php" class="form-horizontal" id="f1"> 

    <?php
        if(isset($_GET['eid']))
        {
            echo " <input type='text' value='$u->brands_ID' name='brands_id' > ";
        }

    ?>
        <h4 class="page-title"> <b> Brand Details</b> </h4>            
                <div class="card">
                    <div class="card-body wizard-content">  
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">                  
                        
                                
                                    <div class="form-group row">
                                        <label for="brands_name" class="col-sm-3 text-right control-label col-form-label">Name *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->brands_name?>" id="brands_name" name="brands_name" placeholder="">
                                        </div>
                                    </div>    
                                           
                                                <div class="form-group row">
                                                    <label for="brands_supplier" class="col-md-3 text-right control-label col-form-label">Supplier</label>
                                                     <div class="col-md-7">
                                                         <select name="supplier" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                        <?php
                                                        foreach ($supplier as $item)
                                                        {
                                                            echo "<option value='$item->sup_ID'>$item->sup_company</option>";

                                                        }
                                                    ?>

                                                        </select>

                                                    </div>
                                                </div>
                                                
                                    
                                    
                                    <div class="form-group row">
                                        <label for="brands_description" class="col-sm-3 text-right control-label col-form-label"> Description </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->brands_description?>" id="brands_description" name="brands_description" placeholder="">
                                        </div>
                                    </div>
                            </div>

                             <div class="border-top">
                                    <div class="card-body">
                                        <button type="Submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
            </div>
    </div>
                        </form>
                    
                
            
                       <div class="card-body">
                                <h5 class="card-title m-b-0">Brand Details</h5>
                        </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Supplier</th>
                                      <th scope="col">Description</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>

                                        <?php
                                                foreach ($brands as $item)
                                                {
                                                echo "<tr>
                                      
                                              <td>$item->brands_name</td>
                                              <td>$item->sup_company</td>
                                              <td>$item->brands_description</td>
                                               <td><a href='brands.php?xid=$item->brands_ID'>Delete</a></td>
                                               <td><a href='brands.php?eid=$item->brands_ID'>Edit</a></td>
                                            </tr>";

                                                }
                                        ?>
                                
                                  </tbody>
                            </table>
                    </div>
 <?php
include "foot.php";
?>           

