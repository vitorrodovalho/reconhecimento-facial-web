<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'ViaOnda',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>ViaOnda</b> Front End',
    'logo_img' => 'vendor/adminlte/dist/img/viaonda.png',
    //'logo_img' => 'resources/img/viaonda.png',
    'logo_img_class' => 'brand-image',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'ViaOnda',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        ['header' => 'registrations'],
        [
            'text' => 'products',
            'url'  => 'products',
            'active' => ['products*'],
            'icon' => 'fas fa-cube',
            'submenu' => [
                [
                    'text' => 'products',
                    'url'  => 'products',
                    'active' => ['products*'],
                ],
                [
                    'text' => 'groups',
                    'url'  => 'product_groups',
                    'active' => ['product_groups*'],
                ],
                [
                    'text' => 'packaging',
                    'url'  => 'packaging',
                    'active' => ['packaging*'],
                ],
                [
                    'text' => 'coins',
                    'url'  => 'coins',
                    'active' => ['packaging*'],
                ],
                [
                    'text' => 'cross_reference',
                    'url'  => 'cross_reference',
                    'active' => ['cross_reference*'],
                ],
            ],
        ],
        [
            'text' => 'access_control',
            'url'  => 'access_control',
            'icon' => 'fas fa-user-shield',
            'submenu' => [
                [
                    'text' => 'peoples',
                    'url'  => 'peoples',
                    'active' => ['peoples*'],
                ],
                [
                    'text' => 'students',
                    'url'  => 'students',
                    'active' => ['students*'],
                ],
                [
                    'text' => 'access_permissions',
                    'url'  => 'access_permissions',
                    'active' => ['access_permissions*'],
                ],
                [
                    'text' => 'shifts',
                    'url'  => 'shifts',
                    'active' => ['shifts*'],
                ],
            ],
        ],
        [
            'text' => 'readers',
            'url'  => 'readers',
            'icon' => 'fas fa-rss',
            'submenu' => [
                [
                    'text' => 'readers',
                    'url'  => 'readers',
                    'active' => ['readers*'],
                ],
                [
                    'text' => 'models',
                    'url'  => 'models',
                    'active' => ['models*'],
                ],
                [
                    'text' => 'locations',
                    'url'  => 'locations',
                    'active' => ['locations*'],
                ],
            ],
        ],
        [
            'text' => 'locations',
            'url'  => 'locations',
            'icon' => 'fas fa-map-marker-alt',
            'submenu' => [
                [
                    'text' => 'locations',
                    'url'  => 'locations',
                    'active' => ['locations*'],
                ],
                [
                    'text' => 'control_area',
                    'url'  => 'control_areas',
                    'active' => ['control_areas*'],
                ],
            ],
        ],
        [
            'text' => 'printers',
            'url'  => 'printers',
            'icon' => 'fas fa-print',
            'submenu' => [
                [
                    'text' => 'printers',
                    'url'  => 'printers',
                    'active' => ['printers*'],
                ],
                [
                    'text' => 'label_layout',
                    'url'  => 'label_layout',
                    'active' => ['label_layout*'],
                ],
            ],
        ],
        [
            'text' => 'companies',
            'url'  => 'companies',
            'active' => ['companies*'],
            'icon' => 'fas fa-building',
        ],
        ['header' => 'operations'],
        [
            'text' => 'reading-list',
            'url'  => 'reading-list',
            'icon' => 'fas fa-server',
            'active' => ['reading-list*'],
        ],
        [
            'text' => 'incoming-orders',
            'url'  => 'incoming-orders',
            'active' => ['incoming-orders*'],
            'icon' => 'fas fa-file-upload',
        ],
        [
            'text' => 'exit-orders',
            'url'  => 'exit-orders',
            'active' => ['exit-orders*'],
            'icon' => 'fas fa-file-download',
        ],
        [
            'text' => 'inventory',
            'url'  => 'inventory',
            'icon' => 'fas fa-cubes',
            'submenu' => [
                [
                    'text' => 'inventories',
                    'url'  => 'inventories',
                    'active' => ['inventories*'],
                ],
                [
                    'text' => 'reading-list',
                    'url'  => 'reading-list',
                    'active' => ['reading-list*'],
                ],
            ],
        ],
        [
            'text' => 'tag-printing',
            'url'  => 'tag-printing',
            'active' => ['tag-printing*'],
            'icon' => 'fas fa-print',
        ],
        ['header' => 'reports'],
        [
            'text' => 'washes',
            'url'  => 'washes',
            'active' => ['washes*'],
            'icon' => 'fas fa-soap',
        ],
        [
            'text' => 'real-time-monitor',
            'url'  => 'real-time-monitor',
            'icon' => 'fas fa-list',
        ],
        ['header' => 'graphics'],
        [
            'text' => 'items-by-location',
            'url'  => 'items-by-location',
            'icon' => 'fas fa-chart-area',
        ],
        [
            'text' => 'stock',
            'url'  => 'stock',
            'icon' => 'fas fa-chart-pie',
        ],
        ['header' => 'settings'],
        [
            'text' => 'users',
            'url'  => 'users',
            'active' => ['users*'],
            'icon' => 'fas fa-user',
        ],
        [
            'text' => 'general-settings',
            'url'  => 'general-settings',
            'icon' => 'fas fa-cog',
        ],
        [
            'text' => 'access-groups',
            'url'  => 'access-groups',
            'active' => ['access-groups*'],
            'icon' => 'fas fa-shield-alt',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'JQueryMask' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,
];
