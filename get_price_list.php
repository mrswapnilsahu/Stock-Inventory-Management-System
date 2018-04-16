<?php
  require 'config.php';
  $conn = connection();
  $firm = $_REQUEST['id'];
  $cat = "SELECT pro_grpid as g from product where pro_firmid = $firm GROUP BY pro_grpid ORDER BY g ASC";
  $cat = $conn->query($cat);
  // $sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id=p.pro_firmid ORDER BY cat_name ASC ";
  
?>

<table class="table table-condensed table-hover table-bordered table-striped" style="margin-top: -24px;">
  <?php foreach ($cat as $cat) { $id = $cat['g'];
    $cat = "SELECT cat_name FROM category WHERE cat_id = $id";
    $cat = $conn->query($cat);
    foreach ($cat as $c) {
      
    }
  ?>
    <tr>
      <td class="primary"><center><strong><?php echo $c['cat_name']; ?></strong></center></td>
    <?php 
      $type = "SELECT * FROM type WHERE ty_grp = $id";
      $ty = $conn->query($type);
      foreach ($ty as $value) { $t = $value['ty_id']; ?>
      
        <!-- <td><?php echo $value['ty_name']; ?></td> -->
        <?php $price = "SELECT * FROM product WHERE pro_typeid = $t AND pro_grpid = $id AND pro_firmid = $firm";
        $price = $conn->query($price);
        foreach ($price as $p) { ?>
        <td class="success"><center><strong><?php echo $value['ty_name']."<hr>".$p['pro_price']."/-"; ?></strong></center></td> 
        <?php } ?>          
     
    <?php  } ?> 
  </tr>
  <?php  } ?>
</table>

