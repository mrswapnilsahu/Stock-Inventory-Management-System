<?php
?>
</div>
</div>
</div>

</div>
<script type="text/javascript">
  function dis()
  {
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button";
    window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
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
<script type="text/javascript">
  function add_sell_price(val,id)
  {
    $.ajax({
      type: "POST",
      url: 'add_sell_price.php',
      data: {val:val,id:id},
      success:function(msg) {
             
         }
    }); 
  }
</script>
<!-- BILLING -->
<script type="text/javascript">
  function fetch_firm(val)
  {
    value = val;
    // alert(value);
    $.ajax({
      type: "POST",
      url: 'fetch_firm_data.php',
      data: {value:value},
      success:function(msg) {
        // alert(msg);
        $('#srch_ty').html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function  add_row() {
    var count = parseInt($('#count').val());
    var firm = $('#sty_grp').val();
    var last = count-1;
    var nxt = count;
    $( "#fetch_d_"+last).after( '<tr id="fetch_d_'+nxt+'"></tr>' );
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'add_row.php',
      data: {count:count,firm:firm},
      success:function(msg) {
        // alert(msg);
        $('#fetch_d_'+count).html(msg);
        $('input[name="count"]').val(count+1);
        $('#sty_grp').attr("disabled","disabled");        
    }
});
}
</script>
<script type="text/javascript">
  function  add_seller_row() {
    var count = parseInt($('#count').val());
    var firm = $('#sty_grp').val();
    var last = count-1;
    var nxt = count;
    $( "#fetch_d_"+last).after( '<tr id="fetch_d_'+nxt+'"></tr>' );
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'add_seller_row.php',
      data: {count:count,firm:firm},
      success:function(msg) {
        // alert(msg);
        $('#fetch_d_'+count).html(msg);
        $('input[name="count"]').val(count+1);
        $('#sty_grp').attr("disabled","disabled");        
    }
});
}
</script>
<script type="text/javascript">
  function get_size(val,id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'get_bsize.php',
      data: {val:val,count:count},
      success:function(msg) {
        // alert(msg);
        $('#bill_s_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function get_seller_size(val,id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'get_seller_bsize.php',
      data: {val:val,count:count},
      success:function(msg) {
        // alert(msg);
        $('#bill_s_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function get_cat(val,id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'get_bcat.php',
      data: {val:val,count:count},
      success:function(msg) {
        // alert(msg);
        $('#bill_p_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function get_seller_cat(val,id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'get_seller_bcat.php',
      data: {val:val,count:count},
      success:function(msg) {
        // alert(msg);
        $('#bill_p_'+count).html(msg);
    }
});
}
</script>

<script type="text/javascript">
  function get_pde(id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    var cat = $('#bill_p_'+count).val();
    var size = $('#bill_s_'+count).val();
    var firm = $('#bill_f_'+count).val();
    // alert(firm);
    $.ajax({
      type: "POST",
      url: 'get_pde.php',
      data: {cat:cat,size:size,count:count,firm:firm},
      success:function(msg) {
        // alert(msg);
        $('#bill_a_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function get_seller_pde(id)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    var cat = $('#bill_p_'+count).val();
    var size = $('#bill_s_'+count).val();
    var firm = $('#bill_f_'+count).val();
    // alert(firm);
    $.ajax({
      type: "POST",
      url: 'get_seller_pde.php',
      data: {cat:cat,size:size,count:count,firm:firm},
      success:function(msg) {
        // alert(msg);
        $('#bill_a_'+count).html(msg);
    }
});
}
</script>
<script type="text/javascript">
  function calc(id,value)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    var cqty = $('#av_'+count).val();
      // alert(cqty);
      var price = $('#p_'+count).val();
      var sgst = $('#p_sgst_'+count).val();
      var igst = $('#p_igst_'+count).val();
      var cgst = $('#p_cgst_'+count).val();
      var ttype = $('#pro_tax_type').val();
      // alert(ttype);
      // var tax = (price * (cgst+sgst)) / 100;
      // var t = tax + price;
      var amt = price * value;

      $('#to_amt_'+count).val(amt);
      // $("#bill_q_"+count).attr({
      //   "max" : cqty,
      //   "min" : 1
      // });

      // 100 10 10 
      // 10*3 30
      // 100+30 130*3
}
</script>
<script type="text/javascript">
  function calc_amt()
  {
    var count = parseInt($('#count').val());
    var total = 0;
    var tr_amt = parseInt($('#tr_amt').val());
    for (var i = 0; i < count; i++) {
      total = total + parseInt($('#to_amt_'+i).val());
      // alert(total);
    }
    // total = tr_amt + total;
    $('#total_amt').val(total);
  }
</script>
<!-- END BILLING -->
<!-- SHOW SELLER BILL VIEW -->
<script>
  function ssrch_showbill()
  {
      var name = $('#name').val();
      // var gstin = $('#gstin').val();
      var bill_no = $('#bill_no').val();
      var type = 1;
      // alert(name);
      $.ajax({
      type: "POST",
      url: 'ssrch_showbill.php',
      data: {name:name,bill_no:bill_no,type:type},
      success:function(msg) {
             // alert(msg);
            $('#ssrch_showbill').html(msg);
         }
    }); 

  }
</script>
<script type="text/javascript">
  function sview_bill(id)
  {
    // alert(id);
    $.ajax({
      type: "POST",
      url: 'view_seller_bill.php',
      data: {id:id},
      success:function(msg) {
            // alert(msg);
            $('#sview_bill').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function sfill_gst(id,value)
  {
    $.ajax({
      type: "POST",
      url: 'sfill_gst.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function sfill_chrg(id,value)
  {
    // alert(value);
    $.ajax({
      type: "POST",
      url: 'sfill_chrg.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function sfill_tno(id,value)
  {
    $.ajax({
      type: "POST",
      url: 'sfill_tno.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
 <script type="text/javascript">
function sprints()
{

  var m  =  document.getElementById('sview_bill').innerHTML;
  var s  =  document.body.innerHTML;
  document.body.innerHTML= document.getElementById('sview_bill').innerHTML;
  window.print();
  document.body.innerHTML = s;
}
</script>
<!-- END SHOE BILL VIEW -->
<!-- STOCK SHOW BILL LIST -->
<script>
  function srch_showbill()
  {
      var name = $('#sfirm_name').val();
      var gstin = $('#gstin').val();
      var bill_no = $('#bill_no').val();
       var type = 1;
      $.ajax({
      type: "POST",
      url: 'srch_showbill.php',
      data: {name:name,gstin:gstin,bill_no:bill_no,type:type},
      success:function(msg) {
             // alert(msg);
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
  function fill_gst(id,value)
  {
    $.ajax({
      type: "POST",
      url: 'fill_gst.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function fill_chrg(id,value)
  {
    // alert(value);
    $.ajax({
      type: "POST",
      url: 'fill_chrg.php',
      data: {id:id,value:value},
      success:function(msg) {
            // alert(msg);
            // $('#output').html(msg);
         }
    });
  }
</script>
<script type="text/javascript">
  function view_bill_stock(id,type)
  {
    if (type == 1) {
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
    else{
      $.ajax({
        type: "POST",
        url: 'view_custom_bill.php',
        data: {id:id},
        success:function(msg) {
            // alert(msg);
            $('#view_bill').html(msg);
          }
        });
    }
    
  }
</script>
<!--   -->
<script type="text/javascript">
function prints()
{

  var m  =  document.getElementById('view_bill').innerHTML;
  var s  =  document.body.innerHTML;
  document.body.innerHTML= document.getElementById('view_bill').innerHTML;
  window.print();
  document.body.innerHTML = s;
//   var printPage = window.open(document.getElementById('view_bill').innerHTML, '_blank');
// setTimeout(printPage.print(), 5);
}
</script>
<!-- END STOCK SHOW BILL LIST -->
<!-- CUSTOM BILLING -->
<script type="text/javascript">
  function  add_custom_row() {
    var count = parseInt($('#count').val());
    var firm = $('#sty_grp').val();
    var last = count-1;
    var nxt = count;
    $( "#fetch_d_"+last).after( '<tr id="fetch_d_'+nxt+'"></tr>' );
    // alert(count);
    $.ajax({
      type: "POST",
      url: 'add_custom_row.php',
      data: {count:count,firm:firm},
      success:function(msg) {
        // alert(msg);
        $('#fetch_d_'+count).html(msg);
        $('input[name="count"]').val(count+1);
        $('#sty_grp').attr("disabled","disabled");        
    }
});
}
</script>
<script type="text/javascript">
  function custom_calc(id,value)
  {
    var arr = id.split('_');
    var count = arr[arr.length-1];
    var cqty = $('#av_'+count).val();
    // alert(cqty);
    var price = $('#bill_p_'+count).val();
    var qty = $('#bill_q_'+count).val();
    
    
    var amt = price * value;

    $('#to_amt_'+count).val(amt);      
  }
</script>
<script type="text/javascript">
  function custom_calc_amt()
  {
    var count = parseInt($('#count').val());
    var total = 0;
    var tr_amt = parseInt($('#tr_amt').val());
    for (var i = 0; i < count; i++) {
      total = total + parseInt($('#to_amt_'+i).val());
      // alert(total);
    }
    // total = tr_amt + total;
    $('#total_amt').val(total);
    // alert(total);
  }
</script>
<!-- CUSTOM BILLING -->
<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });

  </script>
</body>
</html>