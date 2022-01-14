<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// error solve:: import Country class
use App\Models\Country;

class CountriesController extends Controller
{
    //
    public function create()
    {
        return view('country.create');
    }

       // form data value insertion process to database
    public function store()
    {
        // database column name below
        // name,capital,currency,population
        
        // take data from your form 1st way
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        //  take data from your form 2nd way
        $name = request()->input('name');
        $capital = request()->input('capital');
        $currency = request()->input('currency');
        $population = request()->input('population');

        // 1st approach
        // value insertion process,, Model class Static built-in method call to store data to database
        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population

        // ]);
        // 

        // 2nd approach
        $country = new Country();
        $country->name = $name;
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;

        $country->save();

        return back();
    }

    public function showAllCountry()
    {
        $countries = Country::all();
        return view('country.showAllCountry' ,compact('countries'));
    }
}
