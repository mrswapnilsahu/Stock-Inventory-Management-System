<?php 
  require 'config.php';
  $conn = connection();
  $sql = "select * from product order by pro_name";
  $data = $conn->query($sql);
  $data1 = $conn->query($sql);
  $ty_data = "SELECT * FROM type t inner join category c on t.ty_grp = c.cat_id order by ty_name ASC";
  $ty_data = $conn->query($ty_data);
  $conn=null;

?>

    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-success">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button"  data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title"><strong>ADD NEW GROUP MEASUREMENT</strong></h3>
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
                <?php foreach ($data as $row) { ?>
                  <option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
                <?php } ?>
              </select>
            </div>
            
                        
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" onclick="add_ty();" data-dismiss="modal" class="btn btn-success md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL CLOSE -->
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-full-color panel-full-warning">
      <div class="panel-heading panel-heading-contrast" style="background-color: #3F51B5;"><strong>BILLING DETAILS</strong>
        <div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
      </div>
      <div class="panel-body" style="background-color: #303F9F;">
        <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Group</label>
          <select class="form-control input-xs" id="sty_grp" required="" onchange="srch_ty();">
            <option value="">Select group</option>                
            <?php foreach ($data1 as $row) { ?>
            <option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
            <?php } ?>
          </select>  
        </div>

        <div class="col-md-4">
          <label class="control-label ">&nbsp;</label><br>
          <div class="btn-group btn-space">
            <button data-toggle="modal" data-target="#form-bp1" class="btn btn-space md-trigger btn-danger"><i class="icon icon-left mdi mdi-shape"></i> ADD MEASUREMENT</button>            
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>Bill</strong>
      </div>
      <div class="panel-body">
        <span id="srch_ty">
        <table class="table table-condensed table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th><center>S. no.</center></th>
              <th><center>Product Name</center></th>
              <th><center>Size</center></th>
              <th><center>CGST</center></th>
              <th><center>Price</center></th>
            </tr>
          </thead>
          <tbody style="color:black;">
           <?php $s=0;
           foreach ($ty_data as $row){ $s++; ?>
            <tr>
              <td><center><?php echo $s; ?></center></td>
              <td><input type="text" name="pro_name" value=""></td>
              <td><?php echo ucwords($row['cat_name']); ?></td>
              <td><?php echo ucwords($row['cgst']); ?></td>
               <td><?php echo ucwords($row['cat_des']); ?></td>
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
<script>
  function srch_ty()
  {
    var sname = $('#sty_name').val();
    var sgrp = $('#sty_grp').val();
    // alert(sname);
    $.ajax({
      type: "POST",
      url: 'srch_ty.php',
      data: {sname:sname,sgrp:sgrp},
      success:function(msg) {
            //alert(msg);
            $('#srch_ty').html(msg);
         }
    });
  }
</script>