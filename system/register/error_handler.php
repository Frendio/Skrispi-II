<?php
    # FROM : http://php.net/manual/en/function.set-error-handler.php

    DEFINED('ROOT') OR exit(header('location: 303'));

    DEFINE("ERROR_HTTP_HOST",             'http://'.$_SERVER['HTTP_HOST']);
    DEFINE("ERROR_DS",                    DIRECTORY_SEPARATOR);

    if(strpos(ROOT, '\\') !== false) {
        DEFINE("ERROR_DOCUMENT_ROOT",     str_replace('/', "\\", $_SERVER['DOCUMENT_ROOT']));
    } else {
        DEFINE("ERROR_DOCUMENT_ROOT",     $_SERVER['DOCUMENT_ROOT']);
    }

    DEFINE("ERROR_CURRENT_DIRECTORY",     str_replace(ERROR_DOCUMENT_ROOT, '', ROOT));
    
    function my_error_handler($errno, $errstr, $errfile, $errline){
        $errno = $errno & error_reporting();
        
        if($errno == 0) return;
        
        if(!defined('E_STRICT'))            define('E_STRICT', 2048);
        
        if(!defined('E_RECOVERABLE_ERROR')) define('E_RECOVERABLE_ERROR', 4096);
        
        echo "<center style='z-index:10; position:relative; background:#9e1d32;color:#c7cace;'>
                <br><br>
                <b style='color:rgb(255, 255, 255);'>*** ";
        
                    switch($errno){
                        case E_ERROR:               echo "ERROE";                  break;
                        case E_WARNING:             echo "WARNING";                break;
                        case E_PARSE:               echo "PARSE ERROR";            break;
                        case E_NOTICE:              echo "NOTICE";                 break;
                        case E_CORE_ERROR:          echo "CORE ERROR";             break;
                        case E_CORE_WARNING:        echo "CORE WARNING";           break;
                        case E_COMPILE_ERROR:       echo "COMPILE ERROR";          break;
                        case E_COMPILE_WARNING:     echo "COMPILE WARNING";        break;
                        case E_USER_ERROR:          echo "USER ERROR";             break;
                        case E_USER_WARNING:        echo "USER WARNING";           break;
                        case E_USER_NOTICE:         echo "USER NOTICE";            break;
                        case E_STRICT:              echo "STRICT NOTICE";          break;
                        case E_RECOVERABLE_ERROR:   echo "RECOVERABLE ERROR";      break;
                        default:                    echo "UNKNOWN ERROR ($errno)"; break;
                    }
        
                echo " ***</b><hr>
                <b style='color:#c7cace;'>".$errstr."</b><br><br>
                Error Location  : ".ltrim(str_replace(getcwd().ERROR_DS,'',ERROR_CURRENT_DIRECTORY.ERROR_DS.$errfile), ERROR_DS)."<br><br>
                Error Line  : $errline<hr>";
        
        echo "</center>";
        
        if(isset($GLOBALS['error_fatal'])){
            if($GLOBALS['error_fatal'] & $errno) die('');
        }
        
    }

    function error_fatal($mask = NULL){
        if(!is_null($mask)){
            $GLOBALS['error_fatal'] = $mask;
        }elseif(!isset($GLOBALS['die_on'])){
            $GLOBALS['error_fatal'] = 0;
        }
        return $GLOBALS['error_fatal'];
    }
    
    error_reporting(E_ALL);   
    set_error_handler('my_error_handler');
    error_fatal(E_ALL^E_NOTICE);
?>