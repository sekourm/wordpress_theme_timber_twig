<?php

add_theme_support('menus');

register_nav_menu('headerMenus','Main Menu');
register_nav_menu('footerMenus','Main Footer');

add_filter('timber_context', function ($context) {
    $context['headerMenus'] = new TimberMenu('headerMenus');
    $context['footerMenus'] = new TimberMenu('footerMenus');
    return $context;
});