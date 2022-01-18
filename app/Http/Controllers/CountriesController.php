<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// error solve:: import Country class
use App\Models\Country;
use App\Models\Person;

class CountriesController extends Controller
{
    //
    public function create()
    {
        return view('country.create');
    }

       // form data value insertion process to database
    public function saveToDatabase( Request $request)
    {
        // database column name below
        // name,capital,currency,population
        
        // take data from your form 1st way
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        //  take data from your form 2nd way
        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

          //  take data from your form 3rd way 
        //   dependency injetion using object
        // $name = $request->input('name');
        // $capital = $request->input('capital');
        // $currency = $request->input('currency');
        // $population = $request->input('population');

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
        // $country = new Country();
        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;

        // $country->save();

        // 3rd approch to save data into data base
        // Country::create( $request->all() );

        // 4th approach
        Country::create( $request->only('name','capital','currency','population') );
        
        // 5th approach
        // Country::create( $request->except('_token') );
        // return $request->except('name');

        // return back();
        return redirect('/countries');
    }

    public function showAllCountry()
    {
        $countries = Country::all();
        return view('country.showAllCountry' ,compact('countries'));
    }
    public function showCountryDetail($id)
    {
        // $country = Country::where('id', '=', $id)->first() ;//"select * from countries where id = $id";
        // $country = Country::where('id',  $id)->first() ;

        // only primary key applicable on find method
        $country = Country::find($id);

        // $country_person =Person::where('country_id' ,$country->id )->get();
        
        // return view('country.detail',compact('country' , 'country_person'));
        return view('country.detail',compact('country'));
    }
    public function edit($id)
    {
        $country = Country::find($id);
        return view('country.edit',compact('country'));
    }

    // simple way
    // public function edit(Country $country) //Route model binding
    // {
    //     return view('country.edit',compact('country'));
    // }

    public function update($id)
    {
        $country = Country::find($id);

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        //1st way exiting value into database
        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;
        // now just save
        // $country->save();

        // 2nd way
        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);
        
        return redirect('/countries');

        // return back();
    }
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();

        return back();
    }

}
