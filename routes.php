<?php 

$router->get('', 'PagesController@home');
$router->get('post', 'PagesController@post');
$router->get('news', 'PagesController@news');
$router->get('faculties', 'PagesController@faculties');
$router->get('login', 'PagesController@login');

$router->get('admin', 'PostController@index');
$router->post('addpost', 'PostController@store');
$router->post('delete', 'PostController@delete');

