<?php
include "to.php";
?>   
<body>
        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title"><b>Order Apporval</b></h4>                           
                                    <div class="form-group row">
                                    
                                    <label class="col-md-3 m-t-15">Approval </label>
                                        
                                            <div class="col-md-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:20px;">
                                                <option>Order Number</option>
                                                <optgroup label="Biscuts">
                                                    <option value="Ml">Maliban</option>
                                                    <option value="mh">Manchee</option>
                                                </optgroup>
                                                <optgroup label="Bathe Soap">
                                                    <option value="ul">Uniliver</option>
                                                    <option value="he">Hemas</option>
                                                    <option value="hr">Harischandra</option>
                                                
                                                </optgroup>
                                            </div>
                                        
                                    <div class="border-top">
                                        <div class="card-body">
                                        <button type="submit" class="btn btn-info">Approve</button>
                                        <button type="submit" class="btn btn-info">Edit</button>
                                        <button type="submit" class="btn btn-info">Cancel</button>
                                        </div>
                                    </div>
                                </div>
        </div>
                                

</body>



<?php
include "foot.php";
?> 
</html>