<?php

use Illuminate\Routing\Router;

$locale = LaravelLocalization::setLocale() ?: App::getLocale();

/** @var Router $router */
Route::group(['prefix' => LaravelLocalization::setLocale(),
  'middleware' => ['localize']], function (Router $router) use ($locale) {

  $router->get(trans('iad::routes.ad.index.index'), [
    'as' => $locale . '.iad.ad.index',
    'uses' => 'PublicController@index',
  ]);

  $router->get(trans('iad::routes.ad.index.category'), [
    'as' => $locale . '.iad.ad.index.category',
    'uses' => 'PublicController@index',
  ]);

  $router->get(trans('iad::routes.ad.index.service'), [
    'as' => $locale . '.iad.ad.index.service',
    'uses' => 'PublicController@index',
  ]);

  $router->get(trans('iad::routes.ad.show.ad'), [
    'as' => $locale . '.iad.ad.show',
    'uses' => 'PublicController@show',
  ]);
  $router->get(trans('iad::routes.ad.create.ad'), [
    'as' => $locale . '.iad.ad.create',
    'uses' => 'PublicController@createAd',
    //'middleware' => 'can:iad.ads.create'
  ]);
  $router->get(trans('iad::routes.ad.edit.ad'), [
    'as' => $locale . '.iad.ad.edit',
    'uses' => 'PublicController@editAd',
    'middleware' => 'can:iad.ads.edit'
  ]);
});
