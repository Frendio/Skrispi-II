<?php
    
    DEFINED('BASE_URL') OR exit(header('location: 403'));
    
    class user_guide {        
        
        function wtmf_back($page) {
            if ($page == 'welcome_to_madeline_framework') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }    
        
        function ii_back($page) {
            if ($page == 'installation_instructions') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        } 
        
        function conf_back($page) {
            if ($page == 'configurations') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }
        
        function mvc_back($page) {
            if ($page == 'madeline_cmv') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }
        
        function lib_back($page) {
            if ($page == 'libraries') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }
        
        function dp_back($page) {
            if ($page == 'developer_profile') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }
        
        function gt_back($page) {
            if ($page == 'general_topics') {
                return 'hovered_bcolor';
            } else {
                return '';
            } 
        }
        
        function manual_search($search,$lang) {
            $search     = strtolower($search);
            if($lang == 'english') {
                $lines      = file(USER_GUIDE_PATH.'ug_libraries/search_english.php');
            } else if($lang == 'bahasa') {
                $lines      = file(USER_GUIDE_PATH.'ug_libraries/search_bahasa.php');
            }
            
            $result     = '';
            $found      = false;
            foreach($lines as $line) {
              if(strpos(strtolower($line), $search) !== false && strpos(strtolower($line), '#') === false && strpos(strtolower($line), 'location: 403') === false && strpos(strtolower($line), '<?php') === false) {
                $found  = true;
                $result .= $line."||";
              }
            }
            
            if(!$found) {
                return 'no';
            } else {
                return str_replace('*',' ',rtrim($result, '||'));
            }
        }
        
        function result($result) {
            $result     = explode('||', $result);
            $tot_result = count($result);
            
            for($i = 0; $i < $tot_result; $i++) {
                echo str_replace('*',' ',$result[$i]);
            }
        }
        
    }
      
?>