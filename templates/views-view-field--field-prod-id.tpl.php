<?php

$nload=node_load($output);
$img=$nload->uc_product_image;
if (!$img){
 //print_r($img);
}
echo $nload->title;

?>