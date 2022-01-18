<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// error solve:: import Country class
use App\Models\Person;

use App\Models\Country;
class PersonsController extends Controller
{
    //display data
    public function index()
    {
        $persons = Person::all();
        return view('persons.index ', compact('persons'));
    }
    //insert data
    public function create()
    {
        $countries = Country::all();
        return view('persons.create ', compact('countries'));
    }
    public function store()
    {
        Person::create([
            'name' =>request('name'),
            'email' =>request('email'),
            'phone' =>request('phone'),
            'country_id' =>request('country_id')
            
        ]);

        return back();
    }

    //
    

}
