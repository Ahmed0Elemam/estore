<script language="javascript" src="js/script.js?<?php echo md5_file("js/script.js")?>" type="text/javascript"></script>
<script language="javascript" src="js/ar.js" type="text/javascript"></script>
<div class="row">

<div class="col-md-2">
<label> من يوم </label>
</div>
<div class="col-md-3">
<input type="text" class="form-control" id="date1" autocomplete="off" readonly>
</div>
<div class="col-md-2">
<label> إلى يوم </label>
</div>
<div class="col-md-3">
<input type="text" class="form-control" id="date2" autocomplete="off" readonly>
</div>
<div class="col-md-2">
  <button id="stats_results_btn" class="btn btn-primary">عرض</button>
</div>
</div>

<hr/>
    
<div class="row" id="stats_result">


</div>