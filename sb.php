<?php
 
 require 'config.php';
 $conn = connection();
 $sql = "SELECT * FROM bill_records ORDER BY bill_entrydt DESC";
 $data = $conn->query($sql);

?>

<!-- MODAL OPEN -->
<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
  <div class="modal-dialog custom-width" style="height:200px;">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #607D8B;">
        <h3 class="modal-title"><strong>BILL</strong></h3>
      </div>
      <div class="modal-body">
        <span id="view_bill">
          
        </span>
      </div>
    </div>
  </div>
</div>
<!-- MODAL CLOSE -->

<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-full-color panel-primary">
      <div class="panel-heading panel-heading-contrast" style="background-color: #90A4AE;"><strong>BILLING DETAILS</strong>
        <div class="tools"><span class="icon mdi"></span></div><span class="panel-subtitle"></span>
      </div>
      <div class="panel-body" style="background-color: #607D8B;">
        <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Name</label>      
          <input type="text" placeholder="Enter Name..." id="sfirm_name" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div>
        <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by GSTIN</label>      
          <input type="text" placeholder="Enter GSTIN" id="gstin" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div>
        <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Bill no.</label>      
          <input type="text" placeholder="Enter bill no." id="bill_no" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div> 
        </div>
      </div>
    </div>

  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>BILL DETAILS</strong></div>
      <div class="panel-body">
        <span id="srch_showbill">
        <table class="table table-condensed table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th><center>S. no.</center></th>
              <th><center>Bill no.</center></th>
              <th><center>Name</center></th>
              <th><center>GSTIN</center></th>
              <th><center>Total Amount</center></th>
              <th><center>Transportation Charge</center></th>
              <th><center>Transport no.</center></th>
              <th><center>Entry Date</center></th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          <tbody style="color:black;">
            <?php $s=0;
                foreach ($data as $row){ $s++; ?>
            <tr>
              <td><center><?php echo $s; ?></center></td>
              <td><center><strong><?php echo $row['bill_id']; ?></strong></center></td>
              <td><strong><?php echo ucwords($row['bill_name']); ?></strong></td>
              <td><strong><?php echo $row['bill_gst']; ?></strong></td>
              <td><strong><?php echo $row['bill_amt']; ?></strong></td>
              <td><strong><?php echo $row['bill_tchrg']; ?></strong></td>
              <td><strong><input type="text" name="trans_no" value="<?php echo $row['bill_tno'];?>" onkeyup="fill_tno(<?php echo $row['bill_id']; ?>, this.value);" class="form-control input-xs"></td>
              <td><strong><?php echo $row['bill_entrydt']; ?></td>
              <td><center><button data-toggle="modal" onclick="view_bill(<?php echo $row['bill_id']; ?>)" data-target="#form-bp1" class="btn btn-danger text-center">View</button></center></td>
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
  function srch_showbill()
  {
      var name = $('#sfirm_name').val();
      var gstin = $('#gstin').val();
      var bill_no = $('#bill_no').val();
      // alert(name);
      $.ajax({
      type: "POST",
      url: 'srch_showbill.php',
      data: {name:name,gstin:gstin,bill_no:bill_no},
      success:function(msg) {
             alert(msg);
            $('#srch_showbill').html(msg);
         }
    }); 

  }
</script>
<script type="text/javascript">
  function fill_tno(id,value)
  {
    $.ajax({
      type: "POST",
      url: 'fill_tno.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function view_bill(id)
  {
    // alert(id);
    $.ajax({
      type: "POST",
      url: 'view_bill.php',
      data: {id:id},
      success:function(msg) {
            // alert(msg);
            $('#view_bill').html(msg);
         }
    });
  }
</script>

