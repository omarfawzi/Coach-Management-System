<?php

Route::get('/', function (){
   return redirect()->route('adminHomePage');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'CoachController@index')->name('adminHomePage');
        Route::group(['middleware' => 'coach'], function () {

            // Client Controller
            Route::get('addClients','ClientController@addClients')->name('addClients');
            Route::post('addClientsDB','ClientController@addClientsDB')->name('addClientsDB');
            Route::get('clientProfile/{username}','ClientController@clientProfile')->name('clientProfile');
            Route::post('removeClient','ClientController@removeClient')->name('removeClient');
            Route::post('clientsReport','ClientController@clientsReport')->name('clientsReport');
            Route::post('updateStrengthPoints','ClientController@updateStrengthPoints')->name('updateStrengthPoints');
            Route::post('updateProfile','ClientController@updateProfile')->name('updateProfile');

            // Session Controller
            Route::get('addSessions','SessionController@addSessions')->name('addSessions');
            Route::post('addSessionsDB','SessionController@addSessionsDB')->name('addSessionsDB');
            Route::get('sessions','SessionController@sessions')->name('sessions');
            Route::get('updateSession/{sessionID}','SessionController@updateSession')->name('updateSession');
            Route::post('updateSessionDB','SessionController@updateSessionDB')->name('updateSessionDB');
            Route::get('deleteSessionDB/{sessionID}','SessionController@deleteSessionDB')->name('deleteSessionDB');
            Route::post('sessionReport','SessionController@sessionReport')->name('sessionReport');

            // Financial Controller
            Route::post('updateFinancialDB','FinancialController@updateFinancialDB')->name('updateFinancialDB');
            Route::post('financialReport','FinancialController@financialReport')->name('financialReport');

            // Coach Controller
            Route::get('coachProfile','CoachController@coachProfile')->name('coachProfile');
            Route::post('changePassword','CoachController@changePassword')->name('changePassword');
            Route::post('changePicture','CoachController@changePicture')->name('changePicture');
            Route::post('updateData','CoachController@updateData')->name('updateData');
            Route::get('report','CoachController@report')->name('report');

            // Company Controller
            Route::get('addCompany','CompanyController@addCompany')->name('addCompany');
            Route::post('addCompanyDB','CompanyController@addCompanyDB')->name('addCompanyDB');
            Route::get('companies','CompanyController@companies')->name('companies');
            Route::get('editCompany','CompanyController@editCompany')->name('editCompany');
            Route::post('editCompanyDB','CompanyController@editCompanyDB')->name('editCompanyDB');

        });
        Route::group(['middleware' => 'company'], function () {

        });
    });
});