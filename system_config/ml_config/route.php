<?php

    DEFINED('BASE_URL') OR redirect('403');

    doctype();
    to('html', 'lang::en');
        to('head');
            title('MadeLine | Configuration | Route');
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
                            to('a', 'class::link*docs href::configuration'.$this->ml_config_uri).show('MadeLine Configuration &nbsp;').tc('a').arrow().show('&nbsp; Route');
                        tc('div');
                        ul();                    
                        to('p', 'class::welcome-text');
                            show('Check for every attribute description in ');
                            to('a','class::link*docs href::manual/english/configurations'.$this->ml_config_uri.'#route').show('Configuration - Route [english]').tc('a');
                            show(' or ');
                            to('a','class::link*docs href::manual/bahasa/configurations'.$this->ml_config_uri.'#route').show('Configuration - Route [bahasa]').tc('a');
                            show('.');
                        tc('p');
                        ul();                
                        to('div', 'id::content-holder');                            
                            $lines      = file(CONFIGURATION_PATH.'routes.php');                    
                            $result     = '';
                            $found      = false;
                            to('form', 'class::route_conf ajax::1');
                                to('table', 'class::ml-table');                                
                                    foreach($lines as $line)
                                    {
                                        if(strpos(strtolower($line), '=') !== false)
                                        {                                    
                                            $name   = str_replace(',','',explode('=', $line)[0]);
                                            $name   = str_replace("'",'',$name);
                                            $name   = str_replace("\n",'',$name);
                                            $name   = str_replace(" ",'',$name);
                                            $name   = str_replace('$route','',$name);
                                            $name   = str_replace('$GLOBALS','',$name);
                                            $name   = str_replace('[','',$name);
                                            $name   = str_replace(']','',$name);

                                            $value  = str_replace("'",'',explode('=', $line)[1]);
                                            $value  = str_replace("'",'',$value);
                                            $value  = str_replace(";",'',$value);
                                            $value  = str_replace("\n",'',$value);
                                            $value  = str_replace(" ",'',$value);
                                            $value  = str_replace(",",', ',$value);

                                            if($value == 'N_F' || $value == 'NF_CP' || $value == 'FA_CP' || $value == 'A_P' || $value == 'AL_JSF' || $value == 'AL_CSSF' || $value == 'ApiLine_API_Key' || $value == 'ML_CONFIG_API_ID') {
                                                $value = '';
                                            } else {
                                                $value = $value;
                                            }

                                            if($name == 'autoLoad_js_files' || $name == 'autoLoad_css_files') {
                                                $optional   = '(optional)';
                                            } else {
                                                $optional   = '';
                                            }

                                            $mod_name = set_mod_name($name);
                                            
                                            if($name == 'status') { ?>

                                                <tr class="bb">					
                                                    <td class="td-lable"><?php echo 'System Status '.$optional; ?></td>
                                                    <td class="">
                                                        <select name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="ML-btn-full ML-rounded ML-border-gray <?php echo $name; ?>">
                                                            <option value="">Choose System Status</option>  
                                                            <option value="development" <?php $input->selected($value, 'development'); ?>>Development</option>  
                                                            <option value="live" <?php $input->selected($value, 'live'); ?>>Live</option>   
                                                        </select>
                                                    </td>
                                                </tr>

                                            <?php } else if($name == 'right_configuration') { ?>

                                                <tr class="bb">					
                                                    <td class="td-lable"><?php echo $mod_name.' '.$optional; ?>(refresh the page for change)</td>
                                                    <td class="">
                                                        <select name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="ML-btn-full ML-rounded ML-border-gray <?php echo $name; ?>">
                                                            <option value="show" <?php $input->selected($value, 'show'); ?>>Show</option>  
                                                            <option value="hide" <?php $input->selected($value, 'hide'); ?>>Hide</option>   
                                                        </select>
                                                    </td>
                                                </tr>

                                            <?php } else {
                                                
                                                if($name == 'autoLoad_js_files') { ?>

                                                    <tr class="bb">					
                                                        <td class="td-lable"><?php echo $mod_name.' '.$optional; ?></td>
                                                        <td class="">
                                                            <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" placeholder="auto load js files" value="<?php echo $value; ?>">
                                                        </td>
                                                    </tr>

                                                <?php } else if($name == 'autoLoad_css_files') { ?>

                                                    <tr class="bb">					
                                                        <td class="td-lable"><?php echo $mod_name.' '.$optional; ?></td>
                                                        <td class="">
                                                        <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" placeholder="auto load css files" value="<?php echo $value; ?>">
                                                        </td>
                                                    </tr>

                                                <?php } else { ?>

                                                    <tr class="bb">					
                                                        <td class="td-lable"><?php echo $mod_name.' '.$optional; ?></td>
                                                        <td class="">
                                                            <input autocomplete="off" class="ML-input-full ML-rounded ML-border-gray <?php echo $name; ?>" type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" placeholder="<?php echo strtolower(set_mod_ph($name)); ?>" value="<?php echo $value; ?>">
                                                        </td>
                                                    </tr>

                                                <?php }
                                            }
                                        }                                    
                                    }
                                    ?>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <button id="" class="ganti_password route_con">Save Routes Configuration</button>
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