<?php
include "to.php";
?>   
<body>
        <form>
            <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title"><b>purchase Order</b></h4>
                                        <div class="form-group row">
                                            <label class="col-md-5 m-t-15">Item </label>
                                    
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:20px;">
                                                <option>Item ID</option>
                                                <optgroup label="Biscuts">
                                                    <option value="Ml">Maliban</option>
                                                    <option value="mh">Manchee</option>
                                                </optgroup>
                                                <optgroup label="Bathe Soap">
                                                    <option value="ul">Uniliver</option>
                                                    <option value="he">Hemas</option>
                                                    <option value="hr">Harischandra</option>
                                                
                                                </optgroup>
                                                </select>
                                        </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-md-5" for="item Name">Item Name</label>
                                        <div class="col-md-7">
                                            <input type="text" id="item Name" class="form-control" placeholder="Item Name" disabled>
                                         </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-5 m-t-15">Brand </label>
                                    
                                        <div class="col-md-7">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:20px;">
                                                <option>Brand</option>
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
                                    </div>
                                    <div class="form-group row">                                
                                            <label for "quantity" class="col-md-4" for="item Name">Quantity</label>
                                        <div class="col-md-8">
                                            <input type="text" id="item Name" class="form-control" placeholder="Quantity">
                                         </div>
                                        
                                        </div>

                                    <div class="form-group row">
                                        <label class="col-md-5 m-t-15" for="sup">Supplier</label>
                                        <div class="col-sm-7">
                                            <div class="col-md-12">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:20px;">
                                                <option>Supplier</option>
                                                <optgroup label="Biscuts">
                                                    <option value="Ml">Maliban</option>
                                                    <option value="mh">Manchee</option>
                                                </optgroup>
                                                <optgroup label="Bathe Soap">
                                                    <option value="ul">Uniliver</option>
                                                    <option value="he">Hemas</option>
                                                    <option value="hr">Harischandra</option>
                                                
                                                </optgroup>
                                            </select>
                                            </div>
                                        </div>  
                                    </div>
                                    
                            <div class="border-top">
                                    <div class="card-body">
                                       <br/> <input type="button" class="btn btn-info" value="Add to List">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title m-b-0">PO List</h5>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Item ID</th>
                                      <th scope="col">Item Name</th>
                                      <th scope="col">Brand</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Supplier</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th Item ID="row">1</th>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <th Item Name="row">2</th>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <th Brand="row">3</th>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <th Quantity="row">4</th>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <tr>
                                      <th Supplier="row">5</th>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    </tr>
                                  </tbody>
                            </table>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <input type="submit" class="btn btn-info" value="Send">  
                                    
                        </div>      
        </body>

</html>                      


<?php
include "foot.php";
?> 
