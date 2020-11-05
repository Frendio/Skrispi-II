<?php

	DEFINED('BASE_URL') OR exit(header('location: 303'));

	to('nav', 'class::ls-body');

		to('div', 'class::mm-menu*hide-mmm');
		tag('img', 'src::'.BASE_URL.'system_config/ML_Assets/icons/menu.png');
		tc('div');

		to('a', 'href::');
			to('div', 'class::rsb-heading');
				tag('img','class::manual-mi src::'.BASE_URL.'system_config/ML_Assets/logo/ml-logo.png');
				to('div', 'class::rsm-heading');
					to('div', 'class::manual-lfn style::letter-spacing:1.7px').
						to('span', 'style::color:#006d88').show('Made').tc('span').
						to('span').show('Line').tc('span').
					tc('div');
					to('div', 'class::manual-lfn*bot-manual-lfn').show('PHP - Ajax Framewok').tc('div');
				tc('div');
			tc('div');
		tc('a');

		to('div', 'class::rsm-search');
			to('a', 'class::link*wfc href::configuration'.$this->ml_config_uri);
				to('div','class::manual-hm').show('-- CONFIGURATION --').tc('div');
			tc('a');
		tc('div');

		to('div', 'class::ml_lms*ml_lms_btm').
			make('div','','class::ml_lms1').
		tc('div');
		
		to('a', 'class::link*wfc href::configuration/database'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Database Configuration') . tc('button');
		tc('a');
		
		to('a', 'class::link*wfc href::configuration/directory'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Directory Configuration') . tc('button');
		tc('a');
		
		to('a', 'class::link*wfc href::configuration/route'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Route Configuration') . tc('button');
		tc('a');

		to('div', 'class::ml_lms*ml_lms_top').
			make('div','','class::ml_lms1').
		tc('div');

		to('div', 'class::rsm-search');
			to('div','class::manual-hm').show('-- DATABASE --').tc('div');
		tc('div');

		to('div', 'class::ml_lms*ml_lms_btm').
			make('div','','class::ml_lms1').
		tc('div');
		
		to('a', 'class::link*wfc href::configuration/add-database'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Add Database') . tc('button');
		tc('a');
		
		to('a', 'class::link*wfc href::configuration/drop-database'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Drop Database') . tc('button');
		tc('a');
		
		to('a', 'class::link*wfc href::configuration/import-database'.$this->ml_config_uri);
			to('button', 'class::rsb-menu') . show('Import Database') . tc('button');
		tc('a');
	tc('nav');
?>