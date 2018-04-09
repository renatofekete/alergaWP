<?php 
function alergaAdminPage()
{
    // Adding main admin page

	add_menu_page('Alerga Options', 'Alerga', 'manage_options', 'alerga_admin_page', 'alergaMainAdminPage', get_template_directory_uri() . '/img/assets/dashicon.png', 58);
    // Submenu
	add_submenu_page('alerga_admin_page', 'Alerga Info', 'Info', 'manage_options', 'alerga_admin_page', 'alergaMainAdminPage');
	add_submenu_page('alerga_admin_page', 'Alerga Banneri', 'Banneri', 'manage_options', 'alerga_banneri', 'alergaBanneriPage');


	add_action('admin_init', 'alergaMainAdminPageSettings');
	add_action('admin_init', 'alergaBanneriPageSettings');
}
add_action('admin_menu', 'alergaAdminPage');


// Izgled
function alergaMainAdminPage()
{
	require_once(get_template_directory() . '/inc/templates/admin-general.php');
}
function alergaMainAdminPageSettings()
{
    //register fields for DB
	register_setting('alergaInfo', 'puno_ime');
    // fields grupation
	add_settings_section('alerga-info', 'Opcenite Informacije', 'alergaInfo', 'alerga_admin_page');
    // Fields
	add_settings_field('alerga-info-ime', 'Ime', 'alergaIme', 'alerga_admin_page', 'alerga-info');
    //add_settings_field( id, title, callback, page, section)
}
function alergaInfo()
{

}
function alergaIme()
{
	$punoIme = esc_attr(get_option('puno_ime'));
	echo '<input type="text" name="puno_ime" value="' . $punoIme . '" placeholder="Puno Ime" class="regular-text"></input>';
}

// Banner Page
function alergaBanneriPage()
{
	require_once(get_template_directory() . '/inc/templates/admin-banner.php');
}

function alergaBanneriPageSettings()
{
	register_setting('alergaBanneri', 'main_banner');
	register_setting('alergaBanneri', 'main_banner_link');
	register_setting('alergaBanneri', 'header_logo');

	add_settings_section('alerga-banneri', 'Banneri', 'alergaBanneri', 'alerga_banneri');

	add_settings_field('alerga-header-logo', 'Header Logo', 'alergaHeaderLogo', 'alerga_banneri', 'alerga-banneri');
	add_settings_field('alerga-main-banner', 'Main Banner', 'alergaMainBanner', 'alerga_banneri', 'alerga-banneri');
	add_settings_field('alerga-main-banner-link', 'Main Banner Link', 'mainBannerLink', 'alerga_banneri', 'alerga-banneri');
}
function alergaBanneri()
{

}
function alergaMainBanner()
{
	$mainBanner = esc_attr(get_option('main_banner')); ?>
    <div style="display: flex;">
        <div style="margin-right: 20px;"><input type="button" value="Upload" id="upload_mainBanner" /></div>
        <input type="hidden" name="main_banner" value="<?php echo "$mainBanner" ?>" id="mainBanner_image"/>
        <div id="mainBanner_preview" style="width: 300px; height: 100px; background-position: center; background-image: url(<?php echo "$mainBanner" ?>);"></div>
    </div>
<?php

}
function mainBannerLink()
{
	$mainBannerLink = esc_attr(get_option('aside_banner_link'));
	echo '<input type="text" name="main_banner_link" value="' . $mainBannerLink . '" placeholder="Asside Banner Link" class="regular-text"></input>';
}

function alergaHeaderLogo()
{
	$headerLogo = esc_attr(get_option('header_logo')); ?>
    <div style="display: flex;">
        <div style="margin-right: 20px;"><input type="button" value="Upload" id="upload_headerLogo" /></div>
        <input type="hidden" name="header_logo" value="<?php echo "$headerLogo" ?>" id="headerLogo_image"/>
        <div id="headerLogo_preview" style="width: 300px; height: 100px; background-position: center; background-image: url(<?php echo "$headerLogo" ?>);"></div>
    </div>
<?php

}

?>