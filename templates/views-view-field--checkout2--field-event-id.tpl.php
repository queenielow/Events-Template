<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 
$event_load=node_load($output);
echo "<h2>".$event_load->title."</h2>";
?>
<div id="event_desc">Event Desc: <?php echo $event_load->body['und'][0]['value'];?></div>
<div id="event_date">
Event Date: <b><?php echo date("D d-M-Y h:i a",strtotime($event_load->field_event_s_from_date['und'][0]['value']));?></b> to <b><?php echo date("D d-M-Y h:i a",strtotime($event_load->field_event_s_from_date['und'][0]['value2']));?></b>
</div>
