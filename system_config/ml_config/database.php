<?php

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    doctype();
    to('html', 'lang::en');
        to('head');
            title('MadeLine | Configuration | Database');
            tag('meta', 'charset::utf-8');
            responsive_meta();
            base_url();

            system_css('reset');
            system_css('font');
            system_css('madeline');
            system_css('manual-ls');
            bar_icon(BASE_URL.'system_config/ML_Assets/logo/mlb-logo.png');
        tc('head');

        to('body', 'role::content');
            to('div', 'class::inner-body');
                INCLUDE ML_CONFIG_PATH.'navigation/left-menu.php';
                to('div', 'class::mm-menu*show-mmm');
                    tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/menu.png');
                tc('div');
                to('div', 'class::rsb-heading*hide');
                    to('a', 'href::');
                        tag('img','class::manual-mi src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
                        to('div', 'class::rsm-heading');
                            to('div', 'class::manual-lfn style::letter-spacing:1.7px').
                                to('span', 'style::color:#006d88').show('Made').tc('span').
                                to('span').show('Line').tc('span').
                            tc('div');
                            to('div', 'class::manual-lfn*bot-manual-lfn').show('PHP - Ajax Framewok').tc('div');
                        tc('div');
                    tc('a');
                tc('div');
                to('section', 'class::wy-nav-content-wrap');
                    to('div', 'class::wy-nav-content');
                        to('div' ,'class::head-nav role::navigation');
                            to('a', 'class::link*docs href::configuration'.$this->ml_config_uri).show('MadeLine Configuration &nbsp;').tc('a') .' '. arrow().show('&nbsp; Database');
                        tc('div');
                        ul();                    
                        to('p', 'class::welcome-text');
                            show('Check for every attribute description in ');
                            to('a','class::link*docs href::manual/english/configurations'.$this->ml_config_uri.'#database').show('Configuration - Database [english]').tc('a');
                            show(' or ');
                            to('a','class::link*docs href::manual/bahasa/configurations'.$this->ml_config_uri.'#database').show('Configuration - Database [bahasa]').tc('a');
                            show('.');
                        tc('p');
                        ul();                    
                        to('div', 'id::content-holder');                
                            to('form', 'class::db_conf ajax::1');
                                to('table', 'class::ml-table');                            
                                    $lines      = file(CONFIGURATION_PATH.'database.php');                            
                                    $result     = '';
                                    $found      = false;
                                    $tr_index   = 0;
                                    foreach($lines as $line)
                                    {
                                        if(strpos(strtolower($line), '=>') !== false)
                                        {
                                            $tr_index++;
                                            if ($tr_index % 2 == 0) {
                                                $tr_back = 'nodd';
                                            } else {
                                                $tr_back = 'odd';
                                            }
        
                                            $name   = str_replace(',','',explode('=>', $line)[0]);
                                            $name   = str_replace("'",'',$name);
                                            $name   = str_replace("\n",'',$name);
                                            $name   = str_replace(" ",'',$name);

                                            $value  = str_replace(',','',explode('=>', $line)[1]);
                                            $value  = str_replace("'",'',$value);
                                            $value  = str_replace("\n",'',$value);
                                            $value  = str_replace(" ",'',$value);

                                            if($value == 'DB_H') {
                                                $value  = '';
                                            } else if($value == 'DB_U') {
                                                $value  = '';
                                            } else if($value == 'DB_P') {
                                                $value  = '';
                                            } else if($value == 'DB_N') {
                                                $value  = '';
                                            } else {
                                                $value  = $value;
                                            }
                                            
                                            if($name == 'fetch_type') { ?>

                                            <tr class="bb<?php //echo $tr_back; ?>">					
                                                <td class="td-lable">Result Set (fetch_type)</td>
                                                <td class="">
                                                    <select name="<?php echo $name; ?>" class="ML-btn-full ML-rounded ML-border-gray <?php echo $name; ?>">
                                                        <option value="">Choose Fetch Type</option>  
                                                        <option value="array" <?php $input->selected($value, 'array'); ?>>Array</option>  
                                                        <option value="assoc" <?php $input->selected($value, 'assoc'); ?>>Assoc</option>   
                                                        <option value="object" <?php $input->selected($value, 'object'); ?>>Object</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <?php } else {
                                                if ($tr_index % 2 == 0) {
                                                    $tr_back = 'nodd';
                                                } else {
                                                    $tr_back = 'odd';
                                                } ?>

                                                <tr class="bb<?php //echo $tr_back; ?>">					
                                                    <td class="td-lable"><?php echo str_replace('_',' ',ucfirst($name)); ?></td>
                                                    <td class="">
                                                        <input class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" autocomplete="off" type="text" name="<?php echo $name; ?>" value="<?php echo $value; ?>" placeholder="<?php echo $name; ?>" />
                                                    </td>
                                                </tr>

                                            <?php }
                                        }
                                    }
                                    ?>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <button id="" class="ganti_password db_con">Save Database Configuration</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>                    
                        <?php tc('div');
                        ul();
                        INCLUDE ML_CONFIG_PATH.'navigation/footer.php';
                    tc('div');
                tc('section');
            tc('div');

            ajax();
            system_js('ajax_function');
            system_js('ajax_return');
            
            ml_alert();
        tc('body');
    tc('html');
?>