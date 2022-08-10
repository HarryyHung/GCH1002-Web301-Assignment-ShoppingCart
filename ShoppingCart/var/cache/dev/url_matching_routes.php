<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cart' => [[['_route' => 'view_list_cart', '_controller' => 'App\\Controller\\CartController::cartIndex'], null, null, null, true, false, null]],
        '/admin/category' => [[['_route' => 'view_list_category', '_controller' => 'App\\Controller\\CategoryController::CategoryIndex'], null, null, null, true, false, null]],
        '/admin/category/add' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\CategoryController::CategoryAdd'], null, null, null, false, false, null]],
        '/admin/customer' => [[['_route' => 'view_list_customer', '_controller' => 'App\\Controller\\CustomerController::customerIndex'], null, null, null, true, false, null]],
        '/admin/customer/add' => [[['_route' => 'add_customer', '_controller' => 'App\\Controller\\CustomerController::customerAdd'], null, null, null, false, false, null]],
        '/admin/customer/searchByName' => [[['_route' => 'search_customer_name', '_controller' => 'App\\Controller\\CustomerController::SearchCustomerName'], null, null, null, false, false, null]],
        '/admin/employee' => [[['_route' => 'view_list_employee', '_controller' => 'App\\Controller\\EmployeeController::employeeIndex'], null, null, null, true, false, null]],
        '/admin/employee/add' => [[['_route' => 'add_employee', '_controller' => 'App\\Controller\\EmployeeController::employeeAdd'], null, null, null, false, false, null]],
        '/admin/employee/searchByName' => [[['_route' => 'search_employee_name', '_controller' => 'App\\Controller\\EmployeeController::SearchEmployeeName'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/product/search' => [[['_route' => 'product_search', '_controller' => 'App\\Controller\\HomeController::productSearch'], null, null, null, false, false, null]],
        '/home/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\HomeController::cart'], null, null, null, false, false, null]],
        '/home/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\HomeController::checkout'], null, null, null, false, false, null]],
        '/admin/image' => [[['_route' => 'image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, null, null, false, false, null]],
        '/admin/image/add' => [[['_route' => 'image_add', '_controller' => 'App\\Controller\\ImageController::add'], null, null, null, false, false, null]],
        '/orderInfo' => [[['_route' => 'view_list_orderInfo', '_controller' => 'App\\Controller\\OrderInfoController::orderInfoIndex'], null, null, null, true, false, null]],
        '/orderInfo/add' => [[['_route' => 'add_orderInfo', '_controller' => 'App\\Controller\\OrderInfoController::orderInfoAdd'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'view_list_product', '_controller' => 'App\\Controller\\ProductController::ProductIndex'], null, null, null, true, false, null]],
        '/admin/product/add' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductController::ProductAdd'], null, null, null, false, false, null]],
        '/admin/product/sortbyprice/asc' => [[['_route' => 'sort_product_price_ascending', '_controller' => 'App\\Controller\\ProductController::ProductSortAscending'], null, null, null, false, false, null]],
        '/admin/product/sortbyprice/desc' => [[['_route' => 'sort_product_price_descending', '_controller' => 'App\\Controller\\ProductController::productSortDescending'], null, null, null, false, false, null]],
        '/admin/product/sortbyname/asc' => [[['_route' => 'sort_product_name_ascending', '_controller' => 'App\\Controller\\ProductController::ProductSortNameAscending'], null, null, null, false, false, null]],
        '/admin/product/searchByName' => [[['_route' => 'search_product_name', '_controller' => 'App\\Controller\\ProductController::SearchProductName'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\SecurityController::UserAdd'], null, null, null, false, false, null]],
        '/sitemap/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::showAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cart/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:34)'
                        .'|lete/([^/]++)(*:54)'
                    .')'
                    .'|edit/([^/]++)(*:75)'
                .')'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory/(?'
                            .'|delete/([^/]++)(*:123)'
                            .'|edit/([^/]++)(*:144)'
                        .')'
                        .'|ustomer/(?'
                            .'|de(?'
                                .'|tail/([^/]++)(*:182)'
                                .'|lete/([^/]++)(*:203)'
                            .')'
                            .'|edit/([^/]++)(*:225)'
                        .')'
                    .')'
                    .'|employee/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:265)'
                            .'|lete/([^/]++)(*:286)'
                        .')'
                        .'|edit/([^/]++)(*:308)'
                    .')'
                    .'|image/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:344)'
                            .'|lete/([^/]++)(*:365)'
                        .')'
                        .'|edit/([^/]++)(*:387)'
                    .')'
                    .'|product/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:425)'
                            .'|lete/([^/]++)(*:446)'
                        .')'
                        .'|edit/([^/]++)(*:468)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:508)'
                        .'|crease/([^/]++)(*:531)'
                    .')'
                    .'|add/([^/]++)(*:552)'
                    .'|increase/([^/]++)(*:577)'
                .')'
                .'|/orderInfo/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:618)'
                        .'|lete/([^/]++)(*:639)'
                    .')'
                    .'|edit/([^/]++)(*:661)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:701)'
                    .'|wdt/([^/]++)(*:721)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:767)'
                            .'|router(*:781)'
                            .'|exception(?'
                                .'|(*:801)'
                                .'|\\.css(*:814)'
                            .')'
                        .')'
                        .'|(*:824)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'view_cart_by_id', '_controller' => 'App\\Controller\\CartController::cartDetail'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'delete_cart', '_controller' => 'App\\Controller\\CartController::ccartDelete'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'edit_cart', '_controller' => 'App\\Controller\\CartController::customerEdit'], ['id'], null, null, false, true, null]],
        123 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::CategoryDelete'], ['id'], null, null, false, true, null]],
        144 => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\CategoryController::CategoryEdit'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'view_customer_by_id', '_controller' => 'App\\Controller\\CustomerController::customerDetail'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'delete_customer', '_controller' => 'App\\Controller\\CustomerController::customerDelete'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'edit_customer', '_controller' => 'App\\Controller\\CustomerController::customerEdit'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'view_employee_by_id', '_controller' => 'App\\Controller\\EmployeeController::employeeDetail'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'delete_employee', '_controller' => 'App\\Controller\\EmployeeController::employeeDelete'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'edit_employee', '_controller' => 'App\\Controller\\EmployeeController::customerEdit'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'image_detail', '_controller' => 'App\\Controller\\ImageController::detail'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'view_product_by_id', '_controller' => 'App\\Controller\\ProductController::ProductDetail'], ['id'], null, null, false, true, null]],
        446 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::ProductDelete'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'edit_product', '_controller' => 'App\\Controller\\ProductController::ProductEdit'], ['id'], null, null, false, true, null]],
        508 => [[['_route' => 'product_detail', '_controller' => 'App\\Controller\\HomeController::productDetail'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'product_decrease_quantity', '_controller' => 'App\\Controller\\HomeController::productDecreaseQuantity'], ['id'], null, null, false, true, null]],
        552 => [[['_route' => 'product_add_cart', '_controller' => 'App\\Controller\\HomeController::productAdd'], ['id'], null, null, false, true, null]],
        577 => [[['_route' => 'product_increase_quantity', '_controller' => 'App\\Controller\\HomeController::productIncreaseQuantity'], ['id'], null, null, false, true, null]],
        618 => [[['_route' => 'view_orderInfo_by_id', '_controller' => 'App\\Controller\\OrderInfoController::orderInfoDetail'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'delete_orderInfo', '_controller' => 'App\\Controller\\OrderInfoController::orderInfoDelete'], ['id'], null, null, false, true, null]],
        661 => [[['_route' => 'edit_orderInfo', '_controller' => 'App\\Controller\\OrderInfoController::customerEdit'], ['id'], null, null, false, true, null]],
        701 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        721 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        767 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        781 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        801 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        814 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        824 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
