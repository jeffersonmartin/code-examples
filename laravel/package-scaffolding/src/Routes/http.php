<?php

Route::group([
    'prefix' => 'admin'
    ], function () {

    Route::group([
        'namespace' => '-NAMESPACE-\-PACKAGE-\Controllers\Http\Admin',
        'prefix' => '-package-'
        ], function () {

        Route::get('/', ['as' => 'admin.-package-.dashboard', 'uses' => 'EventDashboardController@index'
            ]);

        Route::group(['prefix' => '-pluralobjects-'], function () {

            $controller_name = '-PACKAGE--TABLENAME-Controller';
            $route_name = 'admin.-package-.-pluralobjects-';

            Route::get('/', ['as' => $route_name.'.index', 'uses' => $controller_name.'@index']);
            Route::get('/create', ['as' => $route_name.'.create', 'uses' => $controller_name.'@create']);
            Route::post('/', ['as' => $route_name.'.store', 'uses' => $controller_name.'@store']);
            Route::get('/{id}', ['as' => $route_name.'.show', 'uses' => $controller_name.'@show']);
            Route::get('/{id}/edit', ['as' => $route_name.'.edit', 'uses' => $controller_name.'@edit']);
            Route::patch('/{id}', ['as' => $route_name.'.update', 'uses' => $controller_name.'@update']);
            Route::delete('/{id}', ['as' => $route_name.'.delete', 'uses' => $controller_name.'@delete']);

            Route::get('/{id}/-relatioships-', ['as' => $route_name.'.-relatioships-.index', 'uses' => '-PACKAGE--TABLENAME--RELATIONSHIP-Controller@index']);
            Route::post('/{id}/-relatioships-', ['as' => $route_name.'.-relatioships-.store', 'uses' => '-PACKAGE--TABLENAME--RELATIONSHIP-Controller@store']);
            Route::delete('/{id}/-relatioships-', ['as' => $route_name.'.-relatioships-.delete', 'uses' => '-PACKAGE--TABLENAME--RELATIONSHIP-Controller@delete']);

        });

    });

});
