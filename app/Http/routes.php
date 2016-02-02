<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/test', function() {
		return view('test');
	});

Route::get('/', function () {
	return view('pages.home');
});
Route::get('/hamburg', function () {
	return view('pages.hamburg');
});

Route::get('/magazine', function () {
	return view('pages.magazine');
});

Route::get('/contact', function () {
	return view('pages.contact');
});

Route::resource('/aboutus', 'AboutusController');


Route::resource('houses', 'HousesController');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'default') {
    return $captcha->src($config);
});

Route::any('captcha-test', function()
    {
        if (Request::getMethod() == 'POST')
        {
            $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
            }
            else
            {
                echo '<p style="color: #00ff30;">Matched :)</p>';
            }
        }

        $form = '<form method="post" action="captcha-test">';
        $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        $form .= '<p>' . captcha_img() . '</p>';
        $form .= '<p><input type="text" name="captcha"></p>';
        $form .= '<p><button type="submit" name="check">Check</button></p>';
        $form .= '</form>';
        return $form;
    });

Menu::make('MyNavBar', function($menu){

  $menu->add('Home');
  $menu->add('About');
});

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'HomeController@index');
});
