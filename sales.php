<?php
 
include_once("c_sale.php");
$u = new  sale();
$arr = $u->getall();
if(isset($_POST["pname"]))
{

        $u->pname = $_POST['pname'];
        $u->pqty = $_POST['pqty'];
        $u->pval = $_POST['pval'];
        $u->discount = $_POST['discount'];
        $u->ntot = $_POST['ntot']; 
    
}

$d = new  sale();
$sale = $d->getall();


include("topadmin.php"); 
?> 

<body>
<form class="inline-form" method="POST" action="sales.php" class="form-horizontal" id="f1">
 <div class="card">

 	<div class="card-body wizard-content">  
            <div class="form-group col-md-12 col-sm-6 col-xs-12"> 

    <div class="row">

    <div class="form-group col-sm-3">
    <label for="pname">Name</label>
    <input type="text" class="form-control" name="pname" id="pname" >
	
  	</div>

  
   <div class="form-group col-sm-2">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="pqty" id="pqty" >
	
  </div>
  
  <div class="form-group col-sm-3">
    <label for="value">Value</label>
    <input type="text" class="form-control" name="pval" id="pval">
  </div>

  <div class="form-group col-sm-2">
    <label for="discount">Discount %</label>
    <input type="number" class="form-control" name="discount" id="discount">
  </div>
  
  <div class="form-group col-sm-2">
    <label for="button"></label>
    <input type="button" class="form-control btn btn-info" onclick="setval()"; id="btnad" value="Add"  >
  </div>
		</div>
 	</div>  
</div>
</div>



<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Value</th>
			<th>Total</th>
			<th>Discount %</th>
			<th>Discount Amount</th>
			<th>Net Total</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody id="tbody">
	

	</tbody>


	    <tfoot>
	    <td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><B>Payment :<span id="netot"></span></B></td>
		<td></td>
	</tfoot>

	<tfoot>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><B>Gross Total : <span id="gtot"></span></B></td>
	</tfoot>
	<tfoot>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><B>Total Discount : <span id="tdis"></span></B></td>
	</tfoot>

</table>
	
<div class="form-group col-sm-2">
    <label for="button"></label>
    <input type="text" class="form-control btn btn-info" onclick="save()"; id="btnsave" value="save"  >
  </div>
	
</form>
 </body>

<?php 
	include("foot.php"); 
?> 


  
  <script>
  
  
  	$("#pname").keypress(function(e){
		if(e.charCode ==13)
			$("#pqty").focus();
	});

	$("#pqty").keypress(function(e){
		if(e.charCode ==13)
			$("#pval").focus();
	});

	$("#pval").keypress(function(e){
		if(e.charCode ==13)
			$("#discount").focus();
	});

	$("#discount").keypress(function(e){
		if(e.charCode ==13)
			$("#btnad").focus();
	});



	$("#btnad").click(function (){
		add_items();
		clear();
		cal_tot();
		cal_dis();
		cal_ntot();
	});

	
	function add_items(){
		//alert (3);
		var pn = $("#pname").val(); //add item to sell
		var pq = $("#pqty").val();
		var pv = $("#pval").val(); 
		var tot=  parseFloat(pq) * parseFloat(pv);	//Calculate total
		var pd = $("#discount").val();
		var dis= (parseFloat(tot) * parseFloat(pd)/100).toFixed(2); //Calculate discount
		var ntot=parseFloat(tot)-parseFloat(dis).toFixed(2); //Calculate net total
	
		$("#tbody").append("<tr><td>" + pn + "</td><td>" + pq + "</td><td>" + pv + "</td><td class='tot'> " + tot + "</td><td>" + pd + "</td><td class='dis'> " + dis + "</td><td class='ntot'> " + ntot + "</td><td onclick='del(this)'>Delete</td></tr>");

//<input type='text' id='ntot' readonly='readonly' name='ntot[]'' value='" +ntot+ "'>
	}
	
	
	function clear(){
		$("#pname").val("");
		$("#pqty").val("");
		$("#pval").val("");
		$("#discount").val("");
		$("#pname").focus();
	}

	function cal_tot(){
		gtot=0;
		
		var t= $(".tot");
		$.each(t,function(i,item){
			
			gtot= gtot+ parseFloat($(t[i]).html()) ;
			
			//alert (   v   );
			
		})
		$("#gtot").html(gtot);
	}
	

	function cal_dis(){
		tdis=0;
		
		var d= $(".dis");
		$.each(d,function(i,item){
			
			tdis= tdis+ parseFloat($(d[i]).html()) ;
			
			//alert (   v   );
			
		})
		$("#tdis").html(tdis);
	}

	function cal_ntot(){
		netot=0;
		
		var nt= $(".ntot");
		$.each(nt,function(i,item){
			
			netot= netot+ parseFloat($(nt[i]).html()) ;
			
			//alert (   v   );
			
		})
		$("#netot").html(netot);
	}
	
		
	

	function del(x){
		$(x).parent().remove();
		cal_tot();
		cal_dis();
		cal_ntot();
	}	


	
</script>