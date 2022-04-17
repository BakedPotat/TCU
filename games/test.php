<?php
  $topay = $unit->field_cost_to_own->value();
 
  $balanceAmt =  $unit->field_cto_balance->value();
  $paidAmt = $topay - $balanceAmt;
  $percent_own = $paidAmt / $topay * 100;
 
  // echo '<pre>';
  // print_r($percent_own);
  // exit;
?>
 
<div class="progress-bar-wrapper">
  <div class="inner" style="width: <?php print $percent_own; ?>%"><?php print $percent_own; ?>% paid</div>
</div>
 
<style>
.progress-bar-wrapper {
  width: 280px;
  margin: 0 auto 20px;
  display: block;
  border: 1px solid #eee;
  .inner {
    background: $color-green;
    display: block;
    height: 10px;
  }
}
  
</style>