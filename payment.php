<?php
include "to.php";
?>   
<body>
        <form>
            <div class="card">
                <form class="form-horizontal">
                    <div class="form-group col-md-12 col-sm-6 col-xs-12">      
                        <div class="card-body">
                            <h4 class="card-title"><b>Customer Payment </b></h4>
                                        <div class="form-group row">
                                            <label class="col-md-3">Payment </label>
                                    
                                            <div class="col-md-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:20px;">                                                
                                                <optgroup label="Payment Method">
                                                    <option>Cash</option>
                                                    <option>Credit Card</option>
                                                    <option>Cheque</option>
                                                    <option value="Ma">Master</option>
                                                    <option value="vs">VIsa</option>
                                                    <option value="ax">Amex</option>
                                                </optgroup>
                                               
                                                <optgroup label="Debit Card">
                                                    <option value="Ma">Master</option>
                                                    <option value="vs">VIsa</option>
                                                    <option value="ax">Amex</option>
                                                </optgroup>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row">
                                             <label for="amount" class="col-md-3 text-right control-label col-form-label">Amount</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="amount" placeholder="Amount">
                                            </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="discount" class="col-md-3 text-right control-label col-form-label">Discount</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="discount" placeholder="discount">
                                            </div>
                                         </div>
                                        </div>
                                        <div class="form-group row">
                                             <label for="bill" class="col-sm-3 text-right control-label col-form-label">Total Bill</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="discount" placeholder="Total Bill">
                                            </div>
                                        </div>
                                         
                                         <div class="form-group row">
                                             <label for="balance" class="col-md-3 text-right control-label col-form-label">Balance</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="balance" placeholder="Balance">
                                            </div>
                                         </div>
                                         <div class="form-group row">
                                             <label for="points" class="col-md-3 text-right control-label col-form-label">Loyalty Points</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="points" placeholder="Loyalty Points">
                                            </div>
                                         </div>

                                         </div>
                                        </body>

</html>                      


<?php
include "foot.php";
?>                                     