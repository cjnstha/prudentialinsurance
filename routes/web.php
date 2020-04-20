<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('layouts.frontend.master');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::match(['get','post'],'/','AdminController@login');
    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');

        //AboutUs Routes//
        Route::get('about-us','AboutUsController@index')->name('about.index');
        Route::get('about-us/create','AboutUsController@create')->name('about.create');
        Route::post('about-us/store','AboutUsController@store')->name('about.store');
        Route::get('about-us/edit/{id}','AboutUsController@edit')->name('about.edit');
        Route::post('about-us/update/{id}','AboutUsController@update')->name('about.update');
        Route::get('about-us/destroy/{id}','AboutUsController@destroy')->name('about.destroy');

        //BOD Routes//
        Route::get('bod','BODController@index')->name('bod.index');
        Route::get('bod/create','BODController@create')->name('bod.create');
        Route::post('bod/store','BODController@store')->name('bod.store');
        Route::get('bod/edit/{id}','BODController@edit')->name('bod.edit');
        Route::post('bod/update/{id}','BODController@update')->name('bod.update');
        Route::get('bod/destroy/{id}','BODController@destroy')->name('bod.destroy');

        //TeamMember Routes//
        Route::get('team','TeamMemberController@index')->name('team.index');
        Route::get('team/create','TeamMemberController@create')->name('team.create');
        Route::post('about-us/store','TeamMemberController@store')->name('team.store');
        Route::get('team/edit/{id}','TeamMemberController@edit')->name('team.edit');
        Route::post('team/update/{id}','TeamMemberController@update')->name('team.update');
        Route::get('team/destroy/{id}','TeamMemberController@destroy')->name('team.destroy');

        //BranchList Routes//
        Route::get('branch','BranchListController@index')->name('branches.index');
        Route::get('branch/create','BranchListController@create')->name('branches.create');
        Route::post('branch/store','BranchListController@store')->name('branches.store');
        Route::get('branch/edit/{id}','BranchListController@edit')->name('branches.edit');
        Route::post('branch/update/{id}','BranchListController@update')->name('branches.update');
        Route::get('branch/destroy/{id}','BranchListController@destroy')->name('branches.destroy');

        //Agents Routes//
        Route::get('agents','AgentController@index')->name('agents.index');
        Route::get('agents/create','AgentController@create')->name('agents.create');
        Route::post('agents/store','AgentController@store')->name('agents.store');
        Route::get('agents/edit/{id}','AgentController@edit')->name('agents.edit');
        Route::post('agents/update/{id}','AgentController@update')->name('agents.update');
        Route::get('agents/destroy/{id}','AgentController@destroy')->name('agents.destroy');

        //Surveyors Routes//
        Route::get('surveyors','SurveyorsController@index')->name('surveyors.index');
        Route::get('surveyors/create','SurveyorsController@create')->name('surveyors.create');
        Route::post('surveyors/store','SurveyorsController@store')->name('surveyors.store');
        Route::get('surveyors/edit/{id}','SurveyorsController@edit')->name('surveyors.edit');
        Route::post('surveyors/update/{id}','SurveyorsController@update')->name('surveyors.update');
        Route::get('surveyors/destroy/{id}','SurveyorsController@destroy')->name('surveyors.destroy');

        //Citizen Charter Routes//
        Route::get('citizens-charter','CitizenCharterController@index')->name('citizens.index');
        Route::get('citizens-charter/create','CitizenCharterController@create')->name('citizens.create');
        Route::post('citizens-charter/store','CitizenCharterController@store')->name('citizens.store');
        Route::get('citizens-charter/edit/{id}','CitizenCharterController@edit')->name('citizens.edit');
        Route::post('citizens-charter/update/{id}','CitizenCharterController@update')->name('citizens.update');
        Route::get('citizens-charter/destroy/{id}','CitizenCharterController@destroy')->name('citizens.destroy');

        //FAQ Routes//
        Route::get('faqs','FaqController@index')->name('faqs.index');
        Route::get('faqs/create','FaqController@create')->name('faqs.create');
        Route::post('faqs/store','FaqController@store')->name('faqs.store');
        Route::get('faqs/edit/{id}','FaqController@edit')->name('faqs.edit');
        Route::post('faqs/update/{id}','FaqController@update')->name('faqs.update');
        Route::get('faqs/destroy/{id}','FaqController@destroy')->name('faqs.destroy');

        //Capital Structure Routes//
        Route::get('capital-structure','CapitalStructureController@index')->name('capital.index');
        Route::get('capital-structure/create','CapitalStructureController@create')->name('capital.create');
        Route::post('capital-structure/store','CapitalStructureController@store')->name('capital.store');
        Route::get('capital-structure/edit/{id}','CapitalStructureController@edit')->name('capital.edit');
        Route::post('capital-structure/update/{id}','CapitalStructureController@update')->name('capital.update');
        Route::get('capital-structure/destroy/{id}','CapitalStructureController@destroy')->name('capital.destroy');

        //Premium Structure Routes//
        Route::get('premium-structure','PremiumController@index')->name('premium.index');
        Route::get('premium-structure/create','PremiumController@create')->name('premium.create');
        Route::post('premium-structure/store','PremiumController@store')->name('premium.store');
        Route::get('premium-structure/edit/{id}','PremiumController@edit')->name('premium.edit');
        Route::post('premium-structure/update/{id}','PremiumController@update')->name('premium.update');
        Route::get('premium-structure/destroy/{id}','PremiumController@destroy')->name('premium.destroy');

        //Investment Routes//
        Route::get('investment','InvestmentController@index')->name('investment.index');
        Route::get('investment/create','InvestmentController@create')->name('investment.create');
        Route::post('investment/store','InvestmentController@store')->name('investment.store');
        Route::get('investment/edit/{id}','InvestmentController@edit')->name('investment.edit');
        Route::post('investment/update/{id}','InvestmentController@update')->name('investment.update');
        Route::get('investment/destroy/{id}','InvestmentController@destroy')->name('investment.destroy');

        //Reserves Routes//
        Route::get('reserves','ReserveController@index')->name('reserve.index');
        Route::get('reserves/create','ReserveController@create')->name('reserve.create');
        Route::post('reserves/store','ReserveController@store')->name('reserve.store');
        Route::get('reserves/edit/{id}','ReserveController@edit')->name('reserve.edit');
        Route::post('reserves/update/{id}','ReserveController@update')->name('reserve.update');
        Route::get('reserves/destroy/{id}','ReserveController@destroy')->name('reserve.destroy');

        //Quarterly Report Routes//
        Route::get('quarter','QuarterlyController@index')->name('quarter.index');
        Route::get('quarter/create','QuarterlyController@create')->name('quarter.create');
        Route::post('quarter/store','QuarterlyController@store')->name('quarter.store');
        Route::get('quarter/edit/{id}','QuarterlyController@edit')->name('quarter.edit');
        Route::post('quarter/update/{id}','QuarterlyController@update')->name('quarter.update');
        Route::get('quarter/destroy/{id}','QuarterlyController@destroy')->name('quarter.destroy');

        //Financial Report Controller//
        Route::get('financial','FinancialController@index')->name('financial.index');
        Route::get('financial/create','FinancialController@create')->name('financial.create');
        Route::post('quarter/store','FinancialController@store')->name('financial.store');
        Route::get('financial/edit/{id}','FinancialController@edit')->name('financial.edit');
        Route::post('financial/update/{id}','FinancialController@update')->name('financial.update');
        Route::get('financial/destroy/{id}','FinancialController@destroy')->name('financial.destroy');

        //Re-Insurers Routes//
        Route::get('reinsurer','ReinsurerController@index')->name('reinsurer.index');
        Route::get('reinsurer/create','ReinsurerController@create')->name('reinsurer.create');
        Route::post('reinsurer/store','ReinsurerController@store')->name('reinsurer.store');
        Route::get('reinsurer/edit/{id}','ReinsurerController@edit')->name('reinsurer.edit');
        Route::post('reinsurer/update/{id}','ReinsurerController@update')->name('reinsurer.update');
        Route::get('reinsurer/destroy/{id}','ReinsurerController@destroy')->name('reinsurer.destroy');

        //AGM Minute Routes//
        Route::get('agmMinute','AGMController@index')->name('agm.index');
        Route::get('agmMinute/create','AGMController@create')->name('agm.create');
        Route::post('agmMinute/store','AGMController@store')->name('agm.store');


    });


});
