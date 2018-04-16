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
		<div class="panel panel-full-color panel-primary">
			<div class="panel-heading panel-heading-contrast" style="background-color: #90A4AE;"><strong>STOCK BILLING</strong>
				<div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
			</div>
		</div>
	</div>

	<form type="POST" action="stock_billing.php" onsubmit="calc_amt();">
		<div class="col-sm-12">
			<div class="panel panel-default panel-table">
				<div class="panel-heading "> 

					<div class="col-md-6">
						<div class="col-md-3">
							<label style="font-size: 18px; "><strong>Name&nbsp;:</strong></label>
						</div>
						<div class="col-md-3" style="margin-left: -10%;">
							<input type="text" name="bill_name" id="bill_name" value="" style="height: 25px;" required="">
						</div>								
					</div>
					<div class="col-md-6" style="float: right;">
						<div class="col-md-2">
							<label style="font-size: 18px;">Tax :</label>
						</div>
						<div class="col-md-4">
							<select class="form-control input-xs" id="pro_tax_type" required="">
								<option value="">Select Tax</option>  								
								<option value="1">CGST + SGST</option>
								<option value="2">IGST</option>
							</select>
						</div>								
					</div>       
					<!-- div class="btn-group btn-space" style="float: right;">
						<button class="btn btn-space md-trigger btn-danger" onclick="printDiv('printableArea');"><i class="icon icon-left mdi mdi-assignment"></i>&nbsp;Print</button>            
					</div> -->         
				</div>
				<div class="panel-body">
					<span id="srch_ty">
						
						<table class="table table-condensed table-hover table-bordered table-striped">
							<thead>
								<tr>
									<th><center>S. no.</center></th>
									<th><center>Firm</center></th>
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
						<!-- <span style="margin-left: 36px;">
							<label>GST no.&nbsp;:
								<input type="number" name="gst_no" id="gst_no" value="" >
							</label>
							<label>Transportation Charge&nbsp;:
								<input type="number" name="trans_chg" id="trans_chg" value="" >
							</label>
							<label>Transportation no.&nbsp;:
								<input type="text" name="trans_no" id="trans_no" value="" >
							</label>
						</span> -->
						<br>
						<input type="hidden" name="total_amt" id="total_amt" value="" required="">
						<input type="hidden" name="bill_type" value="1">
						<!-- <input type="submit" class="btn btn-space md-trigger btn-danger" name=""> -->
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="col-md-5">
									<label style="font-size: 18px; ">Transport Charge&nbsp;:</label>
								</div>
								<div class="col-md-1">
									<input type="text" name="tr_amt" id="tr_amt" class="form-control input-xs" value="0" style="width: 100px;" >
								</div>								
							</div>
							<div class="col-md-2" style="margin-left: -12%">
								<a class="btn btn-space md-trigger btn-warning" onclick="add_row();" style="float: right;"><i class="icon icon-left mdi mdi-plus"></i>&nbsp;ADD PRODUCT</a>
							</div>
							<div class="col-md-2">
								<button type="submit" style="width:146px;" class="btn btn-space md-trigger btn-success" formtarget="_blank"><i class="icon icon-left mdi mdi-assignment"></i>&nbsp;Print Bill</button> 
							</div>
						</div>						
					</span>
				</div>
			</div>
		</div>
	</div>
</form>
</div>

