<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<?php 
global $user;

//$prod_nid=$view->result[0];

?>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)) : ?>
     <!--<caption><?php print $caption . $title; ?></caption>-->

  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
      <tr>
        <?php foreach ($header as $field => $label): ?>
          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
            <?php print $label; ?>
       
          </th>
        <?php endforeach; ?>
      </tr>
    </thead>
  <?php endif; ?>
  <tbody>
    <?php foreach ($rows as $row_count => $row): ?>

      <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
<?php $prod_nid=$view->result[$row_count]->nid;?>
        <?php foreach ($row as $field => $content): ?>
          <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" '; } ?>
<?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
          
            <?php print $content; ?>
          </td>
  
        <?php endforeach; ?>
    <!--    <td> -->
        <?php 
    
  /* $result1 = db_select('node', 'n')
    ->fields('n')
    ->condition('uid', $user->uid,'=')
    ->condition('status', 1,'=')
    ->condition('type','event','=')
    ->execute();
    while(
$record = $result1->fetchAssoc()) {
*/

    
/*$taxid= views_get_view_result("taxonomy_term", "default", arg(2));
foreach($taxid as $tid){
$tid_nid=$tid->nid;
*/
    /*$user_id= views_get_view_result("query_user_events", "default", $user->uid);
    foreach ($user_id as $events){

        $add1= drupal_get_form('addcart_form',$events->nid,$prod_nid,$row['field_quantity']);
        echo drupal_render($add1);
       
        }*/

//} 


     /*  	} */

       	?>
    <!--    </td> -->
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

