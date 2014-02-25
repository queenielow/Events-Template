<?php

$logid=$row->nid;
$status=$row->field_field_prod_status[0]['rendered']['#markup'];

if ($status=='Pending business approval'){
$confirmitem= drupal_get_form('confirmbooking_form',$logid);
 echo drupal_render($confirmitem);
echo "<hr>";
$rejectitem=drupal_get_form('rejectbooking_form',$logid);
 echo drupal_render($rejectitem);
}
?>