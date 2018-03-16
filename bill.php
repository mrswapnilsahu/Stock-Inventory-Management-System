<?php 
require 'config.php';
$conn = connection();
$sql = "select * from firm order by firm_name";
$data = $conn->query($sql);
$data1 = $conn->query($sql);
$conn=null;
?>
<!-- MODAL CLOSE -->
<div class="col-md-12">
	<div class="col-md-12">
		<div class="panel panel-full-color panel-full-warning">
			<div class="panel-heading panel-heading-contrast" style="background-color: #3F51B5;"><strong>BILLING DETAILS</strong>
				<div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
			</div>
			<div class="panel-body" style="background-color: #303F9F;">
				<div class="col-md-4">    
					<label class="control-label  panel-subtitle" style="color:white;">Select Firm</label>
					<select class="form-control input-xs" id="sty_grp" onchange="">
						<option value="">Select Firm</option>                
						<?php foreach ($data1 as $row) { ?>
						<option value="<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?></option>
						<?php } ?>
					</select>  
				</div>
			</div>
		</div>
	</div>
	<form type="POST" action="billing.php" onsubmit="calc_amt();">
		<div class="col-sm-12">
			<div class="panel panel-default panel-table">
				<div class="panel-heading "><strong>Name&nbsp;:</strong> 
					
					<input type="text" name="bill_name" id="bill_name" value="" style="height: 25px;" required="">       
					<div class="btn-group btn-space" style="float: right;">

						<button class="btn btn-space md-trigger btn-danger" onclick="printDiv('printableArea');"><i class="icon icon-left mdi mdi-assignment"></i>&nbsp;Print</button>            
					</div>         
				</div>
				<div class="panel-body">
					<span id="srch_ty">
						
						<table class="table table-condensed table-hover table-bordered table-striped">
							<thead>
								<tr>
									<th><center>S. no.</center></th>
									<th><center>Description</center></th>
									<th><center>Size</center></th>
									<th><center>Qty Req.</center></th>
									<th><center>Rate</center></th>
									<th><center>Amount</center></th>
								</tr>
							</thead>
							<tbody style="color:black;">
								<tr id="fetch_d_0">

								</tr>
							</tbody>
						</table>
						
						&nbsp;
						<input type="hidden" name="count" id="count" value="0">
						<br>
						<span style="margin-left: 36px;">
							<label>GST no.&nbsp;:
								<input type="number" name="gst_no" id="gst_no" value="" required="">
							</label>
							<label>Transportation Charge&nbsp;:
								<input type="number" name="trans_chg" id="trans_chg" value="" required="">
							</label>
							<label>Transportation no.&nbsp;:
								<input type="text" name="trans_no" id="trans_no" value="" required="">
							</label>
						</span>
						<br>
						<input type="hidden" name="total_amt" id="total_amt" value="" required="">
						<input type="submit" class="btn btn-space md-trigger btn-danger" name="">
						<a class="btn btn-space md-trigger btn-danger" onclick="add_row();" style="float: right;"><i class="icon icon-left mdi mdi-plus"></i>&nbsp;ADD PRODUCT</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</form>
<div id="printableArea" style="display: none;">
	<h2><center><strong>VKS Industry</strong></center></h2><br>
	<label style="font-size: 15px;">M/S:&nbsp;<?php echo "Swapnil Sahu"; ?></label>
	<br>

	<table border="1" class="table table-condensed table-bordered">
		<tr>
			<th><center>S. no.</center></th>
			<th><center>Description</center></th>
			<th><center>Size</center></th>
			<th><center>Qty</center></th>
			<th><center>Rate</center></th>
			<th><center>Amount</center></th>
		</tr>
		<tr>
			<td>1</td>
			<td>Blazer</td>
			<td>32</td>
			<td>3</td>
			<td>500</td>
			<td>1500</td>
		</tr>
		<tr>
			<td colspan="4">Rupees....</td>
			<td>Total</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">GSTIN:</td>
			<td colspan="2">Transportation Charge:</td>
			<td colspan="2">Transportation no:</td>
		</tr>
	</table>
</div>

<script>
	function printDiv(divName) {
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
	}
</script>
<script type="text/javascript">
	function fetch_firm(val)
	{
		value = val;
    // alert(value);
    $.ajax({
    	type: "POST",
    	url: 'fetch_firm_data.php',
    	data: {value:value},
    	success:function(msg) {
        // alert(msg);
        $('#srch_ty').html(msg);
    }
});
}
</script>
<script type="text/javascript">
	function  add_row() {
		var count = parseInt($('#count').val());
		var firm = $('#sty_grp').val();
		var last = count-1;
		var nxt = count;
		$( "#fetch_d_"+last).after( '<tr id="fetch_d_'+nxt+'"></tr>' );
    // alert(count);
    $.ajax({
    	type: "POST",
    	url: 'add_row.php',
    	data: {count:count,firm:firm},
    	success:function(msg) {
        // alert(msg);
        $('#fetch_d_'+count).html(msg);
        $('input[name="count"]').val(count+1);
        $('#sty_grp').attr("disabled","disabled");        
    }
});
}
</script>
<script type="text/javascript">
	function get_size(val,id)
	{
		var arr = id.split('_');
		var count = arr[arr.length-1];
    // alert(count);
    $.ajax({
    	type: "POST",
    	url: 'get_bsize.php',
    	data: {val:val,count:count},
    	success:function(msg) {
        // alert(msg);
        $('#bill_s_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
	function get_pde(id)
	{
		var arr = id.split('_');
		var count = arr[arr.length-1];
		var cat = $('#bill_p_'+count).val();
		var size = $('#bill_s_'+count).val();
    // alert(cat);
    $.ajax({
    	type: "POST",
    	url: 'get_pde.php',
    	data: {cat:cat,size:size,count:count},
    	success:function(msg) {
        // alert(msg);
        $('#bill_a_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
	function calc(id,value)
	{
		var arr = id.split('_');
		var count = arr[arr.length-1];
		var cqty = $('#av_'+count).val();
    // alert(cqty);
    var price = $('#p_'+count).val();
    var amt = price * value;
    $('#to_amt_'+count).val(amt);
    // $("#bill_q_"+count).attr({
    //   "max" : cqty,
    //   "min" : 1
    // });
}
</script>
<script type="text/javascript">
	function calc_amt()
	{
		var count = parseInt($('#count').val());
		var total = 0;
		for (var i = 0; i < count; i++) {
			total = total + parseInt($('#to_amt_'+i).val());
			// alert(total);
		}
		$('#total_amt').val(total);
	}
</script>
