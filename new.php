<?php
include_once("c_grnlist.php");
$u = new grnlist();

if(isset($_POST["grnli_quantity"]))
{
      
        $u->grnno= $_POST['grnno'];
        $u->grn_orderno = $_POST['grn_orderno'];
        $u->sup_ID = $_POST['sup_ID'];
        $u->sup_name = $_POST['sup_name'];
        $u->grn_ordate = $_POST['grn_ordate'];
        $u->grn_ref = $_POST['grn_ref'];


}
	include_once("c_supplier.php");
	$d = new  Supplier();
	$Supplier = $d->getall();
 
       include "to.php";


  


?> 
<div class="card">
  <form method="POST" action="grnli.php" class="form-horizontal" id="f1">

                                    <h4> GRN Deatils</h4>

                                    <div class="form-group row">
                                    	<div class="col-md-12">
                                                    <label for="grnno" class="col-md-2 text-right control-label col-form-label">GRN Number</label>
                                                     <label for="grn_orderno" class="col-md-2 text-right control-label col-form-label">Order Number</label>
                                                      <label for="sup_ID" class="col-md-2 text-right control-label col-form-label">Supplier Name</label>
                                                    
                                                     <label for="grn_ordate" class="col-md-2 text-right control-label col-form-label">
                                                    Order Date </label>
                                                    <label for="grn_ref" class="col-md-2 text-right control-label col-form-label">
                                                    Referance </label>
                                         </div>                                 
                                    </div>

                                     <div class="form-row">
                                    
                                      <div class="form-group col-md-2">   
                                    		  <input type="text" class="form-control" id="grnno" name="grnno" placeholder="">
                                      </div>
                                            <div class="form-group col-md-2">
                                              <input type="text" class="form-control" id="grnno" name="grnno" placeholder="">
                                               
                                            </div>
                                                
                                    					    
                                                     <div class="form-group col-md-2">

                                                        
                                                         <select name="Supplier" class="form-control m-t-15-" style="height: 36px;width: 100%;">
                                            
                                                    <?php
                                                        foreach ($Supplier as $item)
                                                        {
                                                            echo "<option value='$item->sup_ID'>$item->sup_company</option>";

                                                        }
                                                    ?>

                                                </select>

                                            </div>

                                             <div class="form-group col-md-3">
                                            
                                              <input type="Date" class="form-control" id="grn_ordate" name="grn_orderno" placeholder="">
                                             </div>
                                      </div> 
	</form>


  <?php
  echo "<body background='assets/images/green.jpg'?>";
    ?>
</div>
      <div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-2">
                      <div class="widget-box widget-color-blue" id="widget-box-2">
                        <div class="widget-header">
                          <h5 class="widget-title bigger lighter">
                            <i class="ace-icon fa fa-table"></i>
                            Tables & Colors
                          </h5>

                          <div class="widget-toolbar widget-toolbar-light no-border">
                            <select id="simple-colorpicker-1" class="hide">
                              <option selected="" data-class="blue" value="#307ECC">#307ECC</option>
                              <option data-class="blue2" value="#5090C1">#5090C1</option>
                              <option data-class="blue3" value="#6379AA">#6379AA</option>
                              <option data-class="green" value="#82AF6F">#82AF6F</option>
                              <option data-class="green2" value="#2E8965">#2E8965</option>
                              <option data-class="green3" value="#5FBC47">#5FBC47</option>
                              <option data-class="red" value="#E2755F">#E2755F</option>
                              <option data-class="red2" value="#E04141">#E04141</option>
                              <option data-class="red3" value="#D15B47">#D15B47</option>
                              <option data-class="orange" value="#FFC657">#FFC657</option>
                              <option data-class="purple" value="#7E6EB0">#7E6EB0</option>
                              <option data-class="pink" value="#CE6F9E">#CE6F9E</option>
                              <option data-class="dark" value="#404040">#404040</option>
                              <option data-class="grey" value="#848484">#848484</option>
                              <option data-class="default" value="#EEE">#EEE</option>
                            </select>
                          </div>
                        </div>

                        <div class="widget-body">
                          <div class="widget-main no-padding">
                            <table class="table table-striped table-bordered table-hover">
                              <thead class="thin-border-bottom">
                                <tr>
                                  <th>
                                    <i class="ace-icon fa fa-user"></i>
                                    User
                                  </th>

                                  <th>
                                    <i>@</i>
                                    Email
                                  </th>
                                  <th class="hidden-480">Status</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td class="">Alex</td>

                                  <td>
                                    <a href="#">alex@email.com</a>
                                  </td>

                                  <td class="hidden-480">
                                    <span class="label label-warning">Pending</span>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="">Fred</td>

                                  <td>
                                    <a href="#">fred@email.com</a>
                                  </td>

                                  <td class="hidden-480">
                                    <span class="label label-success arrowed-in arrowed-in-right">Approved</span>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="">Jack</td>

                                  <td>
                                    <a href="#">jack@email.com</a>
                                  </td>

                                  <td class="hidden-480">
                                    <span class="label label-warning">Pending</span>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="">John</td>

                                  <td>
                                    <a href="#">john@email.com</a>
                                  </td>

                                  <td class="hidden-480">
                                    <span class="label label-inverse arrowed">Blocked</span>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="">James</td>

                                  <td>
                                    <a href="#">james@email.com</a>
                                  </td>

                                  <td class="hidden-480">
                                    <span class="label label-info arrowed-in arrowed-in-right">Online</span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.span -->
                  </div><!-- /.row -->                               
                                                    
 <?php
include "foot.php";
?>
