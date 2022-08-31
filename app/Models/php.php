<?php

$sortcode=[];
for($i=0;$i<3;$i++){
    $a=rand(10,20);
    $sortcode[]=$a;
}

$sort = $sortcode[0]."-".$sortcode[1]."-".$sortcode[2];


echo $sort;

?>