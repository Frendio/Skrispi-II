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

		if($url[1] == 'english' || $url[1] == 'developer_profile') {

			to('div', 'class::rsm-search');
				to('form','id::manual-search class::manual-search submit::false');
					tag('input','type::text id::ms-input name::ms-input class::ms-input autocomplete::off placeholder::Search*Manual...');
					tag('input','type::hidden id::ms-input-lang name::ms-input-lang value::english');
				tc('form');
			tc('div');

			to('div', 'class::rsm-search');
				to('a', 'class::link*wfc href::manual/english');
					to('div','class::manual-hm').show('-- MANUAL --').tc('div');
				tc('a');
			tc('div');
			
			to('a', 'class::link*wfc href::manual/english/welcome-to-madeline-framework');
				to('button', 'class::rsb-menu*'.$manual->wtmf_back($page).'') . show('Welcome To MadeLine') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/english/installation-instructions');
				to('button', 'class::rsb-menu*'.$manual->ii_back($page).'') . show('Installation & API Fetching *') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/english/configurations');
				to('button', 'class::rsb-menu*'.$manual->conf_back($page).'') . show('Configurations *') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/english/madeline-cmv');
				to('button', 'class::rsb-menu*'.$manual->mvc_back($page).'') . show('CMV (Controller, Model & View)') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/english/libraries');
				to('button', 'class::rsb-menu*'.$manual->lib_back($page).'') . show('Libraries') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/english/general-topics');
				to('button', 'class::rsb-menu*'.$manual->gt_back($page).'') . show('General Topics') . tc('button');
			tc('a');
		
		} else {

			to('div', 'class::rsm-search');
				to('form','id::manual-search class::manual-search submit::false');
					tag('input','type::text id::ms-input name::ms-input class::ms-input autocomplete::off placeholder::Cari*Manual...');
					tag('input','type::hidden id::ms-input-lang name::ms-input-lang value::bahasa');
				tc('form');
			tc('div');

			to('div', 'class::rsm-search');
				to('a', 'class::link*wfc href::manual/bahasa');
					to('div','class::manual-hm').show('-- MANUAL --').tc('div');
				tc('a');
			tc('div');
			
			to('a', 'class::link*wfc href::manual/bahasa/welcome-to-madeline-framework');
				to('button', 'class::rsb-menu*'.$manual->wtmf_back($page).'') . show('Selamat Datang Di MadeLine') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/bahasa/installation-instructions');
				to('button', 'class::rsb-menu*'.$manual->ii_back($page).'') . show('Instatlasi & API Fetching *') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/bahasa/configurations');
				to('button', 'class::rsb-menu*'.$manual->conf_back($page).'') . show('Konfigurasi *') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/bahasa/madeline-cmv');
				to('button', 'class::rsb-menu*'.$manual->mvc_back($page).'') . show('CMV (Controller, Model & View)') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/bahasa/libraries');
				to('button', 'class::rsb-menu*'.$manual->lib_back($page).'') . show('Libraries') . tc('button');
			tc('a');
			
			to('a', 'class::link*wfc href::manual/bahasa/general-topics');
				to('button', 'class::rsb-menu*'.$manual->gt_back($page).'') . show('Topic Umum') . tc('button');
			tc('a');
		}
				
	tc('nav');

?>

