<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;

class CountryStatesCityController extends Controller
{

    public function countries() {


    }

    public function states($country_id) {
        $states = State::where('country_id', '=', $country_id)->get();
        return [
            'states' => $states
        ];
    }

    public function cities( $state_id) {
        $cities = City::get();
        return [
            'cites' => $cities
        ];
    }
}
