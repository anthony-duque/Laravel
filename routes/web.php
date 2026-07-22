<?php

use Illuminate\Support\Facades\Route;

//  Table Models

use App\Models\CarStage;
use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use App\Models\ExtractFileDump;
use App\Models\LocationId;
use App\Models\Material;
use App\Models\MaterialType;
use App\Models\PartsReturns;
use App\Models\Repair;
use App\Models\StageHeading;
use App\Models\TechCarPriority;
use App\Models\Vendor;


Route::get('/stage/{id}', function($id){
    return StageHeading::find($id);
});

Route::get('/', function(){
    return view('stage');
});

Route::get('/stage', function(){
    return view('stage', ['stages' => StageHeading::all()]);
});

Route::get('/production', function(){
    return view('production');
});

Route::get('/deliveries', function(){
    return view('deliveries');
});

Route::get('/part_search', function(){
    return view('part_search');
});

Route::get('/materials', function(){
    return view('materials');
});

Route::get('/follow-up', function(){
    return view('follow-up');
});

Route::get('/return_forms', function(){
    return view('return_forms');
});

Route::get('/vendors', function(){
    return view('vendors');
});
