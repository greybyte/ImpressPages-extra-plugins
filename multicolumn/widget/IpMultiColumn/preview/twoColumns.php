<?php
  /**
   * preview / layout template for multicolumn widget. This template needs to render
   * the required markup for columns, and generate a unique block inside of each
   * column. To make block unique, use $base_id which is provided by controller.
   *
   * For example, to generate two bootstrap columns, markup could look like this:
   * 
   *  <div class="row">
   *    <div class="span4"><?php echo $site->generateBlock('multicol'.$base_id.'left') ?></div>
   *    <div class="span8"><?php echo $site->generateBlock('multicol'.$base_id.'right') ?></div>
   *  </div>
   * 
   * The following code based on <table> is ONLY included to support templates which do
   * not have a grid system. Templates which do have a proper grid system should really 
   * override this. 
   * 
   */
?>
<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
<tr>
<td style="width: 50%; vertical-align: top;"><?php echo $site->generateBlock('multicol'.$base_id.'1')->exampleContent(' '); ?></td>
<td style="width: 50%; vertical-align: top;"><?php echo $site->generateBlock('multicol'.$base_id.'2')->exampleContent(' '); ?></td>
</tr>
</table>