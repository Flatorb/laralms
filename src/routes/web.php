<?php

Route::group(['namespace' => 'Flatorb\LaraLMS\Controllers'], function() {
	Route::get('sandbox', 'SandboxController@sandbox');
});
