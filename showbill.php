<?php
 

?>
<!-- MODAL OPEN -->
    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-dark">
      <div class="modal-dialog custom-width" style="height:200px;">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #607D8B;">
            <h3 class="modal-title"><strong>BILL</strong></h3>
          </div>
          <div class="modal-body">
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
          <input type="text" value="" placeholder="Enter Name..." id="sfirm_name" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div>
        <!-- <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by GSTIN</label>      
          <input type="text" value="" placeholder="Enter GSTIN" id="gstin" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div> -->
        <div class="col-md-4">    
          <label class="control-label panel-subtitle" style="color:white;">Search by Bill no.</label>      
          <input type="text" value="" placeholder="Enter bill no." id="bill_no" onkeyup="srch_showbill();" class="form-control input-xs">    
        </div> 
        </div>
      </div>
    </div>

  <div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading"><strong>Bill table</strong></div>
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
              <th><center>View</center></th>
            </tr>
          </thead>
          <tbody style="color:black;">
            <?php $s=0;
                // foreach ($data as $row){ $s++; ?>
            <tr>
              <td><center></center></td>
              <td><center></center></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
             <td><input type="text" name="trans_no" class="form-control input-xs"></td>
              <td><center><button data-toggle="modal" data-target="#form-bp1" class="btn btn-danger text-center">View</button></center></td>
            </tr>
            <?php //  } ?>
          </tbody>
        </table>
        </span>
      </div>
    </div>
  </div>  
</div>


