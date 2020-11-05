<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    if($result != 'no') {
        $result     = explode('||', $result);
        $tot_result = count($result);
        
        sort($result);
        
        to('h1','class::found-sr*h1-footer').show($tot_result.' results found!').tc('h1');
            
        ul();
        
        for($i = 0; $i < $tot_result; $i++) {
            $in_detail  = explode('|', $result[$i]);
            $title      = $in_detail[0];
            $link       = $in_detail[1];
            $detail     = $in_detail[2];
            $index      = $i+1;      
            to('a','class::link*docs href::manual/'.$link.'');
                to('h1','class::h1').show('['.$index.'] '.$title).tc('h1');
            tc('a');
            
            to('p','class::sr-details*docs').show("($detail)").tc('p');
            
            if($i != $tot_result-1) {
                ul();
            }
            
        }
    } else {
        to('h1', 'class::nsr-found*h1-footer').show('NO SEARCH FOUND!').tc('h1');
    }

?>