<?php
  require 'config.php';
  $conn = connection();
  $sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id=p.pro_firmid
    ORDER BY cat_name ASC";
  $data = $conn->query($sql);
  $firm_data1 = "SELECT * FROM firm order by firm_name ASC";
  $firm_data1 = $conn->query($firm_data1);
  $conn=null;

?>
    
<!-- MODAL CLOSE -->
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-full-color panel-full-primary">
      <div class="panel-heading panel-heading-contrast" style="background-color: #F44336
;"><strong>PRODUCT LIST</strong>
        <div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
      </div>
      <div class="panel-body" style="background-color: #B71C1C;">
        <!-- <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Name</label>      
          <input type="text" value="" placeholder="Enter Name..." id="spro_name" onkeyup="srch_pro();" class="form-control input-xs">    
        </div> -->
        <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Select Firm</label>      
          <select class="form-control input-xs chosen-select" id="spro_cat" onchange="srch_pro();">
            <option value="">select firm</option>
            <?php foreach ($firm_data1 as $row) { ?>
            <option value="<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?></option>
            <?php } ?>
          </select>    
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>Product List table</strong>
      </div>
      <div class="panel-body">
        <span id="srch_pro">
        <table class="table table-condensed table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th><center>Category</center></th>
              <th><center>Type</center></th>
              <th><center>Price</center></th>
            </tr>
          </thead>
          <tbody style="color:black;">
            <?php 
             foreach ($data as $row){  ?>
            <tr>
              <tr><?php echo ucwords($row['cat_name']); ?></tr>
              <tr><?php echo ucwords($row['ty_name']); ?></tr>
              <tr><?php echo ucwords($row['pro_price']); ?></tr>
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
<script>
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

  }
</script>
<script>
  function srch_pro()
  {
      // var name = $('#spro_name').val();
      var cat = $('#spro_cat').val();
      var firm = $('#spro_firm').val();
      // alert(name);
      $.ajax({
      type: "POST",
      url: 'srch_pro.php',
      data: {name:name,cat:cat,firm:firm},
      success:function(msg) {
             // alert(msg);
            $('#srch_pro').html(msg);
         }
    }); 

  }
</script>

