<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('posts', PostController::class);
    $router->resource('banners', BannerController::class);
    $router->resource('partners', PartnerController::class);
    $router->resource('testimonials', TestimonialController::class);

});
