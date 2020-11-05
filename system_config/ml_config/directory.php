<?php

    DEFINED('BASE_URL') OR exit(header('location: 303'));

    doctype();
    to('html', 'lang::en');
        to('head');
            title('MadeLine | Configuration | Directory');
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
                            to('a', 'class::link*docs href::configuration'.$this->ml_config_uri).show('MadeLine Configuration &nbsp;').tc('a') .' '. arrow().show('&nbsp; Directory');
                        tc('div');
                        ul();                        
                        to('p', 'class::welcome-text');
                            show('Check for every attribute description in ');
                            to('a','class::link*docs href::manual/english/configurations'.$this->ml_config_uri.'#directory').show('Configuration - Directory [english]').tc('a');
                            show(' or ');
                            to('a','class::link*docs href::manual/bahasa/configurations'.$this->ml_config_uri.'#directory').show('Configuration - Directory [bahasa]').tc('a');
                            show('.');
                        tc('p');
                        ul();                    
                        to('div', 'id::content-holder');
                            $lines      = file(SYSTEM_CONFIG_PATH.'directory_configuration.php');
                            $result     = '';
                            $found      = false;
                            to('form', 'class::dir_conf ajax::1');
                                to('table', 'class::ml-table');                                    
                                    foreach($lines as $line)
                                    {
                                        if(strpos(strtolower($line), '=') !== false)
                                        {                                        
                                            $name   = str_replace(',','',explode('=', $line)[0]);
                                            $name   = str_replace("'",'',$name);
                                            $name   = str_replace("\n",'',$name);
                                            $name   = str_replace(" ",'',$name);
                                            $name   = str_replace('$directory','',$name);
                                            $name   = str_replace('[','',$name);
                                            $name   = str_replace(']','',$name);

                                            $value  = str_replace("'",'',explode('=', $line)[1]);
                                            $value  = str_replace("'",'',$value);
                                            $value  = str_replace(";",'',$value);
                                            $value  = str_replace("\n",'',$value);
                                            $value  = str_replace(" ",'',$value);
                                            $value  = str_replace(",",', ',$value);

                                            if($value == 'A_D' || $value == 'S_D') {
                                                $value = '';
                                            } else {
                                                $value = $value;
                                            }
                                            
                                            if($name == 'application') { ?>
                                                <tr class="bb">					
                                                    <td class="td-lable"><?php echo str_replace('_',' ',ucfirst($name)); ?> Directory</td>
                                                    <td class="">
                                                        <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="text" name="<?php echo $name; ?>" <?php $input->ph($value, 'insert new name. . .'); ?>>
                                                    </td>
                                                </tr>
                                            <?php } else if($name == 'system' && DIRECTORY_SEPARATOR == '/') { ?>
                                                <tr class="bb">					
                                                    <td class="td-lable"><?php echo str_replace('_',' ',ucfirst($name)); ?> Directory</td>
                                                    <td class="">
                                                        <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="text" name="<?php echo $name; ?>" <?php $input->ph($value, 'insert new name. . .'); ?>>
                                                    </td>
                                                </tr>
                                            <?php } else if($name == 'system' && DIRECTORY_SEPARATOR == '\\') { ?>
                                                <tr class="bb">					
                                                    <td class="td-lable" colspan="2">
                                                        You can only change application name, to change your system directory name, go to
                                                        <?php
                                                        to('a','class::link*docs href::manual/english/configurations'.$this->ml_config_uri.'#directory').show('Configuration - Directory [english]').tc('a');
                                                        show(' or ');
                                                        to('a','class::link*docs href::manual/bahasa/configurations'.$this->ml_config_uri.'#directory').show('Configuration - Directory [bahasa]').tc('a');
                                                        show('.');
                                                        ?>
                                                        <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="hidden" name="<?php echo $name; ?>" <?php $input->ph($value, 'insert new name. . .'); ?>>
                                                    </td>
                                                </tr>
                                            <?php }
                                        }
                                    } ?>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <button id="" class="ganti_password dir_con">Save Directory Configuration</button>
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