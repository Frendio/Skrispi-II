<?php

    # Madeline Framework
    #
    # A custom built application development framework for PHP
    #
    # Permission is hereby granted to anyone who is
    # AN ACTIVE STUDENT AT UNIVERSITAS KLABAT
    # to use this application
    #
    # THE SOFTWARE IS PROVIDED "AS IS" TO HELP STUDENTS UNDERSTAND
    # AND BUILD A SIMPLE WEBSITE WITH THE CONCEPT OF MVC (MODEL, VIEW, CONTROLLER)
    #
    # @package	MadeLine (ML)
    # @author	Stevani Andolo
    # @version  V1

    DEFINED('BASE_URL') OR exit(header('location: 303'));
    
    class ML_Query_Liner {
        
        protected $db;
        
        protected $set;
        
        protected $data     = array();
        
        protected $value    = array();
        
        protected $key      = array();
        
        protected $type     = array();
        
        protected $table;
        
        protected $sql;
        
        protected $input;    
          
        protected function __construct()
        {    
            $dbconfig['host']       = $GLOBALS['configuration']['host'];    
            $dbconfig['user']       = $GLOBALS['configuration']['user'];    
            $dbconfig['password']   = $GLOBALS['configuration']['password'];    
            $dbconfig['dbname']     = $GLOBALS['configuration']['dbname'];    
            $dbconfig['fetch_type'] = $GLOBALS['configuration']['fetch_type'];           
    
            $this->db               = new ML_DB_Connection($dbconfig);      
        }

               
        public function escape_string($data)
        {      
            $result = mysqli_real_escape_string($this->db->conn, $data);    
            return $result;    
        }

               
        public function insert_id()
        {      
            return $this->db->get_insert_id();
        }

                
        public function select($column_name = null) 
        {
            if($column_name == null) 
            {
                $this->sql .= "SELECT ";
            } 
            else 
            {
                $this->sql .= "SELECT $column_name";
            }
            return $this;
        }

        public function all($table_name = null) 
        {
            if($table_name == null) 
            {
                exit('PLEASE INSERT A TABLE NAME!');
            } 
            else 
            {
                $this->sql .= "SELECT * FROM $table_name";
            }
            return $this;
        }

               
        public function select_as($column_name = '', $alias = '') 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'as', 'select');
            return $this;
        }

              
        public function as($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'as');
            return $this;
        }

              
        public function select_count($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'count', 'select');
            return $this;
        }

              
        public function count($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'count');
            return $this;
        }

               
        public function select_avg($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'avg', 'select');
            return $this;
        }

              
        public function avg($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'avg');
            return $this;
        }

              
        public function select_sum($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'sum', 'select');
            return $this;
        }

               
        public function sum($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'sum');
            return $this;
        }

               
        public function select_min($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'min', 'select');
            return $this;
        }

              
        public function min($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'min');
            return $this;
        }

              
        public function select_max($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'max', 'select');
            return $this;
        }

              
        public function max($column_name = '', $alias = '') 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'max');
            return $this;
        }

              
        public function select_distinct($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'distinct', 'select');
            return $this;
        }

               
        public function distinct($column_name = null, $alias = null) 
        {
            $this->sql .= $this->_as_avg_count_dis_max_min_sum($column_name, $alias, 'distinct');
            return $this;
        }

              
        public function select_round($column_name, $integer, $alias = null)
        {
            $this->sql .= $this->_round($column_name, $integer, $alias, 'round', 'select');
            return $this;
        }

               
        public function round($column_name = '', $integer = '', $alias = '') 
        {
            $this->sql .= $this->_round($column_name, $integer, $alias, 'round');
            return $this;
        }

        protected function _round($column_name = '', $integer = '', $alias = '', $type = '', $statement = '') 
        {
            if($column_name == '') {
                exit('INPUT A COLUMN NAME!');
            } 
            else if(!is_string($column_name)) 
            {
                exit('COLUMN NAME IS NOT A STRING : '.$column_name);
            }

            if($integer == '') {
                exit('INSERT AN INTEGER!');
            } 
            else if(!is_numeric($integer)) 
            {
                exit('NOT AN INTEGER : '.$integer);
            }

            $type  = strtoupper($type);

            if($type != 'ROUND') {
                exit('INVALID FUNCTION TYPE : '.$type.' !');
            }

            if($alias == '') {
                $alias  = strtolower($type).'_'.strtolower($column_name);
            } 
            else 
            {
                $alias  = $alias;
            }

            if(!is_string($statement)) {
                exit('INVALID SQL STATEMENT : '.$statement);
            }

            $statement  = strtoupper($statement);

            if($statement != '' && $statement == 'SELECT') {
                return "SELECT $type($column_name, $integer) AS \"$alias\",";
            } 
            else 
            {
                $check_select = explode(' ',$this->sql)[0];
                if(strpos($check_select, 'SELECT') === false) 
                {
                    $select = 'SELECT';
                } 
                else 
                {
                    $select = '';
                } 
                return $select.":::$type($column_name, $integer) AS \"$alias\",";
            }
        }

        protected function _as_avg_count_dis_max_min_sum($column_name = '', $alias = '', $type = '', $statement = '') 
        {
            if($column_name == '') 
            {
                exit('INPUT A COLUMN NAME!');
            } 
            else if(!is_string($column_name)) 
            {
                exit('COLUMN NAME IS NOT A STRING : '.$column_name);
            }

            $type  = strtoupper($type);

            if(!in_array($type, array('AS', 'AVG', 'COUNT', 'DISTINCT', 'MAX', 'MIN', 'SUM'))) {
                exit('INVALID FUNCTION TYPE : '.$type.' !');
            }

            if($alias == '') {
                $alias  = strtolower($type).'_'.strtolower($column_name);
            } 
            else 
            {
                $alias  = $alias;
            }

            if(!is_string($statement)) 
            {
                exit('INVALID SQL STATEMENT : '.$statement);
            }

            $statement  = strtoupper($statement);

            if($statement != '' && $statement == 'SELECT') 
            {
                if($type == 'AS') 
                {
                    return "SELECT $column_name AS \"$alias\",";
                } 
                else 
                {
                    return "SELECT $type($column_name) AS \"$alias\",";
                }
            } 
            else 
            {
                $check_select = explode(' ',$this->sql)[0];
                if(strpos($check_select, 'SELECT') === false) 
                {
                    $select = 'SELECT';
                } 
                else 
                {
                    $select = '';
                } 

                if($type == 'AS') 
                {
                    return $select.":::$column_name AS \"$alias\",";
                } 
                else 
                {
                    return $select.":::$type($column_name) AS \"$alias\",";
                }
            }
        }

         
        public function in_select($column_name = null) 
        {
            if($column_name == null) 
            {
                exit('PLEASE INSERT A "column_name" IN YOUR "in_select"!');
            } 
            else 
            {
                $this->sql .= ":::IN (SELECT $column_name";
                return $this;
            }            
        }

                
        public function not_in_select($column_name = null) 
        {
            if($column_name == null) 
            {
                exit('PLEASE INSERT A "column_name" IN YOUR "in_not_select"!');
            } 
            else 
            {            
                $this->sql .= ":::NOT IN (SELECT $column_name";
                return $this;
            }            
        }

            
        public function from($from=null) 
        {            
            $this->sql = rtrim($this->sql, ','). ':::FROM '.rtrim($from, ',');
            return $this;
        }
         
        public function close($total = null) 
        {
            if($total == null)
            {
                $this->sql .= ') ';
            }
            else
            {
                $brackets   = '';
                for($i = 0; $i < $total; $i++)
                {
                    $brackets   .= ')';
                }
                $this->sql .= $brackets.' ';
            }
            return $this;
        }
         
        public function group_by($column_name) 
        {
            if($column_name == null) 
            {
                exit('PLEASE INSERT "column_name(s)" IN YOUR "group_by"!');
            } 
            else 
            {
                $this->sql .= ':::GROUP BY '.$column_name;
            }
            return $this;
        }
         
        public function group($grup_sql = '') 
        {
            $this->sql .= ':::'.$grup_sql;
            return $this;
        }
         
        public function order_by($data=null,$data1=null) 
        {
            if($data  == '' || $data == null) 
            {
                exit('PLEASE INSERT "column_name(s)" IN YOUR "order_by"!');
            } 
            else 
            {
                if($data1  == '' || $data1 == null) 
                {
                    if(strtolower($data) === 'rand' || strtolower($data) === 'random')
                    {
                        $this->sql .= ":::ORDER BY RAND()";
                    }
                    else
                    {
                        $data   = str_replace('asc','ASC',$data);
                        $data   = str_replace('desc','DESC',$data);
                        $this->sql .= ":::ORDER BY $data";
                    }
                } 
                else 
                {
                    $data1   = str_replace('asc','ASC',$data1);
                    $data1   = str_replace('desc','DESC',$data1);
                    $this->sql .= ":::ORDER BY $data $data1";
                }
            }
            return $this;
        }
         
        public function having($data=null) 
        {
            if($data  == '' || $data == null) 
            {
                exit('PLEASE INSERT HAVING CONDITION!');
            } 
            else 
            {
                $this->sql .= ":::HAVING $data ";
            }
            return $this;
        }
         
        public function join($table_name = null, $column1 = null, $column2 = null) 
        {
            if($table_name == null) 
            {
                exit('PLEASE INSERT "column_name" IN YOUR "join" first parameter!');
            } 
            else 
            {
                if($column2 == null) 
                {
                    if(strpos($column1,'::') !== false || strpos($column1,'=') !== false) 
                    {
                        $column1    = str_replace('::', "=", $column1);
                        $column1    = explode('=',$column1);
                        $data       = $column1[0].'='.$column1[1];
                    } 
                    else 
                    {
                        exit('INVALID OPERATOR!');
                    }
                } 
                else 
                {
                    $data = $column1.'='.$column2;
                }

                $this->sql .= ":::JOIN $table_name ON $data";
                return $this;
            }
        }
         
        public function left_join($table_name=null, $data=null, $data1=null) 
        {
            if($table_name  == '' || $table_name == null) 
            {
                $this->sql .= '';
            } 
            else 
            {
                if($data == null) 
                {
                    $this->sql .= ":::LEFT JOIN $table_name ";
                } 
                else 
                {
                    if($data1 == null)
                    {
                        $data    = str_replace('::', "=", $data);
                        $this->sql .= ":::LEFT JOIN $table_name ON $data";
                    }
                    else
                    {
                        $this->sql .= ":::LEFT JOIN $table_name ON $data = $data1";
                    }
                }

            }
            return $this;
        }
         
        public function on($data=null) 
        {
            $data    = str_replace('::', "=", $data);
            $this->sql .= ":::ON $data";
            return $this;
        }
        
        # B E T W E E N
        public function between($value1, $value2) 
        {            
            if($value1 == null) 
            {
                exit('PLEASE INSERT "first value" IN YOUR "between" first parameter!');
            } 
            else if($value2 == null) 
            {
                exit('PLEASE INSERT "second value" IN YOUR "between" second parameter!');
            } 
            else 
            {
                $this->sql .= ":::BETWEEN $value1 AND $value2";        
                return $this;
            }             
        }
         
        public function where_between($column_name, $value1, $value2) 
        {  
            $this->_between($column_name, $value1, $value2, 'where');  
            return $this;                   
        }
         
        public function and_between($column_name, $value1, $value2) 
        {         
            $this->_between($column_name, $value1, $value2, 'and');  
            return $this;                   
        }
         
        public function or_between($column_name = '', $value1 = '', $value2 = '') 
        {  
            $this->_between($column_name, $value1, $value2, 'or');  
            return $this;       
        }

        protected function _between($column_name = '', $value1 = '', $value2 = '', $statement = '') 
        {
            if($statement != '') 
            {
                if($column_name == '') 
                {
                    exit('INPUT A COLUMN NAME!');
                } 
                else if(!is_string($column_name)) 
                {
                    exit('COLUMN NAME IS NOT A STRING : '.$column_name);
                }
            }

            if($value1 == '' || $value2 == '') 
            {
                exit('INPUT VALUE1 & VALUE2!');
            }

            $statement  = strtoupper($statement);

            if($column_name != '' && $statement != '') 
            {
                if(!in_array($statement, array('WHERE', 'AND', 'OR'))) 
                {
                    exit('INVALID SQL STATEMENT : '.$statement.' !');
                }
            }

            if(strpos($this->sql, 'WHERE') === false && $statement != 'WHERE') 
            {
                exit('YOU HAVEN\'T PUT "WHERE" CONDITION IN YOUR SQL : '.str_replace(':::',' ',$this->sql));
            } 
            else 
            {
                if(strpos($this->sql, 'WHERE') !== false && $statement == 'WHERE') 
                {
                    exit('YOU ALREADY HAVE "WHERE" CONDITION IN YOUR SQL : '.str_replace(':::',' ',$this->sql));
                } 
                else 
                {
                    if($statement == '') 
                    {
                        $this->sql .= ":::$column_name BETWEEN $value1 AND $value2";   
                    } 
                    else 
                    {
                        $this->sql .= ":::$statement $column_name BETWEEN $value1 AND $value2";   
                    } 
                }  
            }
        }
        # E N D  B E T W E E N

        # S T A R T  L I K E         
        public function like($keyword = '', $condition = '') 
        {    
            $this->_like('', $keyword, $condition);
            return $this;  
        }
         
        public function not_like($keyword = '', $condition = '') 
        {    
            $this->_like('', $keyword, $condition, '', 'not');
            return $this;  
        }

        public function where_like($column_name = '', $keyword = '', $condition = '') 
        {      
            $this->_like($column_name, $keyword, $condition, 'where');
            return $this;                     
        }

        public function where_not_like($column_name = '', $keyword = '', $condition = '') 
        {      
            $this->_like($column_name, $keyword, $condition, 'where', 'not');
            return $this;                     
        }

        public function and_like($column_name = '', $keyword = '', $condition = '') 
        {     
            $this->_like($column_name, $keyword, $condition, 'and');
            return $this;                     
        }

        public function and_not_like($column_name = '', $keyword = '', $condition = '') 
        {     
            $this->_like($column_name, $keyword, $condition, 'and', 'not');
            return $this;                     
        }

        public function or_like($column_name = '', $keyword = '', $condition = '') 
        {      
            $this->_like($column_name, $keyword, $condition, 'or');
            return $this;                  
        }

        public function or_not_like($column_name = '', $keyword = '', $condition = '') 
        {      
            $this->_like($column_name, $keyword, $condition, 'or', 'not');
            return $this;                  
        }

        protected function _like($column_name = '', $keyword = '', $condition = '', $statement = '', $type = '') 
        {
            // if($statement != '') 
            // {
            //     if($column_name == '') 
            //     {
            //         exit('INPUT A COLUMN NAME!');
            //     } 
            //     else if(!is_string($column_name)) 
            //     {
            //         exit('COLUMN NAME IS NOT A STRING : '.$column_name);
            //     }
            // }

            // if($keyword == '') 
            // {
            //     exit('INPUT A KEYWORD!');
            // }

            $statement  = strtoupper($statement);
            $type       = strtoupper($type);

            if($column_name != '' && $statement != '') 
            {
                if(!in_array($statement, array('WHERE', 'AND', 'OR'))) 
                {
                    exit('INVALID SQL STATEMENT : '.$statement.'!');
                }
                else if($type != '' && !in_array($type, array('NOT'))) 
                {
                    exit('INVALID SQL STATEMENT : '.$type.'!');
                }
            }

            if($column_name != '') 
            {
                $column_name    = $column_name;
            } 
            else 
            {
                $column_name    = '';
            }

            if(strpos($this->sql, 'WHERE') === false && $statement != 'WHERE') 
            {
                exit('YOU HAVEN\'T PUT "WHERE" CONDITION IN YOUR SQL : '.str_replace(':::',' ',$this->sql));
            } 
            else 
            {
                if($condition == '') 
                {
                    $this->sql .= ":::$statement $column_name $type LIKE '%$keyword%'";
                } 
                else 
                {
                    if($condition == 'l') 
                    {
                        $this->sql .= ":::$statement $column_name $type LIKE '%$keyword'";
                    } 
                    else if($condition == 'r') 
                    {
                        $this->sql .= ":::$statement $column_name $type LIKE '$keyword%'";
                    }
                    else if($condition == 'n') 
                    {
                        $this->sql .= ":::$statement $column_name $type LIKE '$keyword'";
                    } 
                    else 
                    {
                        exit('ONLY "l", "r" or "n"!');
                    }
                }
            }
        }
        # E N D  L I K E

        # S T A R T  N U L L  &  I S  N O T  N U L L
        public function null() 
        {            
            $this->sql .= ":::IS NULL";        
            return $this;            
        }

        public function where_null($column_name = '') 
        {  
            $this->_null($column_name, 'null', 'where');
            return $this;             
        }

        public function and_null($column_name = '') 
        {           
            $this->_null($column_name, 'null', 'and');
            return $this;              
        }

        public function or_null($column_name = '') 
        { 
            $this->_null($column_name, 'null', 'or');
            return $this;             
        }
        
        public function not_null() 
        {            
            $this->sql .= ":::IS NOT NULL";        
            return $this;            
        }

        public function where_not_null($column_name) 
        {      
            $this->_null($column_name, 'not null', 'where');
            return $this;                
        }

        public function and_not_null($column_name) 
        {    
            $this->_null($column_name, 'not null', 'and');
            return $this;                 
        }

        public function or_not_null($column_name) 
        {    
            $this->_null($column_name, 'not null', 'or');
            return $this;                       
        }

        protected function _null($column_name = '', $type = '', $statement = '') 
        {
            if($column_name == '') 
            {
                exit('PLEASE INSERT "column_name"!');
            } 
            else if(!is_string($column_name)) 
            {
                exit('INVALID "column_name" IN YOUR SQL : '.$column_name);
            }

            $type       = strtoupper($type);

            if($type == '') 
            {
                exit('PLEASE INSERT "type"!');
            } 
            else if($type != 'NULL' && $type != 'NOT NULL') 
            {
                exit('INVALID "type" : '.$type);
            }

            $statement  = strtoupper($statement);

            if($statement == '') 
            {
                exit('PLEASE INSERT "column_name" IN YOUR "or_null"!');
            } 
            else if(!in_array($statement, array('WHERE', 'AND', 'OR'))) 
            {
                exit('INVALID SQL STATEMENT : '.$statement);
            }

            $this->sql .= ":::$statement $column_name IS $type"; 
        }
        # E N D  N U L L  &  I S  N O T  N U L L

        
        # S T A R T  W H E R E,  A N D,  &  O R
        public function where($data1 = '', $data2 = '', $data3 = '') 
        {
            if($data1 == '') 
            {
                $this->sql .= '';
            } 
            else 
            {
                $this->sql .= ':::WHERE '.$this->get_condition($data1, $data2, $data3);
            } 
            return $this;
        }
   
        public function and($data1 = '', $data2 = '', $data3 = '') 
        {
            if($data1 == '')
            {
                $this->sql .= '';
            } 
            else 
            {
                $this->sql .= ':::AND '.$this->get_condition($data1, $data2, $data3);
            }        
            return $this;     
        }
        
        public function or($data1 = '', $data2 = '', $data3 = '') 
        {            
            if($data1 == '') 
            {
                $this->sql .= '';
            } 
            else 
            {
                $this->sql .= ':::OR '.$this->get_condition($data1, $data2, $data3);
            }
            return $this;
        }
        # E N D  W H E R E,  A N D,  &  O R
        
        public function set($data1 = '', $data2 = '', $data3 = '') 
        {   
            $this->set .= $this->get_condition($data1, $data2, $data3, 'set').', ';
            return $this;
        }
        
        public function data($data1 = '', $data2 = '', $data3 = '') 
        {                
            if($data2 == '') 
            {
                if(is_array($data1)) 
                { 
                    foreach ($data1 as $k => $v) 
                    {   
                        array_push($this->key, $k);
                        array_push($this->value, $v);
                        array_push($this->type, '');
                    }                        
                } 
                else 
                {
                    if(strpos($data1,'::') !== false || strpos($data1,'=') !== false) 
                    {
                        $data1 = str_replace('::','=',$data1);
                        $data1 = explode('=',$data1);
                        array_push($this->key, $data1[0]);
                        array_push($this->value, $data1[1]);
                        array_push($this->type, '');
                    } 
                    else 
                    {
                        if($data1 != '')
                        {
                            array_push($this->key, $data1);
                            array_push($this->value, $this->null_verification($data2));
                            array_push($this->type, '');
                        }
                    }
                }
            } 
            else 
            {
                array_push($this->key, $data1);
                array_push($this->value, $data2);
                array_push($this->type, '');
                // if($data3 == '') 
                // {
                //     if  ($data2 == 'at')
                //     {
                //         if(strpos($data1,'::') !== false || strpos($data1,'=') !== false) 
                //         {
                //             $data1 = explode('=',str_replace('::','=',$data1));
                //             array_push($this->key, $data1[0]);
                //             array_push($this->value, $data1[1]);
                //             array_push($this->type, $data2);
                //         } 
                //         else 
                //         {
                //             echo "WRONG OPERATOR, ONLY :: & = ARE ALLOWED!";
                //         }
                //     } 
                //     else 
                //     {
                //         array_push($this->key, $data1);
                //         array_push($this->value, $data2);
                //         array_push($this->type, '');
                //     }
                // } 
                // else 
                // {
                //     if  ($data3 == 'at') 
                //     {
                //         array_push($this->key, $data1);
                //         array_push($this->value, $data2);
                //         array_push($this->type, $data3);
                //     } 
                //     else 
                //     {
                //         echo "WRONG TYPE, ONLY 'at' IS ALLOWED!";
                //     }
                // }
            }
     
            return $this;                 
        }

        protected function get_condition($data1 = '', $data2 = '', $data3 = '', $type = '') 
        {
            if($data2 == '') 
            {
                if(is_array($data1)) 
                { 
                    foreach ($data1 as $k => $v) 
                    {   
                        $sql    = $k . ' = ' . $this->null_verification($v);
                    }                        
                } 
                else 
                {
                    if(strpos($data1,'::') !== false || strpos($data1,'=') !== false) 
                    {
                        $data1  = str_replace('::','=',$data1);
                        $data1  = explode('=', $data1);
                        $sql    = $data1[0] . ' = ' . $this->null_verification($data1[1]);
                    } 
                    else
                    {
                        if($data1 != '')
                        {
                            if($type === 'set')
                            {
                                $sql    = $data1 . ' = ' . $this->null_verification($data2);
                            }
                            else
                            {
                                $sql    = $data1;
                            }
                        }
                    }
                }
            } 
            else 
            {
                if  ($data2 == '<' || $data2 == '>' || $data2 == '<=' || $data2 == '>=' || $data2 == '!=') 
                {                    
                    if  ($data3 == 'at') 
                    {
                        $data1  = str_replace('::',$data2,$data1);
                        $data1  = explode($data2, $data1);
                        $sql    = $data1[0] .' '.$data2.' '. $data1[1].'';  
                    } 
                    else 
                    {
                        $data1  = str_replace('::',$data2,$data1);
                        $data1  = explode($data2, $data1);
                        $sql    = $data1[0] .' '.$data2.' '. '"'.$data1[1].'"';
                    }
                } 
                else if  ($data2 == 'at') 
                {
                    $data1  = str_replace('::','=',$data1);
                    $data1  = explode('=', $data1);
                    $sql    = $data1[0] . ' = ' . $data1[1].'';
                } 
                else 
                {
                    if  ($data3 == 'at') 
                    {
                        if(strpos($data1,'::') !== false || strpos($data1,'=') !== false) 
                        {
                            $data1  = str_replace('::','=',$data1);
                            $data1  = explode('=', $data1);
                            $sql    = $data1[0] . ' = ' .$data1[1].'';
                        } 
                        else 
                        {
                            if  (strpos($data1, '<') !== false || strpos($data1, '>') !== false || strpos($data1, '=') !== false || strpos($data1, '<=') !== false || strpos($data1, '>=') !== false || strpos($data1, '!=') !== false) 
                            {                            
                                $sql   = $data1 .' '.$data2.'';
                            } 
                            else 
                            {                        
                                $sql   = $data1 .' = '.$data2.'';
                            }
                        }
                    } 
                    else 
                    {
                        if  ($data3 == '') 
                        {
                            if  (strpos($data1, '<') !== false || strpos($data1, '>') !== false || strpos($data1, '=') !== false || strpos($data1, '<=') !== false || strpos($data1, '>=') !== false || strpos($data1, '!=') !== false) 
                            {                            
                                $sql   = $data1 .' "'.$data2.'"';
                            } 
                            else 
                            {
                                $sql   = $data1 .' = '.$this->null_verification($data2);
                            }
                        } 
                        else 
                        { 
                            if  ($data3 == '<' || $data3 == '<=' || $data3 == '>' || $data3 == '>=' || $data3 == '!=' || $data3 == '=') 
                            {                            
                                $sql   = $data1 .' '.$data3.' "'.$data2.'"';
                            } 
                            else 
                            {    
                                echo 'INVALID OPERATOR : '.$data3;
                            }
                        }
                    }
                }
            }
            return $sql;
        }

        protected function null_verification($value)
        {
            if(strtolower($value) === 'null' || $value === '')
            {
                return 'NULL';
            }
            else
            {
                return '"'.$value.'"';
            }
        }
    
        public function limit($total_rows = null, $total_rows1 = null) 
        {
            if($total_rows == '' || $total_rows == null) 
            {
                $this->sql .= '';
            } 
            else 
            {
                if($total_rows1 == '' || $total_rows1 == null) 
                {
                    $this->sql .= ':::LIMIT '.$total_rows;
                }
                else
                {
                    $page_result = ($total_rows - 1) * $total_rows1;
                    $this->sql .= ":::LIMIT $page_result,$total_rows1";
                }
            }           
            return $this;         
        }
    
        public function delete_from($table) 
        {
           $this->sql .= $table;
           return $this;            
        }
    
        # R E T R I E V E,  I N S E R T,  U P D A T E  A N D  D E L E T E
        public function get($data = '', $type = '') 
        {
            if($data == '') 
            {
                return $this->db->get($this->get_query());
            } 
            else 
            {
                if($data == '1' || $data == 'c') 
                {
                    return $this->db->get($this->get_query(),$data);
                } 
                else if($data == 'show') 
                {
                    return $this->get_query()."<br>";
                } 
                else 
                {
                    if($type == '1' || $type == 'c') 
                    {
                        return $this->db->get($data,$type);
                    } 
                    else if($type == 'show') 
                    {
                        return $this->get_query()."<br>";
                    } 
                    else 
                    {
                        return $this->db->get($data,$type);
                    }
                }
            }    
        }

        public function insert($table = '', $instruction = '', $type = '') 
        {                             
            $key    = '';
            $value  = '';

            if(is_array($instruction)) 
            {
                foreach ($instruction as $k => $v) 
                {        
                    $key   .= "`".$k."`" . ',';    
                    $value .= $this->null_verification($v) . ',';        
                }
            } 
            else 
            {
                for($i = 0; $i < count($this->key); $i++)
                {
                    $key    .= "`".$this->key[$i]."`".',';

                    if($this->type[$i] == '') 
                    {
                        $value  .= $this->null_verification($this->value[$i]).',';
                    } 
                    else 
                    {
                        if($this->type[$i] == 'at') 
                        {
                            $value  .= $this->value[$i] . ',';
                        } 
                        else 
                        {
                            $value  .= $this->null_verification($this->value[$i]).',';
                        }
                    }
                } 

                unset($this->key);
                unset($this->value);
                unset($this->type);
            
                $this->value    = array();            
                $this->key      = array();            
                $this->type     = array(); 
            }
    
            $key_list   = rtrim($key,',');    
            $value_list = rtrim($value,',');

            $this->sql .= "INSERT INTO `{$table}` ({$key_list}) VALUES ($value_list)";

            if($instruction == '') 
            {
                $this->db->insert($this->get_query());  
            } 
            else 
            {
                if($instruction == 'show') 
                {
                    return $this->get_query()."<br>";
                } 
                else if(is_array($instruction)) 
                {
                    if($type == '') 
                    {
                        $this->db->insert($this->get_query());  
                    } 
                    else 
                    {
                        if($type == 'show') 
                        {
                            return $this->get_query()."<br>";
                        } 
                        else 
                        {
                            exit('INVALID "'.$type.'", THE REST OF THE SCRIPTS ARE TERMINATED!');       
                        } 
                    }          
                } 
                else 
                {
                    exit('INVALID "'.$instruction.'", THE REST OF THE SCRIPTS ARE TERMINATED!');
                }
            }
        }

        public function update($table = '', $instruction = '', $type = '') 
        {    
            $KV_list = '';   
    
            if(is_array($instruction)) 
            {
                foreach ($instruction as $k => $v) 
                {        
                    // $KV_list .= $k.' = "'.$v.'", ';
                    $KV_list .= $k.' = '.$this->null_verification($v).', '; 
                }
            }
            else 
            {
                $KV_list = $this->set;
            }
    
            $KV_list = rtrim($KV_list, ', ');

            $this->sql .= "UPDATE `{$table}` SET {$KV_list} {$this->get_query()}";

            if($instruction == '') 
            {
                $this->db->update($this->get_query());  
            } 
            else 
            {
                if($instruction == 'show') 
                {
                    return $this->get_query()."<br>";
                } 
                else if(is_array($instruction)) 
                {
                    if($type == '') 
                    {
                        $this->db->update($this->get_query());  
                    } 
                    else 
                    {
                        if($type == 'show') 
                        {
                            return $this->get_query()."<br>";
                        } 
                        else 
                        {
                            exit('INVALID "'.$type.'", THE REST OF THE SCRIPTS ARE TERMINATED!');       
                        } 
                    }          
                } 
                else 
                {
                    exit('INVALID "'.$instruction.'", THE REST OF THE SCRIPTS ARE TERMINATED!');
                }
            }
        }
    
        public function delete($table = '', $instruction = '')
        {              
            if($table == '') 
            {
                exit('PLEASE INSERT A TABLE NAME!');
            }

            $this->sql .= "DELETE FROM `{$table}` {$this->get_query()}";

            if($instruction == '') 
            {
                $this->db->delete($this->get_query());
            } 
            else 
            {
                if($instruction == 'show') 
                {
                    return $this->get_query()."<br>";
                } 
                else 
                {
                    exit('INVALID "'.$instruction.'", THE REST OF THE SCRIPTS ARE TERMINATED!');
                }
            }            
        }
    
        public function execute($sql)
        {
            $this->db->execute($sql);            
        }
    
        public function fetch_type()
        {              
            return $this->db->fetch_type();
        }
         
        public function close_conn() 
        {
            $this->db->close();
        }

        protected function clear() 
        {
            $this->sql = '';
            $this->set = '';
        }
         
        public function get_query() 
        {
            return str_replace(':::',' ', $this->sql).$this->clear();
        }    
    }    
?>