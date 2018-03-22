<?php
require 'config.php';
$conn = connection();
$sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id=p.pro_firmid
ORDER BY cat_name ASC";
$data = $conn->query($sql);
$cat_dat = "SELECT * FROM category order by cat_name ASC";
$cat_dat = $conn->query($cat_dat);
$cat_dat1 = "SELECT * FROM category order by cat_name ASC";
$cat_dat1 = $conn->query($cat_dat1);
$firm_data = "SELECT * FROM firm order by firm_name ASC";
$firm_data = $conn->query($firm_data);
$firm_data1 = "SELECT * FROM firm order by firm_name ASC";
$firm_data1 = $conn->query($firm_data1);
$conn=null;

?>
<!--product modal open -->
<div id="form-product" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
  <div class="modal-dialog custom-width" style="height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><strong>ADD NEW PRODUCT</strong></h3>
      </div>
      <div class="modal-body">
            <!-- <div class="form-group">
              <label>Product Name</label>
              <input type="text" placeholder="enter product name" id="pro_name" required="" class="form-control input-xs parsley-error">
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <input type="text" placeholder="enter product description" id="pro_des" required="" class="form-control input-xs parsley-error">
            </div> -->
            <div class="form-group">
              <label>Select Firm</label>
              <select class="form-control input-xs" id="pro_firmid" required="" onchange="get_mea()">
                <option value="">select firm</option>                
                <?php foreach ($firm_data as $fd) { ?>
                <option value="<?php echo $fd['firm_id']; ?>"><?php echo ucwords($fd['firm_name']); ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Choose Category</label>
              <select class="form-control input-xs" id="pro_grp" required="" onchange="get_mea()">
                <option value="">select group</option>                
                <?php foreach ($cat_dat as $row) { ?>
                <option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Choose Measurement</label>
              <span id="mea_data">
                <select class="form-control input-xs" id="pro_ty" required=""></select>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="number" min="0.00" max="" step="0.01" id="pro_price" placeholder="enter product price" required="" class="form-control input-xs">
              </div>
              <div class="form-group col-md-12">
                <div class="col-md-4">
                  <label>CGST(%)</label>
                  <input type="number" min="0.00" max="" step="0.01" id="cgst" placeholder="Enter CGST" required="" class="form-control input-xs">
                </div>
                <div class="col-md-4">
                  <label>IGST(%)</label>
                  <input type="number" min="0.00" max="" step="0.01" id="igst" placeholder="Enter IGST" required="" class="form-control input-xs">
                </div>
                <div class="col-md-4">
                  <label>SGST(%)</label>
                  <input type="number" min="0.00" max="" step="0.01" id="sgst" placeholder="Enter SGST" required="" class="form-control input-xs">
                </div>
              </div>
              <div class="form-group">
                <label>Quantity</label>
                <input type="number" min="0" max="" step="1" id="pro_qty" placeholder="enter quantity of product" required="" class="form-control input-xs">
              </div>          
            </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
              <button type="submit" onclick="add_pro();" data-dismiss="modal" class="btn btn-dark md-close">Proceed</button>
            </div>
          </div>
        </div>
      </div>
      <!--product modal close -->
      <!--category modal open-->
      <div id="form-category" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-danger">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title"><strong>ADD NEW CATEGORY</strong></h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" id="acat_name" placeholder="enter category name" required="" class="form-control input-xs parsley-error">
            </div>
            <div class="form-group">
              <label>Category Description</label>
              <textarea class="form-control input-xs" id="acat_des" placeholder="enter category description..."></textarea>
            </div>
            
                        
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" onclick="add_cat();" data-dismiss="modal" class="btn btn-danger md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
      <!-- category modal close -->
      <!-- measurement modal open -->
      <div id="form-measurement" tabindex="-1" role="dialog" class="modal fade colored-header">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #FBBC05;">
            <button type="button"  data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title"><strong>ADD NEW MEASUREMENT</strong></h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Measurement Name or Type</label>
              <input type="text" id="ty_name" placeholder="enter measurement name or type" required="" class="form-control input-xs parsley-error">
            </div>
            <div class="form-group">
              <label>Choose Group</label>
               <select class="form-control input-xs" id="ty_grp" required="">
                <option value="">Select group</option>                
                <?php foreach ($cat_dat1 as $row) { ?>
                  <option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
                <?php } ?>
              </select>
            </div>           
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" onclick="add_ty();" data-dismiss="modal" class="btn btn-warning md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <!-- measurement modal close -->
    <!-- firm modal open -->
    <div id="form-firm" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
      <div class="modal-dialog custom-width" style="height:200px;">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #00796B;">
            <h3 class="modal-title"><strong>ADD NEW FIRM</strong></h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Firm Name</label>
              <input type="text" placeholder="enter firm name" id="firm_name" class="form-control input-xs parsley-error" required="required">
            </div>
            <div class="form-group">
              <label>Firm Description</label>
              <input type="text" placeholder="enter firm description" id="firm_des" class="form-control input-xs parsley-error" required="required">
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <input type="number" placeholder="enter phone number" id="firm_no" class="form-control input-xs parsley-error" required="required">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" placeholder="enter firm address" id="firm_add" class="form-control input-xs parsley-error" required="required">
            </div>                   
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" onclick="add_firm();" data-dismiss="modal" class="btn btn-dark md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <!-- firm modal close -->
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-primary">
        <div class="panel-heading"><strong>PRODUCTS DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button data-toggle="modal" data-target="#form-product" class="btn btn-space md-trigger btn-primary btn-big"><i class="icon icon-left mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-primary btn-big" id="pro" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-success">
        <div class="panel-heading"><strong>CATEGORY DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button data-toggle="modal" data-target="#form-category" class="btn btn-space btn-success btn-big"><i class="icon mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-success btn-big" id="cat" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-warning">
        <div class="panel-heading"><strong>MEASUREMENT DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button data-toggle="modal" data-target="#form-measurement" class="btn btn-space btn-warning btn-big"><i class="icon mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-warning btn-big" id="ty" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-primary" style="border-top-color: #009688;">
        <div class="panel-heading"><strong>FIRM DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button data-toggle="modal" data-target="#form-firm" class="btn btn-space btn-big" style="background-color: #009688; color: white;"><i class="icon mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-big" style="background-color: #009688; color: white;" id="firm" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-primary" style="border-top-color: #F27C21;">
        <div class="panel-heading"><strong>SELLER BILLING DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button class="btn btn-space btn-big" style="background-color: #F27C21; color: white;" onclick="window.location='sbill.php';"><i class="icon mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-big" style="background-color: #F27C21; color: white;" id="show_seller_bill" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-border-color panel-border-color-primary" style="border-top-color: #90A4AE;">
        <div class="panel-heading"><strong>STOCK BILLING DETAILS</strong></div>
        <div class="panel-body">
          <div class="xs-mt-10 xs-mb-10">
            <center>
              <button class="btn btn-space btn-big" style="background-color: #90A4AE; color: white;" onclick="window.location='bill.php';"><i class="icon mdi mdi-shopping-cart-plus"></i> ADD </button>
              <button class="btn btn-space btn-big" style="background-color: #90A4AE; color: white;" id="sb" onclick="callPro(this.id);"><i class="icon mdi mdi-view-list"></i> VIEW </button>
            </center>
          </div>
        </div>
      </div>
    </div>


<!-- add product function -->
<script type="text/javascript">
 function add_pro()
 {
    // var name = $('#pro_name').val();
    // var des = $('#pro_des').val();
    var firm_id = $('#pro_firmid').val();
    var grp = $('#pro_grp').val();
    var ty = $('#pro_ty').val();
    var price = $('#pro_price').val();
    var cgst = $('#cgst').val();
    var igst = $('#igst').val();
    var sgst = $('#sgst').val();
    var qty = $('#pro_qty').val();
    // alert(qty);
    $.ajax({
      type: "POST",
      url: 'pro_add.php',
      data: {firm_id:firm_id,grp:grp,ty:ty,price:price,cgst:cgst,igst:igst,sgst:sgst,qty:qty},
      success:function(msg) {
             // alert(msg);
             $('#srch_pro').html(msg);
           }
         });
    window.location = "index.php";
  }
</script>
<!-- add category function -->
<script>
  function add_cat()
  {
    var name = $('#acat_name').val();
    var des = $('#acat_des').val();
    $.ajax({
      type: "POST",
      url: 'cat_add.php',
      data: {name:name,des:des},
      success:function(msg) {
            //alert(msg);
            $('#srch_cat').html(msg);
         }
    });
    window.location = "cat.php";
  }
</script>
<!-- add measurement function -->
<script>
  function add_ty()
  {
    var name = $('#ty_name').val();
    var grp = $('#ty_grp').val();
    // alert(grp);
    $.ajax({
      type: "POST",
      url: 'ty_add.php',
      data: {name:name,grp:grp},
      success:function(msg) {
            //alert(msg);
            $('#srch_ty').html(msg);
         }
    });
  }
</script>
<!-- add firm function -->
<script>
  function add_firm()
  { 
    var name = $('#firm_name').val();
    var des = $('#firm_des').val();
    var phone = $('#firm_no').val();
    var address = $('#firm_add').val();
    // var grp = $('#firm_grp').val();
    // alert(phone);
    // alert(address);
    $.ajax({
      type: "POST",
      url: 'firm_add.php',
      data: {name:name,des:des,phone:phone,address:address},
      success:function(msg) {
             // alert(msg);
            $('#srch_firm').html(msg);
         }
    });

  }
</script>
<!-- measurement function -->
<script>
  function get_mea()
  {
    var grp = $('#pro_grp').val();
    var firm = $('#pro_firmid').val();
    // alert(grp);
    $.ajax({
      type: "POST",
      url: 'get_pro_grp.php',
      data: {grp:grp,firm:firm},
      success:function(msg) {
            // alert(msg);
            $('#mea_data').html(msg);
         }
    });
  }
</script>