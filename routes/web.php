<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//common Resourse Routes;
//index -> show all listing;
//show -> show single listing;
//create -> show form to create new listing;
//store -> store new listing;
//edit -> show form to edit listing;
//update -> update listing;
//destory -> Delete listing;

// GEt all Listings
Route::get('/', [ListingController::class, 'index']);

//get single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->where('id', '[0-9+]');
