<?php
global $user;

$user_id= views_get_view_result("checkout", "default", $user->uid);
$prod_id=$row->field_field_prod_id[0]['rendered']['#markup'];    

        $add1= drupal_get_form('updateqty_form',$row->nid);
        echo drupal_render($add1);

       $remove= drupal_get_form('removefromcart_form',$row->nid,$prod_id);
        echo drupal_render($remove);
?>