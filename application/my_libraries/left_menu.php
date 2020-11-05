<?php

    DEFINED('BASE_URL') OR exit(header('location: 403'));

    class Left_menu
    {
        public function master_data($page)
        {
            if(uri1 == 'master_data' && uri2 === $page || uri1 == 'tambah' && uri2 === $page)
            {
                echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
            }
        }

        public function user($page = '')
        {
            if(uri1 == 'user')
            {
                if($page === '' && !defined('uri2'))
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
                }
                else if(defined('uri2') && uri2 === $page)
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
                }
            }
        }
        
        public function staff($page)
        {
            if(uri1 == 'staff' && uri2 === $page)
            {
                echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
            }
        }
        
        public function dashboard($page = '')
        {
            if($page === '')
            {
                if(uri1 == 'dashboard')
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded';
                }
            }
            else
            {
                if(uri1 == 'dashboard' && defined('uri2') && uri2 === $page)
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
                }
            }
        }

        public function rekaptulasi($page = '')
        {
            if($page === '')
            {
                if(uri1 == 'staff' && uri2 === 'rekapitulasi')
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded';
                }
            }
            else
            {
                if(uri1 == 'staff' && defined('uri3') && uri3 === $page)
                {
                    echo 'm-menu__item--submenu m-menu__item--open m-menu__item--expanded m-menu__item--active';
                }
            }
        }
    }
