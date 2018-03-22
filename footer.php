<?php
?>
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