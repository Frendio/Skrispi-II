<?php

	DEFINED('BASE_URL') OR exit(header('location: 303'));

    $ml_config_uri = '';
    if(!empty($GLOBALS['configuration_api']))
    {
        $ml_config_uri  = (last_ori_uri === $GLOBALS['configuration_api']) ? '/'.$GLOBALS['configuration_api'] : '';
    }
	
	to('footer' ,'class::head-nav*ml-footer');
		to('p', 'class::developer');
			show('© Copyright MadeLine Framework.');
		tc('p');
	
		to('p', 'class::developer');
			show('Designed & Developed By ');
			to('a', 'class::link*docs href::configuration/developer-profile'.$ml_config_uri).show('Stevani Andolo ').tc('a');
		tc('p');

		to('p', 'class::developer');
			show('MadeLine Version - ML1');
		tc('p');
	tc('footer');

	to('button', 'class::ml-stt_holder');
		tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/top-arrow.png class::ml-ttop-icon');
	tc('button');

?>
