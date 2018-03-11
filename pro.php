<?php
  require 'config.php';
  $conn = connection();
  $sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid 
    ORDER BY pro_name ASC";
  $data = $conn->query($sql);
  $cat_dat = "SELECT * FROM category order by cat_name ASC";
  $cat_dat = $conn->query($cat_dat);
  $cat_dat1 = "SELECT * FROM category order by cat_name ASC";
  $cat_dat1 = $conn->query($cat_dat1);
  $conn=null;

?>
    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
      <div class="modal-dialog custom-width" style="height:200px;">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><strong>ADD NEW PRODUCT</strong></h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" placeholder="enter product name" id="pro_name" required="" class="form-control input-xs parsley-error">
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <input type="text" placeholder="enter product description" id="pro_des" required="" class="form-control input-xs parsley-error">
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
                <select class="form-control input-xs" id="pro_ty" required="">
                  <option value="">select type</option>
                </select>
              </span>
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
<!-- MODAL CLOSE -->
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-full-color panel-full-primary">
      <div class="panel-heading panel-heading-contrast"><strong>PRODUCT DETAILS</strong>
        <div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
      </div>
      <div class="panel-body">
        <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Name</label>      
          <input type="text" value="" placeholder="Enter Name..." id="spro_name" onkeyup="srch_pro();" class="form-control input-xs">    
        </div>
        <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Search by category</label>      
          <select class="form-control input-xs chosen-select" id="spro_cat" onchange="srch_pro();">
            <option value="">select category</option>
            <?php foreach ($cat_dat1 as $row) { ?>
            <option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
            <?php } ?>
          </select>    
        </div>
        <!-- <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Search by measurement</label>      
          <select class="form-control input-xs" required="">
            <option value="">select measurement</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>    
        </div> -->
        <div class="col-md-3">
          <label class="control-label ">&nbsp;</label><br>
          <div class="btn-group btn-space">
            <button data-toggle="modal" data-target="#form-bp1" class="btn btn-space md-trigger btn-danger"><i class="icon icon-left mdi mdi-shopping-cart-plus"></i> ADD PRODUCT</button>            
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>Product table</strong>
      </div>
      <div class="panel-body">
        <span id="srch_pro">
        <table class="table table-condensed table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th><center>S. no.</center></th>
              <th><center>Name</center></th>
              <th><center>Description</center></th>
              <th><center>Category</center></th>
              <th><center>Type</center></th>
              <th><center>Price</center></th>
              <th><center>CGST</center></th>
              <th><center>IGST</center></th>
              <th><center>SGST</center></th>
              <th><center>Quantity</center></th>
              <th><center>Status</center></th>
            </tr>
          </thead>
          <tbody style="color:black;">
            <?php $s=0;
                foreach ($data as $row){ $s++; ?>
            <tr>
              <td><center><?php echo $s; ?></center></td>
              <td><?php echo ucwords($row['pro_name']); ?></td>
              <td><?php echo ucwords($row['pro_des']); ?></td>
              <td><?php echo ucwords($row['cat_name']); ?></td>
              <td><?php echo ucwords($row['ty_name']); ?></td>
              <td><?php echo ucwords($row['pro_price']); ?></td>
              <td><?php echo ucwords($row['cgst'])."%"; ?></td>
              <td><?php echo ucwords($row['igst'])."%"; ?></td>
              <td><?php echo ucwords($row['sgst'])."%"; ?></td>
              <td><?php echo ucwords($row['pro_qty']); ?></td>
              <td><?php
                if ($row['pro_qty'] > 0) {
                  echo "Available";
                }else{
                  echo "<span style='color:red;'>Out of stock</span>";
                }
               ?></td>
            </tr>
            <?php   } ?>
          </tbody>
        </table>
        </span>
      </div>
    </div>
  </div>
</div>

<script>
  function callPro(id)
  {
    var pro = id;
    // alert(id);
    $.ajax({
      type: "POST",
      url: 'nav.php',
      data: {pro:pro},
      success:function(msg) {
            // alert(msg);
            $('#output').html(msg);
         }
    });
  }
</script>
<script>
  function get_mea()
  {
    var grp = $('#pro_grp').val();
    // alert(grp);
    $.ajax({
      type: "POST",
      url: 'get_pro_grp.php',
      data: {grp:grp},
      success:function(msg) {
            // alert(msg);
            $('#mea_data').html(msg);
         }
    });
  }
</script>
<script>
  function add_pro()
  {
    var name = $('#pro_name').val();
    var des = $('#pro_des').val();
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
      data: {name:name,des:des,grp:grp,ty:ty,price:price,cgst:cgst,igst:igst,sgst:sgst,qty:qty},
      success:function(msg) {
             // alert(msg);
            $('#srch_pro').html(msg);
         }
    });

  }
</script>
<script>
  function srch_pro()
  {
      var name = $('#spro_name').val();
      var cat = $('#spro_cat').val();
      // alert(name);
      $.ajax({
      type: "POST",
      url: 'srch_pro.php',
      data: {name:name,cat:cat},
      success:function(msg) {
             // alert(msg);
            $('#srch_pro').html(msg);
         }
    }); 

  }
</script>

