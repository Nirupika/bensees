<?php
include "to.php";
?>   
<body>
<h4 class="page-title"> <b>Discount</b> </h4>

    
        <form>               
        <div 
                <div class="card">
                    <div class="card-body wizard-content">  
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">               
                    
                                
                                   <div class="form-group row">
                                        <label for="dis_ID" class="col-sm-3 text-right control-label col-form-label">Discount Code*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dis_ID" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dis_name" class="col-sm-3 text-right control-label col-form-label">Discount Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dis_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dis_description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dis_description" placeholder="">
                                        </div>
                                    </div>
                             
                                     <div class="form-group row">
                                        <label for="brand_ID" class="col-sm-3 text-right control-label col-form-label">Brand Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="brand_ID" placeholder="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="dis_status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dis_status" placeholder="">
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
        </form>

</body>

</html>




<?php
include "foot.php";
?> 