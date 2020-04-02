<?php


include_once("c_category.php"); 
$u = new category(); 

if(isset($_POST["cat_name"]))
{

        $u->cat_code = $_POST['cat_code'];
        $u->cat_name = $_POST['cat_name'];

    if(isset($_POST["cat_id"]))
    {
        $u->update($_POST["cat_id"]);

    }else
    {


        $u->register();
    
    }

}

$d = new  category();
$categori = $d->getall();

if(isset($_GET['eid']))
    {
        $u =  $u->getbyid($_GET['eid']);
    }



if(isset($_GET['xid']))
    {

        $u->remove($_GET['xid']);
    }


    include "to.php";
?>   

<div class="card">
  <form method="POST" action="category.php" class="form-horizontal" id="f1">  

        <?php
             if(isset($_GET['eid']))
            {
                 echo " <input type='text' value='$u->cat_ID' name='cat_id' > ";
            }

        ?>




        <h4 class="page-title"> <b> Category Details</b> </h4>            
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">                  
                                
                                    <div class="form-group row">
                                        <label for="cat_code" class="col-sm-3 text-right control-label col-form-label">Code*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cat_code?>" id="cat_code" name="cat_code" placeholder="">
                                        </div>
                                    </div>    




                                    <div class="form-group row">
                                        <label for="cat_name" class="col-sm-3 text-right control-label col-form-label">Name *</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $u->cat_name?>" id="cat_name" name="cat_name" placeholder="">
                                        </div>
                                    </div>    




                                     <div class="border-top">
                                        <div class="card-body">

                                            <button type="Submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                
                        </div> 
                
    
</form>
</div>                        

                 <div class="card-body">
                        <h5 class="card-title m-b-0">Category Detaiis</h5>
                 </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Code</th>
                                      <th scope="col">Name</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                        foreach ($categori as $item)
                                        {
                                            echo "<tr>
                                      
                                            <td>$item->cat_code</td>
                                            <td>$item->cat_name</td>                                  
                                            <td><a href='category.php?xid=$item->cat_ID'>Delete</a></td>
                                            <td><a href='category.php?eid=$item->cat_ID'>Edit</a></td>
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