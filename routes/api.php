<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'api'], function()
{
    Route::group(['prefix' => 'v1'], function() {

        // Link: http://infamousapi.local/api/v1/user/list
        Route::get('/user/list', [
            'uses' => 'UserController@index'
        ]);

        // Link: http://infamousapi.local/api/v1/user/5
        Route::get('/user/{id}', [
            'uses' => 'UserController@userById'
        ]);

        /**  Link: http://infamousapi.local/api/v1/user/register
         *
         *
         * Data:
             {
                "first_name": "Test",
                "last_name": "name",
                "phone_number": 9837465864,
                "email": "hi@gmail.com",
                "gender": "male",
                "date_of_birth": "1950-09-07",
                "biography": "Testing from API call.",
                "password": "Admin123",
                "profile_picture": "image.jpg"
            }
         **/
        Route::post('user/register', [
            'uses' => 'UserController@register'
        ]);

        /** Link: http://infamousapi.local/api/v1/user/update/11
         *
         *Data:
         {
            "first_name": "My First",
            "last_name": "name",
            "phone_number": 9837465864,
            "email": "name@gmail.com",
            "gender": "male",
            "date_of_birth": "1950-09-07",
            "biography": "Testing from API call.",
            "password": "Admin123",
            "profile_picture": "imageupdate.jpg"
        }
         *
         *
         * */
        Route::post('user/update/{id}', [
            'uses' => 'UserController@update'
        ]);

    });
});