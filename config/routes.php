<?php

$router->get('', 'HomeController@index');

$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('guestbook', 'GuestbookController@index');
$router->get('blog', 'BlogController@index');
$router->get('blog/{slug}', 'BlogController@show');
$router->get('shop', 'ShopController@index');

$router->get('admin', 'Admin\DashboardController@index');

$router->get('admin/products', 'Admin\ProductController@index');
$router->get('admin/products/add', 'Admin\ProductController@create');
$router->post('admin/products/add', 'Admin\ProductController@create');
$router->get('admin/products/edit/{id}', 'Admin\ProductController@edit');
$router->post('admin/products/edit/{id}', 'Admin\ProductController@edit');
$router->get('admin/products/delete/{id}', 'Admin\ProductController@delete');
$router->post('admin/products/delete/{id}', 'Admin\ProductController@delete');



$router->get('admin/categories', 'Admin\CategoryController@index');
$router->get('admin/category/add', 'Admin\CategoryController@create');
$router->post('admin/category/add', 'Admin\CategoryController@create');
$router->get('admin/category/edit/{id}', 'Admin\CategoryController@edit');
$router->post('admin/category/edit/{id}', 'Admin\CategoryController@edit');
$router->get('admin/category/delete/{id}', 'Admin\CategoryController@delete');
$router->post('admin/category/delete/{id}', 'Admin\CategoriyController@delete');


$router->post('blog/search', 'BlogController@search');
$router->get('admin/posts', 'Admin\PostController@index');
$router->get('admin/posts/add', 'Admin\PostController@add');
$router->get('admin/posts/edit/{id}', 'Admin\PostController@edit');
$router->get('admin/posts/delete/{id}', 'Admin\PostController@delete');
$router->post('admin/posts/add', 'Admin\PostController@add');
$router->post('admin/posts/edit/{id}', 'Admin\PostController@edit');
$router->post('admin/posts/delete/{id}', 'Admin\PostController@delete');



 





















// return [
//     'contact' => 'ContactController@index',
//     'about' => 'AboutController@index',
//     'blog' => 'BlogController@index',
//     'guest' => 'GuestbookController@index',
//     'admin' => 'Admin\DashboardController@index',

//     'admin/categories' => 'Admin\CategoryController@index',
//     'admin/categories/create' => 'Admin\CategoryController@create',
//     'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
//     'admin/categories/delete/{id}' => 'Admin\CategoryController@delete',
    


//     'admin/posts' => 'Admin\PostsController@index',
//     'admin/posts/create' => 'Admin\PostsController@create',
//     'admin/posts/edit/{id}' => 'Admin\PostsController@edit',
//     'admin/posts/delete/{id}' => 'Admin\PostsController@delete',

//     'admin/products' => 'Admin\ProductsController@index',
//     'admin/products/create' => 'Admin\ProductsController@create',
//     'admin/products/edit/{id}' => 'Admin\ProductsController@edit',
//     'admin/products/delete/{id}' => 'Admin\ProductsController@delete',

//     'catalog' => 'CatalogController',
//     'shop' => 'ShopController',
//     //Главаня страница
//     'index.php' => 'HomeController',
//     '' => 'HomeController', 
// ];