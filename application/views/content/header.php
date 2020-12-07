<?php DEFINED('BASE_URL') OR exit(header('location:403')); ?>

<header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop cs-BC">
            <div class="m-stack__item m-brand  m-brand--skin-dark">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="beranda" class="m-brand__logo-wrapper">
                            <img alt="" class="head-logo" src="<?php echo IMAGES_PATH; ?>logo/logo.png" />
                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                            <span></span>
                        </a>

                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>

                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>

                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark" id="m_aside_header_menu_mobile_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark">
                    <ul class="m-menu__nav  m-menu__nav--submenu-arrow">
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                    <!-- <i class="m-menu__link-icon fa fa-plus"></i> -->
                                    <span class="m-menu__link-text">Pilihan</span>
                                    <i class="m-menu__hor-arrow la la-angle-down"></i>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:250px">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <div class="m-menu__subnav">
                                        <ul class="m-menu__content cs-BC">
                                            <li class="m-menu__item">
                                                <h3 class="m-menu__heading m-menu__toggle">
                                                    <i class="m-menu__link-icon fa fa-database"></i>
                                                    <span class="m-menu__link-text">Master Data</span>
                                                </h3>
                                                <div class="dropdown-divider"></div>
                                                <ul class="m-menu__inner">
                                                    <?php if($this->session->ul_auth === 'Admin') { ?>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-sensus" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah data sensus</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-jadwal" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah jadwal ibadah</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-kegiatan" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah kegiatan</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-sakit-meninggal" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah sakit/meninggal</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-warta-jemaat" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah warta jemaat</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-renungan" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah renungan</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="admin/tambah-user" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Tambah user</span>
                                                            </a>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="sinode/export" class="m-menu__link">
                                                                <i class="m-menu__link-icon fa fa-plus"></i>
                                                                <span class="m-menu__link-text">Ambil data sensus</span>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        
                    </ul>
                </div>
                
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-nav__link-text">
                                        <?php echo $this->session->ufn_auth; ?>
                                    </span>
                                    &nbsp;&nbsp;
                                    <span class="m-topbar__userpic">
                                        <div style="background: url(<?php echo IMAGES_PATH.'icons/'.$this->session->ul_auth.'.png'; ?>) top; background-size:cover;" class="m--img-rounded m--marginless head-pp"></div>
                                    </span>
                                </a>
                                
                                <div class="m-dropdown__wrapper">
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center" style="background: url(<?php echo IMAGES_PATH; ?>misc/user_profile_bg.jpg); background-size: cover;">
                                            <div class="m-card-user m-card-user--skin-dark">
                                                <div class="m-card-user__pic">
                                                    <div style="background: url(<?php echo IMAGES_PATH.'icons/'.$this->session->ul_auth.'.png'; ?>) top; background-size:cover;" class="m--img-rounded m--marginless head-pp1"></div>
                                                </div>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name m--font-weight-500"><?php echo $this->session->ufn_auth; ?></span>
                                                    <a href="profile" class="m-card-user__email m--font-weight-300 m-link"><?php echo $this->session->ul_auth; ?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__item">
                                                        <a href="logout/<?php echo $this->session->xsrf_data(); ?>" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder btn-sm">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
