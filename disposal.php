<?php
include "to.php";
?>   
<body>
<h4 class="page-title"> <b>Disposal Items</b> </h4>

    
        <form>               
        <div 
                <div class="card">
                    <div class="card-body wizard-content">  
                                     
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">   
                    
                                
                                   <div class="form-group row">
                                        <label for="disposal_ID" class="col-sm-3 text-right control-label col-form-label">Disposal Code*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="disposal_ID" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="item_iname" class="col-sm-3 text-right control-label col-form-label">Item Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="item_iname" placeholder="">
                                        </div>
                                                                                 
                                </div>
                                     <div class="form-group row">
                                        <label for="cus_doj" class="col-sm-3 text-right control-label col-form-label"> Date of Disposal </label>       
                                        <div class="col-sm-9">
                                            <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                      
                                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                         
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="disposal_description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="disposal_description" placeholder="">
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                </div>
            </div>

</body>

</html>




<?php
include "foot.php";
?> 