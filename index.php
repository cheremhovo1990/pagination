<?php
function pagination($page, $countPage, $leftRight, $post){

    $result = [];

    $number = (int)($post/$countPage);
    if (is_float($post/$countPage)){
        $number++;
    }

    if ($page -  $leftRight <= 1){
        for ($i = 1; $i <= $leftRight + 1; $i++ ) {
            $result[$i] = $i;
        }
        $result[$number] = $number;
        return $result;
    }

    if ($page +  $leftRight >= $number) {
        $result[1] = 1;
        for ($i = $number - $leftRight; $i <= $number; $i++ ) {
            $result[$i] = $i;
        }
        return $result;
    }

    $result[1] = 1;
    for ($i = $page - $leftRight; $i <= $page + $leftRight; $i++ ) {

        $result[$i] = $i;
    }
    $result[$number] = $number;



    return $result;
}
