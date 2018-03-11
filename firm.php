<?php
  require 'config.php';
  $conn = connection();
  $sql = "SELECT * FROM firm ORDER BY firm_name ASC";
  $data = $conn->query($sql);

  $conn=null;

?>
    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
      <div class="modal-dialog custom-width" style="height:200px;">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #00796B;">
            <h3 class="modal-title"><strong>ADD NEW FIRM</strong></h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Firm Name</label>
              <input type="text" placeholder="enter firm name" id="firm_name" required="" class="form-control input-xs parsley-error">
            </div>
            <div class="form-group">
              <label>Firm Description</label>
              <input type="text" placeholder="enter firm description" id="firm_des" required="" class="form-control input-xs parsley-error">
            </div>
                               
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" onclick="add_firm();" data-dismiss="modal" class="btn btn-dark md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL CLOSE -->
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-full-color panel-primary">
      <div class="panel-heading panel-heading-contrast" style="background-color: #009688;"><strong>FIRM DETAILS</strong>
        <div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
      </div>
      <div class="panel-body" style="background-color: #00796B;">
        <div class="col-md-3">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Name</label>      
          <input type="text" value="" placeholder="Enter Name..." id="sfirm_name" onkeyup="srch_firm();" class="form-control input-xs">    
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
            <button data-toggle="modal" data-target="#form-bp1" class="btn btn-space md-trigger btn-danger"><i class="icon icon-left mdi mdi-store"></i> ADD FIRM</button>            
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>Firm table</strong>
      </div>
      <div class="panel-body">
        <span id="srch_pro">
        <table class="table table-condensed table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th><center>S. no.</center></th>
              <th><center>Name</center></th>
              <th><center>Description</center></th>
 
            </tr>
          </thead>
          <tbody style="color:black;">
            <?php $s=0;
                foreach ($data as $row){ $s++; ?>
            <tr>
              <td><center><?php echo $s; ?></center></td>
              <td><?php echo ucwords($row['firm_name']); ?></td>
              <td><?php echo ucwords($row['firm_des']); ?></td>

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
  function add_firm()
  { 
    var name = $('#firm_name').val();
    var des = $('#firm_des').val();
    var grp = $('#firm_grp').val();
    // alert(qty);
    alert(name);
    $.ajax({
      type: "POST",
      url: 'firm_add.php',
      data: {name:name,des:des,
      success:function(msg) {
             // alert(msg);
            $('#srch_firm').html(msg);
         }
    }});

  }
</script>
<script>
  function srch_firm()
  {
      var name = $('#sfirm_name').val();
   
      // alert(name);
      $.ajax({
      type: "POST",
      url: 'srch_firm.php',
      data: {name:name},
      success:function(msg) {
             // alert(msg);
            $('#srch_firm').html(msg);
         }
    }); 

  }
</script>

