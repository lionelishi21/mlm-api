<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;

class CountryStatesCityController extends Controller
{

    public function countries() {

        $countries = Country::get();
        return [
            'country' => $countries
        ];
    }

    public function states($country_id) {
        $states = State::where('country_id', '=', $country_id)->get();
        return [
            'states' => $states
        ];
    }

    public function cities( $state_id ) {

        $id = $state_id - 1;
        $cities = City::where('state_id', '=', $id )->get();
        return [
            'cites' => $cities
        ];
    }
}
