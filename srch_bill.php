<?php 

// echo $name = $_POST['name']; die;

require 'config.php';
$conn = connection();


if(isset($_POST['name']) && $_POST['name']!=""){
  $condition.=" and bill_name like '".$_POST['name']."%'";
}
if(isset($_POST['bill']) && $_POST['bill']!=""){
  $condition.=" and bill_id = ".$_POST['bill']."";
}
$sql = "SELECT * FROM bill_records WHERE 0=0 ". $condition ." ORDER BY bill_entrydt DESC";
$data = $conn->query($sql);

?>

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
      <td><strong><?php echo $row['bill_tno']; ?></strong></td>
      <td><strong><input type="text" name="trans_no" class="form-control input-xs"></td>
        <td><strong><?php echo $row['bill_entrydt']; ?></td>
          <td><center><button data-toggle="modal" data-target="#" class="btn btn-danger disabled text-center">View</button></center></td>
        </tr>
        <?php   } ?>
      </tbody>
    </table>